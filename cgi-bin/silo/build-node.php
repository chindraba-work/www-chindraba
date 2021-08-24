<?php
// SPDX-License-Identifier: MIT

/***********************************************************************
*                                                                      *
*  This file is part of collection of scripts and files used to create *
*  the website for Chindraba.                                          *
*                                                                      *
*  Copyright © 2020 - 2021  Chindraba (Ronald Lamoreaux)               *
*                    <website@chindraba.work>                          *
*  - All Rights Reserved                                               *
*                                                                      *
*  Permission is hereby granted, free of charge, to any person         *
*  obtaining a copy of this software and associated documentation      *
*  files (the "Software"), to deal in the Software without             *
*  restriction, including without limitation the rights to use, copy,  *
*  modify, merge, publish, distribute, sublicense, and/or sell copies  *
*  of the Software, and to permit persons to whom the Software is      *
*  furnished to do so, subject to the following conditions:            *
*                                                                      *
*  The above copyright notice and this permission notice shall be      *
*  included in all copies or substantial portions of the Software.     *
*                                                                      *
*  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,     *
*  EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF  *
*  MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND               *
*  NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS *
*  BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN  *
*  ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN   *
*  CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE    *
*  SOFTWARE.                                                           *
*                                                                      *
************************************************************************/

// Create an HTML element containing an element, or list of elements
// Arguments: $meta - Assoc array of attributes for the element
//               ['tag']
//               ['id']
//               ['contents']
//               ['classes']
// Return: list of strings
//      HTML opening tag
//      flattened list $contents (if not a self-closing tag)
//      HTML closing tag (if not a self-closing tag)

function build_node($node_data) {
    // The list of keys to ignore from the supplied data
    $ignored_data = array_merge(IGNORED_META_KEYS, IGNORED_NODE_KEYS);
    // Provide some sane, or safe, defaults if needed
    $default_data = [
        'tag' => 'span',
    ];
    // Combine the supplied data with the defaults as needed
    $node_info = array_merge($default_data, $node_data);
    $tag = $node_info['tag'];
    // The list of attributes for the HTML tag
    $attribs = [];
    // Grap the id first, just to keep things easier to find in the HTML view
    if ( array_key_exists('id', $node_info) && $node_info['id'] ) {
        $attribs[] = sprintf("id='%s'", $node_info['id']);
    }
    // Grab the classes next, just for convenience again
    if ( array_key_exists('classes', $node_info) && $node_info['classes'] ){
        $attribs[] = sprintf("class='%s'", joinString($node_info['classes']));
    }
    // Except for attributes to be ignored, and any 'text' key, copy the
    // supplied attributes to the building list
    foreach ($node_info as $key => $value) {
        // The 'text' key is taken to be raw text (or HTML) to use as the
        // content of the tag, overriding whatever might be in the 'contents'
        // key.
        if ('text' === $key) {
            $node_info['contents'] = $value;
        // Everything in the HTML value is a string, so skip anything that is
        // an array. Avoids processing errors.
        } else if ( !in_array($key, $ignored_data) && !is_array($value) ) {
            // Add the key=>value pair to the building list
            $attribs[] = sprintf("%s='%s'", $key, $value);
        }
    }
    // Check to see if the tag is an empty, or "void" tag, to avoid adding content to
    // such in violation of the HTML standard.
    if ( void_tag($tag) ) {
        return [sprintf("<%s>", join_string(strtolower($tag), $attribs))];
    // Check that there are actual contents to enclose in the tag
    } elseif ( array_key_exists('contents', $node_info) && $node_info['contents'] ) {
        return [
            // The opening tag
            sprintf("<%s>", join_string(strtolower($tag), $attribs)),
            // The contents, collapsed to a single level list of strings with each string
            // being indented, if HTML_INDENT is not an empty string. Using this function
            // at higher and lower levels of the DOM tree will cause each level to be at
            // the same indent depth so that it looks "pretty printed"
            array_map(fn($in) => HTML_INDENT . $in, flatten_list($node_info['contents'])),
            // The closing tag
            sprintf("</%s>", $tag),
        ];
    // Make the open and close tag into a single entry when there's nothing inside
    } else {
        return [sprintf("<%s></%s>", join_string(strtolower($tag), $attribs), $tag)];
    }
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
