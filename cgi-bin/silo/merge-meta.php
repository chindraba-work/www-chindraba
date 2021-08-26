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

/* Merge meta information with control over data in selected keys.
 * Arg base_data: the list of meta data to update
 * Arg new_data: the list of meta data to merge into base_data
 * Return: base_data updated and/or overwritten with new_data
 *
 * The 'classes' attribute, as a list, is updated by addition.
 * The 'role' attribute, as a string, is updated by pre-pending the new
 *      data to it.
 * If new_data has an attribute 'class-list' it replaces 'classes' from
 *      base_data.
 * If new_data has an attribute 'roles' it replaces 'role' from
 *      base_data.
 * If new_data has an attribute 'radio-name' it creates the expectation
 *      that a radio button is being created and the HTML attribute
 *      'name' is set to the 'radio-name' attribute and the type is set
 *      to radio.
 * Any other attribute in new_data, which is not a list, is added to
 *      base_list, overriding whatever else might be there.
 * The attribute 'menu-path' is an exception to the non-list rule. It
 *      is copied whether or not it is a list.
 */
function merge_meta($base_data, $new_data) {
    $class_list = [$base_data['classes'] ?? NULL];
    foreach ($new_data as $key => $value) {
        if ('classes' === $key) {
            $class_list[] = $value;
        } elseif ('class-list' === $key) {
            $class_list = flatten_list([$value]);
        } elseif ('role' === $key) {
            $base_data['role'] =  join_string($value, $base_data['role']??'');
        } elseif ('roles' === $key) {
            $base_data['role'] = join_string($value);
        } elseif ('radio-name' === $key) {
            $base_data['name'] = $value;
            $base_data['type'] = 'radio';
        } elseif ('menu-path' === $key) {
            $base_data[$key] = $value;
        } elseif ( !is_array($value) ) {
            $base_data[$key] = $value;
        }
    }
    $base_data['classes'] = flatten_list($class_list);
    return $base_data;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
