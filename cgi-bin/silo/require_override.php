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

/* Function to choose between a distributed version or a custom version
 * of a file. The custom files are used to override the distributed
 * version and _must_ have the same filename as the distributed file,
 * _must_ contain the same function(s) with the same signature, and
 * are in the 'overrides' directory within the directory of the
 * distributed version.
 * Argument: path of the file to include, relative to SCRIPT_PATH_FS
 * Return: path of the choosen file, relative to SCRIPT_PATH_FS
 */
function require_override($check_file) {
    $check_filename = $check_file;
    $path_parts = pathinfo($check_file);
    if (! array_key_exists('extension', $path_parts) || 'php' != $path_parts['extension']) {
        $check_filename .= '.php';
    }
    $path_parts = pathinfo($check_filename);
    $overridePath =  $path_parts['dirname'] . '/overrides/' . $path_parts['basename'];
    if (file_exists($overridePath)) {
        require_once "$overridePath";
    }
    require_once "$check_filename";
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
