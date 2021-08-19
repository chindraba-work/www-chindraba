# Chindraba Website

## Contents

-  [Description](#description)
   -  [The good parts](#the-good-parts)
   -  [The bad parts](#the-bad-parts)
-  [New goals](#new-goals)
-  [Copyright and License](#copyright-and-license)
   -  [The MIT License](#the-mit-license)

---
## Description

This is the basic framework and operational files for the Chindraba website. The data for the pages are stored in a database (MySQL) and the pages are dynamically built. The majority of the page is common, providing a consistent look and feel to the site. The left (jump) menu is unique to the current page, while the right menu can be unique between classes of pages, and common within the class of pages. The footer menu, always visible, is constant between all pages explicitly, with the exception that a link there to the current page becomes non-operational. (There's no reason to _go_ to the _current_ page.)

### The genesis

I developed a web page layout for a course and was pleased with the results. (The [FEWD_README.md](./FEWD_README.md) file is the original README for that project. The `wireframes` directory contains the original proposed project wireframes, which were enhanced as the project developed.) Much of what was built internally was developed to meet course requirements rather than my own. The look and operations, however seem like a good fit for my own business web site.

### The good parts

-  Mobile-first design
-  Responsive
-  Cross-platform compatability
-  Clean, and clear, zones for content
-  Layout can handle multiple forms of content w/o change to the framework
-  Easily modified for color schemes

### The bad parts

-  Heavy dependence upon JavaScript for seemingly dynamic content
-  Use of JavaScript for visual content manipulation which can be done in CSS3
-  Static pages, requiring each new page to built completely
-  Hero image serves no purpose, for now at least, and wastes valuable space
-  A change in the layout, main menus, or theme requires editing _every_ page

[TOP](#contents)

---
## New Goals

-  Redevelop to implement the bulk of the page generation in scripting (PHP or Perl)
-  Common page content built from database-supplied information (header, footer, and menus)
-  Main content (the value of the page) stored in a database, or in flat file
-  Handle the use of Markdown syntax for the main content
-  Convert the bulk of the interactive elements from JavaScript to CSS
-  Develop real content for the site's pages, including the blog
-  Create legitimate pages for the "legal" stuff a live site is expected to have
-  Develop usable color schemes, with functional dark and light modes
-  Implement cookies to carry dark mode, color scheme, and font size preferences between pages
-  Enhance the UX
-  Make the site themeable
-  Look into AJAX for content change rather than full page loads (possible browser history issue)

[TOP](#contents)

---
## Copyright and License

Copyright © 2020-2021  Chindraba (Ronald Lamoreaux)

<[website@chindraba.work](mailto:website@chindraba.work?subject='Website%20git%20repo')>

— All Rights Reserved

### The MIT License

    Permission is hereby granted, free of charge, to any person obtaining a
    copy of this software and associated documentation files (the "Software"),
    to deal in the Software without restriction, including without limitation
    the rights to use, copy, modify, merge, publish, distribute, sublicense,
    and/or sell copies of the Software, and to permit persons to whom the
    Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included
    in all copies or substantial portions of the Software

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGE MENT. IN NO EVENT SHALL
    THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
    FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
    DEALINGS IN THE SOFTWARE.

[TOP](#contents)

<!--- vim: set syntax=markdown ts=4 sw=4 sts=4 et sr: -->
