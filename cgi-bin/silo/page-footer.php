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

// Create the site-wide page footer
function render_page_footer($pageName) {
    return <<<EOHTML
        <footer id="site-footer" class="surface-foot">
            <div id="copyright">
                Copyright © 2020 - 2021 Chindraba
            </div>
            <aside>
                <div class="box-icon ui-control">
                    <label id="settings-switch" for="settings-control" class="onCtrl">⚙</label>
                </div>
                <section id="view-settings" class="surface-menu box-right">
                    <div class="box box-icon surface-ctrl ui-control">
                        <div>
                            <label id="font-up-2" for="font-size-2" class="font-switch">🗚</label>
                            <label id="font-up-3" for="font-size-3" class="font-switch">🗚</label>
                            <label id="font-up-4" for="font-size-4" class="font-switch">🗚</label>
                            <label id="font-up-5" for="font-size-5" class="font-switch">🗚</label>
                            <label id="font-up-6" for="font-size-6" class="font-switch">🗚</label>
                            <label id="font-up-7" for="font-size-7" class="font-switch">🗚</label>
                        </div>
                    </div>
                    <div class="box box-icon surface-ctrl ui-control">
                        <div>
                            <label id="font-dn-1" for="font-size-1" class="font-switch">🗛</label>
                            <label id="font-dn-2" for="font-size-2" class="font-switch">🗛</label>
                            <label id="font-dn-3" for="font-size-3" class="font-switch">🗛</label>
                            <label id="font-dn-4" for="font-size-4" class="font-switch">🗛</label>
                            <label id="font-dn-5" for="font-size-5" class="font-switch">🗛</label>
                            <label id="font-dn-6" for="font-size-6" class="font-switch">🗛</label>
                        </div>
                    </div>
                    <div>
                        <div class="box box-icon surface-ctrl ui-control">
                            <label id="scheme-switch" for="scheme-control">
                                <span id="scheme-icon">ꙮ</span>
                            </label>
                        </div>
                        <div class="side-menu">
                            <div id="scheme-menu-box" class="box-menu">
                                <div id="scheme-menu" class="box box-full surface-menu ui-menu">
                                    <span id="solarized-scheme-switch" class="scheme-selector">
                                        <label for="solarized-scheme">Solarized</label>
                                    </span>
                                    <span id="freshmint-scheme-switch" class="scheme-selector">
                                        <label for="freshmint-scheme">Fresh Mint</label>
                                    </span>
                                    <span id="default-scheme-switch" class="scheme-selector">
                                        <label for="default-scheme">Vanilla</label>
                                    </span>
                                    <span class="surface-primary">
                                        <label id="scheme-accept" for="scheme-control">Accept</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="box box-icon surface-ctrl ui-control">
                            <label id="main-mode-switch" for="main-mode">
                                <span id="main-is-dark">☾</span>
                                <span id="main-is-lite">☀</span>
                            </label>
                            <label id="alt-mode-switch" for="alt-mode">
                                <span id="alt-is-dark">☽</span>
                                <span id="alt-is-lite">☀</span>
                            </label>
                        </div>
                    </div>
                </section>
            </aside>
        </footer>

EOHTML;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
