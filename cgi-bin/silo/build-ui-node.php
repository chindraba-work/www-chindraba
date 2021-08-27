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


/* Specialised version of build_node for handling the extra meta data
 * associated with UI elements.
 * Arg data: the assoc array of meta data for a group of elements
 * Arg node_key: the type of UI node being made
 * Arg defaults: default attribute values applied if nothing else is
 * Arg overrides: attributes to replace the ones found in the normal
 *      processing of the node meta data
 * Arg prefix_id: a prefix applied to HTML id attributes within menus
 * Arg extra_attribs: attributes to apply to the node which are set by
 *      the calling function rather than the meta data configured for
 *      the node. Applied to the meta data after all other merges are
 *      completed, and in the same manner as used in collect_meta
 *
 * Return: list of strings
 *      HTML opening tag
 *      flattened list of node content (if not a self-closing tag)
 *      HTML closing tag (if not a self-closing tag)
 */
function build_ui_node(
        &$data,
        $node_key,
        $defaults = [],
        $overrides = [],
        $prefix_id = '',
        $extra_attribs = []) {
    $attribs = collect_meta($data, $node_key, $defaults, $overrides);
    $base_id = $attribs['id'];
    if ( in_array($node_key, ['menu-link', 'menu-item',]) || ('menu-body' === $node_key && 1 < $data['level'])) {
        $attribs['id'] = implode('-', flatten_list([ $prefix_id, $base_id, $data['menu-path'] ?? NULL ]));
    } else if ( array_key_exists($node_key, $data) && array_key_exists('id', $data[$node_key]) ) {
        $attribs['id'] = $base_id;
    } else {
        $attribs['id'] = implode('-', flatten_list([ $prefix_id, $attribs['id'],]));
    }
    $attribs['classes'] = $attribs['classes'] ?? '';
    foreach ($extra_attribs as $key => $value) {
        if ('radio-name' === $key) {
            $attribs['type'] = 'radio';
            $attribs['name'] = $value;
        } else if ('classes' === $key ) {
            $atribs['classes'] = merged_list([$attribs['classes'], $value]);
        } else if ('class-prefix' === $key && $value) {
            if ( is_array($value) ) {
                array_push($attribs['classes'], array_map(fn($v) => implode('-', [$v, $base_id]), $value));
            } else {
                array_push($attribs['classes'], implode('-', [$value, $base_id]));
            }
        } else if ('checked' === $key) {
            $attribs['checked'] = 'true';
        } else {
            $attribs[$key] = $value;
        }
    }
    if ('a' === $attribs['tag']) {
        $attribs['title'] = $attribs['title'] ?? join_string([
            $attribs['title-lead'] ?? '',
            $attribs['name'],
            $attribs['title-tail'] ?? '',
        ]);
    }
    return build_node($attribs);
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
