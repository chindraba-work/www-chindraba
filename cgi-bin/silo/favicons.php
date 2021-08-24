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

function render_favicons($page_name) {
    return <<<EOHTML
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/assets/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/assets/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/assets/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/assets/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/assets/favicons/favicon-128.png" sizes="128x128" />
    <link rel="shortcut icon" type="image/png" href="/assets/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="shortcut icon" type="image/png" href="/assets/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="shortcut icon" type="image/png" href="/assets/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="shortcut icon" type="image/png" href="/assets/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="shortcut icon" type="image/png" href="/assets/favicons/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="Chindraba"/>
    <meta name="msapplication-TileColor" content="#12313B" />
    <meta name="msapplication-TileImage" content="/assets/favicons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/assets/favicons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/assets/favicons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/assets/favicons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/assets/favicons/mstile-310x310.png" />

EOHTML;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
