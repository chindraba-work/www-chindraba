# Documentation for metadata

## Nomenclature

Within the documentation, and mostly within the code, the following terms are
used to mean certain levels or portions of what is being described or built:

-  Group or UI Group: a collection of UI items, large or small, to achieve a
common purpose. A frequent group could be a collapsable menu, with a 'switch'
to track that status of the menu, a 'trigger' to open and close it, and a
'menu' for holding the visual part of the menu. The menu may be in a visual
box, which may be in a container node and the trigger could be included in the
menu box, or have its own box. Each facet of the set is covered by a UI item in
the metadata. In addition, as a general rule the data for the entire group is
passed to, and from, the functions to deal with any portion of it.
-  Item or UI Item: something which may be a single node. The UI item 'switch'
is rendered as a single <input> in HTML. May also me a complex section of the
DOM tree. A 'menu' is rendered as a collection of links in a list, which may be
a section of another menu.
-  Element: one string-indexed element in an assoc array in the code.  This may
also sometimes be used in reference to an HTML element (a node), or some _visual_
element on the rendered page, such as a menu, footer, or other group of _visual_
elements, which is probably best refered to as an UI item. Hopefully both cases
will be minimal.
-  Node: an HTML tag, such as <div> which may, or may not, contain more nodes.
-  Attribute: Commonly an HTML attribute, often as a pair with the value of
same: such as `class="class-one other-class"` or `type="checkbox"`. Sometimes
refers to an element of the lowest level data in an assoc array, such as the
checked attribute of a switch item.

## UI metadata data structure: explained

The UI elements are built from a collection of metadata, ideally to be pulled
from a database, with each UI group having its own set of metadata. A UI group
could be a menu, but not all menus, or some setting available to the user.

### UI metadata data structure: top level

The top level of the metadata is partitioned based on the type of UI item, or UI
item group, to built using subset of data within it.  The program also uses the
top-level for storing data needed between uses and between items. Not all
top-level items need to be in use for a given group, as not all UI items will
have need of all the options available.

There is also a top-level element dedicated to data which is common, or
potentially common, to all items within the group.

#### The top-level elements available are:

-  controls: (required) list of UI items to build for the group. Each is a
Boolean, or cast to Boolean, with only the 'true' items in the final build. The
database only need return the ones that are needed, and the other possibilities
will be set to false.
-  common: (required) the aforementioned data common to all items
-  switch: data for building a "switch", a hidden item on the page to track,
and update, the user's interaction with the group's controls.
-  close-switch: the same as a `switch` which is used if the group has need of
a separate control to control closing vs opening.
-  trigger: the visual elements the user interacts with to control the group.
Every trigger is associated with a switch, though the association need not be
exclusive in either direction.
-  close-trigger: the same as a `trigger` except that it is expected to be
associated with a `switch-close`

### UI element metadata data structure: 2nd level

Each top-level element contains the actual data needed to build the UI item
named. Most of the data can be presumed to pass into the HTML generated using
the conversion of 'key' => "value" in code to the HTML of key='value', where
the key in the assoc, array is the attribute name in the HTML and the value is
copied directly.

#### There are some exceptions:
-  tag: used to control the HTML <tag> created
-  classes: either a list of class names, or a single class name. The values in
class-list are collected, rather than overwritten as the different levels of
processing deal with the metadata. In the building of the node, this value is
turned into a string of space-separated names, with duplicates removed, and
that is the value used for `class='...'`.
-  class-list: an override of the normal 'classes' processing. If this key is
encountered the list of class names is reset to those in the value. Further
processing of 'classes' keys later will still operate as before.
-  roles: processed similarly to 'classes' though duplicates are not removed.
The final string is for the `role='...'` attribute.
-  role-list: processed the same as 'class-list', with the same mutability,
applied to the `role='...'` attribute.
-  radio-name: changes the type of an <input> from 'checkbox' to 'radio' and
sets the `name='...'` to the value of the key. Will have no effect on other
node types.
**NOTE**: If the key 'name' also exists the results are undefined.  There is no
provision for detecting, and compensating, for the presence of both in the
metadata, and there is no assurance as to which will be processed first.
_Don't do it._
-  checked: will set `checked='checked'` for any value detected by the `isset`
function. I.e.: `checked => "false"` in the metadata will still have the HTML
as `checked='checked'`. This is to mimic the behavior of HTML in that the only
_false_ value is the absence of the attribute. See discussion and answers at
<https://stackoverflow.com/q/4228658/7412956>. For other types of items, or
nodes, if present the value is copied directly into the HTML as any other
attribute would be. This will, of course result in invalid HTML, though the
browsers will likely ignore the error.
-  title-lead: for <a> nodes, if there is no 'title' attribute given, one will
be built using the 'title-lead' and 'title-tail' as prefix and postfix,
respectively, to the 'name' attribute, which should exist. If either of the
two, or both, is not in the metadata that position will be ignored.
-  title-tail: see title-lead.

