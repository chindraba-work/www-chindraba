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

function render_page_menus($page_name) {
    return <<<EOHTML
        <nav id='nav-container' class='surface-page'>
            <nav id='menu-jumpx-box' class='ui-side-menu-container ui-side-menu-left-container'>
                <div id='menu-jump' class='side-menu surface-menu soft-box soft-box-left nav-item'>
                    <div id='menu-jump-box' class='box-menu'>
                        <div id='menu-jump-menu'>
                            <a title='Jump to Where it all began' href='#section-link-0' class='nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-0'>Where it all began</a>
                            <a title='Jump to Dijkstra and programming without a computer' href='#section-link-1' class='nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-1'>Dijkstra and programming without a computer</a>
                            <a title='Jump to Are GOTO statements harmful?' href='#section-link-2' class='nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-1'>Are <span class='terminal-case surface-code'>GOTO</span> statements harmful?</a>
                            <a title='Jump to Structured Programming begins' href='#section-link-3' class='nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-1'>Structured Programming begins</a>
                            <a title='Jump to Single entry, single exit' href='#section-link-4' class='nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-0'>Single entry, single exit</a>
                            <a title='Jump to Read the source' href='#section-link-5' class='nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-1'>Read the <span class='bold'>source</span></a>
                            <a title='Jump to Why the emphasis on that point?' href='#section-link-6' class='nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-0'>Why the emphasis on that point?</a>
                            <a title='Jump to Sources' href='#section-link-7' class='nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-0'>Sources</a>
                        </div>
                    </div>
                </div>
                <div>
                    <label id='trigger-menu-jumpx' for='switch-menu-jump' class='ui-side-menu-trigger scheme-ctrl soft-box soft-box-left'>
                        <span id='menu-jump-icon' class='ui-trigger-icon'>▶</span>
                    </label>
                </div>
            </nav>
            <nav id='menu-pagex-box' class='ui-side-menu-container ui-side-menu-right-container'>
                <div>
                    <label id='trigger-menu-pagex' for='switch-menu-page' class='ui-side-menu-trigger scheme-ctrl soft-box soft-box-right'>
                        <span id='menu-page-icon' class='ui-trigger-icon'>◀</span>
                    </label>
                </div>
                <div id='menu-page' class='side-menu surface-menu soft-box soft-box-right nav-item'>
                    <div id='menu-page-box' class='box-menu'>
                        <div id='menu-page-menu'>
                            <a href='/pages/projects' title='The projects and homework from the FEWDR course I am taking' class='nav-link block-up pad-3rem soft-corner nowrap'>Projects</a>
                            <a href='/page/so' title='Collection of my Q&amp;A on Stack Overflow' class='nav-link block-up pad-3rem soft-corner nowrap'>Stack Overflow</a>
                            <a href='/pages/ul' title='Collection of my Q&amp;A On Unix &amp; Linux' class='nav-link block-up pad-3rem soft-corner nowrap'>Unix &amp; Linux</a>
                            <a href='/pages/su' title='Collection of my Q&amp;A on Super User' class='nav-link block-up pad-3rem soft-corner nowrap'>Super User</a>
                            <a href='/git' title='My different GitHub and GitLab repository accounts' class='nav-link block-up pad-3rem soft-corner nowrap terminal-case surface-code'>git</a>
                            <a href='/contact' title='Different methods of connecting with me' class='nav-link block-up pad-3rem soft-corner nowrap'>Contact</a>
                        </div>
                    </div>
                </div>
            </nav>
        </nav>

EOHTML;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
