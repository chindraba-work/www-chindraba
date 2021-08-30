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

/*    UI element metadata data structure: explained
 *
 * The UI elements are built from a collection of metadata, ideally to
 * be retrieved from a database, with each UI group having its own set
 * of metadata. A UI group could be a menu, but not all menus, or some
 * setting available to the user.
 */

/*    UI element metadata data structure: top level
 * The top level of the metadata is partitioned based on the type of
 * HTML element, or HTML element group, to built using subset of data
 * within it.
 * The program also uses the top-level for storing data needed between
 * uses and between elements. Not all top-level elements need to be in
 * use for a given group, as not all UI elements will have need of all
 * the options available.
 * There is also a top-level element dedicated to data which is common,
 * or potentially common, to all elements within the group.
 *
 * The top-level elements available are:
 *  controls: list of UI elements to build for the group. Each ia a
 *      Boolean, or cast to Boolean, with only the 'true' elements in
 *      the final build. The database only need return the ones that
 *      are needed, and the other possibilities will be set to false.
 *  common: the aforementioned data common to all elements (Required)
 *  switch: data for building a "switch", a hidden element on the page
 *      to track, and update, the user's interaction with the group's
 *      controls.
 *  close-switch: the same as a `switch` which is used if the element
 *      has need of a separte control to control closing vs opening.
 *  trigger: the visual element the user interacts with to control the
 *      group. Every trigger is associated with a switch, though the
 *      association need not be exclusive in either direction
 *  close-trigger: the same as a `trigger` except that it is expected
 *      to be associated with a `switch-close`
 */

/*    UI element metadata data structure: 2nd level
 * Each top-level element contains the actual data needed to build the
 * UI element type named. Most of the data can be presumed to pass into
 * the HTML generated using the conversion of 'key' => "value" in code
 * to the HTML of key='value', where the key in the assoc, array is the
 * attribute name in the HTML and the value is copied directly.
 * There are some exceptions:
 *  tag: used to control the HTML <tag> created
 *  classes: either a list of class names, or a single class name.
 *      The values in class-list are collected, rather than overwritten
 *      as the different levels of processing deal with the metadata.
 *      In the building of the node, this value is turned into a string
 *      of space-separated names, with duplicates removed, and that is
 *      the value used for `class='...'`.
 *  class-list: an override of the normal 'classes' processing. If this
 *      key is encountered the list of class names is reset to those
 *      in the value. Further processing of 'classes' keys later
 *      will still operate as before.
 *  roles: processed similarly to 'classes' though duplicates are not
 *      removed. The final string is for the `role='...'` attribute.
 *  role-list: processed the same as 'class-list', with the same
 *      mutability, applied to the `role='...'` attribute.
 *  radio-name: changes the type of an <input> from 'checkbox' to
 *      'radio' and sets the `name='...'` to the value of the key. Will
 *      have no effect on other node types.
 *      NOTE: If the key 'name' also exists the results are undefined.
 *      There is no provision for detecting, and compensating, for the
 *      presence of both in the metadata, and there is no assurance as
 *      to which will be processed first. _Don't do it._
 *  checked: will set `checked='checked'` for any value detected by the
 *      `isset` function. I.e.: `checked => "false"` in the metadata
 *      will still have the HTML as `checked='checked'`. This is to
 *      mimic the behavior of HTML in that the only _false_ value is
 *      the absence of the attribute. See discussion and answers at
 *      <https://stackoverflow.com/q/4228658/7412956>.
 *  title-lead: for <a> nodes, if there is no 'title' attribute given,
 *      one will be built using the 'title-lead' and 'title-tail' as
 *      prefix and postfix, respectively, to the 'name' attribute,
 *      which should exist. If either of the two, or both, is not in
 *      the metadata that position will be ignored.
 *  title-tail: see title-lead.
 */

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
