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

/* Build the meta data for a given UI group
 * Arg ui_target: the UI group to get the data for
 * Return: multi-level assoc array of meta data
 *  See cgi-bin/docs/metadata.md for details
 */
function source_meta($ui_target) {
    $ui_meta['controls']  = [];
    foreach(UI_CONTROLS as $control) $ui_meta['controls'][$control] = false;
//  Simulate database retreival
require SOLO_FILES . 'fakeDB.php';
//  Replace with a function call for database retreival
//  $source_meta_data = db_call('ui_meta_data', $ui_target);
    foreach ($source_meta_data as $data_set) {
        list($ui_group, $ui_item, $ui_name, $ui_value) = explode(',', $data_set);
// Database implementation should remove the next line
if ($ui_target === $ui_group) {
        if ('controls' === $ui_item) {
            $ui_meta['controls'][$ui_name] = (!!$ui_value);
        } elseif( array_key_exists($ui_item, $ui_meta) ) {
            $ui_meta[$ui_item][$ui_name] = $ui_value;
        } else if (!!$ui_name) {
            $ui_meta[$ui_item] = [$ui_name => $ui_value];
        } else {
            $uiMeta[$ui_item] = $ui_value;
        }
// Database implementation should remove the next line
}
    }
    return $ui_meta;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
