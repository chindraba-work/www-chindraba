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

function render_page_controls($page_name) {
    return render_list([
        make_switch(get_meta('wide_screen')),
        make_switch(get_meta('site_nav')),
        make_switch(get_meta('page_nav')),
        make_switch(get_meta('right_nav')),
        make_switch(get_meta('settings')),
        make_switch(get_meta('scheme')),
        make_switch(get_meta('main-mode')),
        make_switch(get_meta('alt-mode')),
        make_switch(get_meta('solarized-scheme')),
        make_switch(get_meta('freshmint-scheme')),
        make_switch(get_meta('default-scheme')),
        make_switch(get_meta('font-1')),
        make_switch(get_meta('font-2')),
        make_switch(get_meta('font-3')),
        make_switch(get_meta('font-4')),
        make_switch(get_meta('font-5')),
        make_switch(get_meta('font-6')),
        make_switch(get_meta('font-7')),
    ]);
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
