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
    return <<<EOHTML
    <input id="widescreen" type="checkbox" value="isWide" class="hidden-control">
    <input id="site-nav-control" type="checkbox" value="site-nav-open" class="hidden-control">
    <input id="page-nav-control" type="checkbox" value="page-nav-open" class="hidden-control">
    <input id="right-nav-control" type="checkbox" value="right-nav-open" class="hidden-control">
    <input id="settings-control" type="checkbox" value="settings-open" class="hidden-control">
    <input id="scheme-control" type="checkbox" value="scheme-open" class="hidden-control">
    <input id="main-mode" type="radio" value="main" name="dark-mode-selector" class="hidden-control" checked="true">
    <input id="alt-mode" type="radio" value="alt" name="dark-mode-selector" class="hidden-control">
    <input id="solarized-scheme" type="radio" value="solarized" name="scheme-selector" class="hidden-control">
    <input id="freshmint-scheme" type="radio" value="freshmint" name="scheme-selector" class="hidden-control">
    <input id="default-scheme" type="radio" value="default" name="scheme-selector" class="hidden-control" checked="true">
    <input id="font-size-1" type="radio" value="1" name="font-size" class="hidden-control">
    <input id="font-size-2" type="radio" value="2" name="font-size" class="hidden-control">
    <input id="font-size-3" type="radio" value="3" name="font-size" class="hidden-control" checked="true">
    <input id="font-size-4" type="radio" value="4" name="font-size" class="hidden-control">
    <input id="font-size-5" type="radio" value="5" name="font-size" class="hidden-control">
    <input id="font-size-6" type="radio" value="6" name="font-size" class="hidden-control">
    <input id="font-size-7" type="radio" value="7" name="font-size" class="hidden-control">

EOHTML;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
