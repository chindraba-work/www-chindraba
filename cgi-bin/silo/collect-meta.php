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

// Create the meta for the current element: merge between common meta and element defaults
// supplemented with overrides for the specific use-case.
// Return: Assoc array of meta for building the current element
/* Create the meta data for a node using default values, common data
 * for the group, data for the specific node itself, and the data which
 * is required by the system for the type of node being made.
 *
 * Arg meta_data: the master associative array for the group
 * Arg meta_key: the array key for the attributes to use for the node
 * Arg meta_defaults: the baseline defaults to apply if nothing else is
 *      provided for an attribute
 * Arg meta_overrides: any values required by the building functions
 *
 * Return: The aggregate of the inputs in a single assoc array for use
 *      in the building functions
 */
function collect_meta(&$meta_data, $meta_key, $meta_defaults, $meta_overrides = []) {
    // Load the default values, updated with the group's common data
    $meta_out = merge_meta($meta_defaults, $meta_data['common']);
    // Further update with the node specific data, if any
    if ( array_key_exists($meta_key, $meta_data) && is_array($meta_data[$meta_key]) ) {
        $meta_out = merge_meta($meta_out, $meta_data[$meta_key]);
    }
    // Lastly, apply function required override data
    $meta_out = merge_meta($meta_out, $meta_overrides);
    return $meta_out;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
