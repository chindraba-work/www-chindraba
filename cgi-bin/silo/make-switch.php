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

/* Create a checkbox or radio button, hidden, which serves as the
 * controller, and/or CSS selector, for some behavior of the site or
 * page.
 * Arg switch_data: the un-collapsed meta data for the group the switch
 *      is in. See cgi-bin/docs/metadata.php for a full description.
 * Arg is_close: set to true to create a close switch for cases where
 *      a separate switch is needed for opening (adding) and closing
 *      (removing) a section of HTML.
 * Return: list of HTML strings to add to the rendered page
 *
 * Conceptually every switch should be tied to a trigger, or triggers,
 * which are displayed to the user. Activating the trigger changes the
 * state of the switch, whose state is used within the CSS to change
 * the presentation of some element, or group of elements.
 */
function make_switch($switch_data, $is_close = false) {
    $switch_defaults = [
        'tag'         => 'input',
        'classes'     => '',
        'type'        => 'checkbox',
        'aira-ignore' => 'true',
        'contents'    => NULL,
    ];
    $switch_overrides = [
        'classes' => ($is_close)? ['ui-close-switch','ui-switch'] : 'ui-switch',
    ];
    if ( isset($switch_data[($is_close)?'close-switch':'switch']['checked']) ) {
        $switch_overrides['checked'] = 'checked';
    }
    return build_ui_node(
        $switch_data,
        ($is_close)? 'close-switch' : 'switch',
        $switch_defaults,
        $switch_overrides,
        ($is_close)? 'close-switch' : 'switch'
    );
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
