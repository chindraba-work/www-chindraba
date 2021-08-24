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

function render_page_header($page_name) {
    return <<<EOHTML
        <header id='site-header' class='surface-head'>
            <div id='site-logo' class='ui-control'>
                <label for='widescreen'><img id='logo-img' src='/assets/logo.png' alt=''></label>
            </div>
            <div id='title-bar'>
                <div id='site-header-title'>
                    <div id='page-title'>Rabbit Hole Reports</div>
                    <div id='page-tagline'>Chindraba&apos;s Adventures in Computing</div>
                </div>
                <nav id='site-nav' class='side-menu surface-menu bot-right'>
                    <div id='site-menu-box' class='box-menu'>
                        <div id='site-nav-left' class='nav-item'>
                            <a href='/index.html' title='Return to the home page' class='nav-link block-up pad-3rem soft-corner nowrap'>Home</a>
                            <a href='/pages/about.html' title='Read more about me' class='nav-link block-up pad-3rem soft-corner nowrap'>About</a>
                            <a href='/pages/blog.html' title='Read about what I do, or think' class='nav-link block-up pad-3rem soft-corner nowrap'>Blog</a>
                            <a href='/pages/portfolio.html' title='Look at some of the other projects I have' class='nav-link block-up pad-3rem soft-corner nowrap'>Portfolio</a>
                        </div>
                        <div id='site-nav-right' class='nav-item'>
                            <a href='/pages/references.html' title='A collection of references I find useful' class='nav-link block-up pad-3rem soft-corner nowrap'>References</a>
                            <a href='/pages/reviews.html' title='A collection of reviews I have done' class='nav-link block-up pad-3rem soft-corner nowrap'>Reviews</a>
                            <a href='/pages/legal.html' title='Every site needs legal junk. It&amp;apo;s the law.' class='nav-link block-up pad-3rem soft-corner nowrap'>Legal</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id='site-nav-icon'>
                <label id='site-nav-switch' for='site-nav-control' class='nav-control'>
                    <span id='burger_top'></span>
                    <span id='burger_mid'></span>
                    <span id='burger_base'></span>
                </label>
            </div>
        </header>

EOHTML;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
