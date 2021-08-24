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

error_reporting(-1);

// Translate the query string into a page to build.
// For normal links to work and be silently changed into query strings
// the root directory needs to have the following in the .htaccess file
//      RewriteCond "/filesystem.path/to/webroot/%{REQUEST_URI}" !-f
//      RewriteRule "^.*$" "/index.php?%{REQUEST_URI}" [L,QSA]
// with, of course the proper filesystem path to the web root. The same value
// as used in SITEROOT_FS above.
if ( array_key_exists('QUERY_STRING', $_SERVER) && $_SERVER['QUERY_STRING'] ) {
    // Grap the supplied query string
    $query_string = $_SERVER['QUERY_STRING'];
} else {
    // Provide a defalut if the isn't anything given
    $query_string = '/home';
}
$page_path = explode('/', $query_string);

if (!$page_path[0]) {
    array_shift($page_path);
}
$page_name = $page_path[array_key_last($page_path)];

// Development only includes
// Set any info for testing, or simulating things
require_once SCRIPT_PATH_FS . "chindraba.php";

// Load system-wide values
require_once SCRIPT_PATH_FS . "defines.php";

// Load the assorted paths for comment-less file access
require_once SCRIPT_PATH_FS . "define-paths.php";

/* Include files added in the custom functions directory
 * 'extra-functions'. Only includes PHP files and loads them in lexical
 * order. _Do NOT_ use the 'extra-functions' directory to override
 * existing functions, only for addind new functions.
 */
if (file_exists(EXTRA_FUNCTIONS_PATH)) {
    $extraFunctions = dir(EXTRA_FUNCTIONS_PATH);
    while ($extraFile = $extraFunctions->read()) {
        if (preg_match('~^[^\._].*\.php$~i', $extraFile) > 0) {
            require_once EXTRA_FUNCTIONS_PATH . $extraFile;
        }
    }
    $extraFunctions->close();
    unset($extraFunctions);
}

require_once FUNCTIONS_PATH . "functions-general.php";
require_once FUNCTIONS_PATH . "render-page.php";

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
