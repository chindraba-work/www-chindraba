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

/* Place temporary, development only, code here. The production-level,
 * or live version of the system should have this file completely empty.
 */

define('SOLO_FILES', SCRIPT_PATH_FS . "silo/");

function get_meta($meta_name) {
    $element_meta_data = [
        'widescreen' => [
            'common' => [
                'id' => "widescreen",
            ],
            'switch' => [
                'value' => "isWide",
            ],
        ],
        'menu-site' => [
            'common' => [
                'id' => "menu-site",
            ],
            'switch' => [
                'value' => "menu-site-open",
            ],
        ],
        'menu-jump' => [
            'common' => [
                'id' => 'menu-jump',
            ],
            'switch' => [
                'value' => "menu-jump-open",
            ]
        ],
        'menu-page' => [
            'common' => [
                'id' => "menu-page",
            ],
            'switch' => [
                'value' => "menu-page-open",
            ],
        ],
        'control-settings' => [
            'common' => [
                'id' => "control-settings",
            ],
            'switch' => [
                'value' => "control-settings-open",
            ],
        ],
        'menu-scheme' => [
            'common' => [
                'id' => "menu-scheme",
            ],
            'switch' => [
                'value' => "menu-scheme-open",
            ],
        ],
        'mode-main' => [
            'common' => [
                'id' => "mode-main",
            ],
            'switch' => [
                'radio-name' => "mode-select",
                'value' => "main-mode",
                'checked' => 1,
            ],
        ],
        'mode-alt' => [
            'common' => [
                'id' => "mode-alt",
            ],
            'switch' => [
                'radio-name' => "mode-select",
                'value' => 'alt-mode',
            ],
        ],
        'scheme-solarized' => [
            'common' => [
                'id' => "scheme-solarized",
            ],
            'switch' => [
                'radio-name' => "scheme-select",
                'value' => "solarized",
            ],
        ],
        'scheme-freshmint' => [
            'common' => [
                'id' => "scheme-freshmint",
            ],
            'switch' => [
                'radio-name' => "scheme-select",
                'value' => "freshmint",
            ],
        ],
        'scheme-default' => [
            'common' => [
                'id' => "scheme-default",
            ],
            'switch' => [
                'radio-name' => "scheme-select",
                'value' => "default",
            ],
        ],
        'font-1' => [
            'common' => [
                'id' => "font-size-1",
            ],
            'switch' => [
                'radio-name' => "font-size",
                'value' => 1,
            ],
        ],
        'font-2' => [
            'common' => [
                'id' => "font-size-2",
            ],
            'switch' => [
                'radio-name' => "font-size",
                'value' => 2,
            ],
        ],
        'font-3' => [
            'common' => [
                'id' => "font-size-3",
            ],
            'switch' => [
                'radio-name' => "font-size",
                'value' => 3,
                'checked' => 1,
            ],
        ],
        'font-4' => [
            'common' => [
                'id' => "font-size-4",
            ],
            'switch' => [
                'radio-name' => "font-size",
                'value' => 4,
            ],
        ],
        'font-5' => [
            'common' => [
                'id' => "font-size-5",
            ],
            'switch' => [
                'radio-name' => "font-size",
                'value' => 5,
            ],
        ],
        'font-6' => [
            'common' => [
                'id' => "font-size-6",
            ],
            'switch' => [
                'radio-name' => "font-size",
                'value' => 6,
            ],
        ],
        'font-7' => [
            'common' => [
                'id' => "font-size-7",
            ],
            'switch' => [
                'radio-name' => "font-size",
                'value' => 7,
            ],
        ],
    ];
    if ( array_key_exists($meta_name, $element_meta_data)) {
        return $element_meta_data[$meta_name];
    }
    return NULL;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
