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

function render_html_head($page_name) {
    require_override(SOLO_FILES . "render-favicons.php");
    return build_node([
        'tag' => "head",
        'contents' => [
            build_equiv_node('Cache-Control', "no-cache, no-store, must-revalidate"),
            build_equiv_node('Pragma', "no-cache"),
            build_equiv_node('Expires', "0"),
            build_node([
                'tag' => "meta",
                'charset' => "UTF-8",
            ]),
            build_meta_node('language', "English"),
            build_meta_node('viewport', "viewport-fit=contain, width=device-width, height=device-height, initial-scale=1.0"),
            build_meta_node('author', "Chindraba (Ronald Lamoreaux)"),
            build_node([
                'tag' => "title",
                'text' => "[ return || !return ] - Rabbit Hole Reports Blog (FEWDR Final Project: Ronald Lamoreaux)",
            ]),
            render_favicons($page_name) ,
            build_node([
                'tag' => "link",
                'href' => "/css/normalize.css",
                'rel' => "stylesheet",
                'type' => "text/css",
            ]),
            build_node([
                'tag' => "link",
                'href' => "/css/fonts.css",
                'rel' => "stylesheet",
                'type' => "text/css",
            ]),
            build_node([
                'tag' => "link",
                'href' => "/css/ui-settings.css",
                'rel' => "stylesheet",
                'type' => "text/css",
            ]),
            build_node([
                'tag' => "link",
                'href' => "/css/nav-menus.css",
                'rel' => "stylesheet",
                'type' => "text/css",
            ]),
            build_node([
                'tag' => "link",
                'href' => "/css/scheme-default.css",
                'rel' => "stylesheet",
                'type' => "text/css",
            ]),
            build_node([
                'tag' => "link",
                'href' => "/css/scheme-solarized.css",
                'rel' => "stylesheet",
                'type' => "text/css",
            ]),
            build_node([
                'tag' => "link",
                'href' => "/css/scheme-freshmint.css",
                'rel' => "stylesheet",
                'type' => "text/css",
            ]),
            build_node([
                'tag' => "link",
                'href' => "/css/common.css",
                'rel' => "stylesheet",
                'type' => "text/css",
            ]),
        ],
    ]);
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
