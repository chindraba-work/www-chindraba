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

print <<<EOHTML
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta charset="UTF-8">
    <meta name="language" content="English">
    <meta name="viewport" content="viewport-fit=contain, width=device-width, height=device-height, initial-scale=1.0">
    <meta name="author" content="Chindraba (Ronald Lamoreaux)">
    <title>[ return || !return ] - Rabbit Hole Reports Blog (FEWDR Final Project: Ronald Lamoreaux)</title>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/favicon-128.png" sizes="128x128" />
    <link rel="shortcut icon" type="image/png" href="/favicon-196x196.png" sizes="196x196" />
    <link rel="shortcut icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="shortcut icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="shortcut icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <link rel="shortcut icon" type="image/png" href="/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="Chindraba"/>
    <meta name="msapplication-TileColor" content="#12313B" />
    <meta name="msapplication-TileImage" content="/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/mstile-310x310.png" />
    <link href="/css/common.css" rel="stylesheet" type="text/css">
</head>
<body>
    <input id="widescreen" type="checkbox" value="isWide" class="hidden-control">
    <input id="site-nav-control" type="checkbox" value="site-nav-open" class="hidden-control">
    <input id="page-nav-control" type="checkbox" value="page-nav-open" class="hidden-control">
    <input id="right-nav-control" type="checkbox" value="right-nav-open" class="hidden-control">
    <input id="settings-control" type="checkbox" value="settings-open" class="hidden-control">
    <input id="scheme-control" type="checkbox" value="scheme-open" class="hidden-control">
    <input id="main-mode" type="radio" value="main" name="dark-mode-selector" class="hidden-control">
    <input id="alt-mode" type="radio" value="alt" name="dark-mode-selector" class="hidden-control">
    <input id="solarized-scheme" type="radio" value="solarized" name="scheme-selector" class="hidden-control">
    <input id="freshmint-scheme" type="radio" value="freshmint" name="scheme-selector" class="hidden-control">
    <input id="default-scheme" type="radio" value="default" name="scheme-selector" class="hidden-control">
    <input id="font-size-1" type="radio" value="1" name="font-size" class="hidden-control">
    <input id="font-size-2" type="radio" value="2" name="font-size" class="hidden-control">
    <input id="font-size-3" type="radio" value="3" name="font-size" class="hidden-control">
    <input id="font-size-4" type="radio" value="4" name="font-size" class="hidden-control">
    <input id="font-size-5" type="radio" value="5" name="font-size" class="hidden-control">
    <input id="font-size-6" type="radio" value="6" name="font-size" class="hidden-control">
    <input id="font-size-7" type="radio" value="7" name="font-size" class="hidden-control">
    <div id="scheme-container" class="surface-page">
        <header id="site-header" class="surface-head">
            <div id="site-logo" class="ui-control">
                <label for="widescreen"><img id="logo-img" src="/assets/logo.png" alt=""></label>
            </div>
            <div id="title-bar">
                <div id="site-header-title">
                    <div id="page-title">Rabbit Hole Reports</div>
                    <div id="page-tagline">Chindraba's Adventures in Computing</div>
                </div>
                <nav id="site-nav" class="side-menu surface-menu bot-right">
                    <div id="site-menu-box" class="box-menu">
                        <div id="site-nav-left" class="nav-item">
                            <a href="/index.html" title="Return to the home page" class="nav-link block-up pad-3rem soft-corner nowrap">Home</a>
                            <a href="/pages/about.html" title="Read more about me" class="nav-link block-up pad-3rem soft-corner nowrap">About</a>
                            <a href="/pages/blog.html" title="Read about what I do, or think" class="nav-link block-up pad-3rem soft-corner nowrap">Blog</a>
                            <a href="/pages/portfolio.html" title="Look at some of the other projects I have" class="nav-link block-up pad-3rem soft-corner nowrap">Portfolio</a>
                        </div>
                        <div id="site-nav-right" class="nav-item">
                            <a href="/pages/references.html" title="A collection of references I find useful" class="nav-link block-up pad-3rem soft-corner nowrap">References</a>
                            <a href="/pages/reviews.html" title="A collection of reviews I have done" class="nav-link block-up pad-3rem soft-corner nowrap">Reviews</a>
                            <a href="/pages/legal.html" title="Every site needs legal junk. It&amp;apo;s the law." class="nav-link block-up pad-3rem soft-corner nowrap">Legal</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="site-nav-icon">
                <label id="site-nav-switch" for="site-nav-control" class="nav-control">
                    <span id="burger_top"></span>
                    <span id="burger_mid"></span>
                    <span id="burger_base"></span>
                </label>
            </div>
        </header>
        <nav id="nav-container" class="surface-page">
            <!-- adding no-show to the class list will hide this menu completely -->
            <nav id="page-nav-box" class="nav-box">
                <div>
                    <label id="page-nav-switch" class="nav-box-switch surface-ctrl box-left nav-control" for="page-nav-control" aria-ignore="true">
                        <span id="page-nav-icon" class="nav-icon">▶</span>
                    </label>
                </div>
                <div id="page-nav" class="side-menu surface-menu box-left nav-item">
                    <div id="page-menu-box" class="box-menu">
                        <div id="page-nav-menu">
                            <a title="Jump to Where it all began" href="#section-link-0" class="nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-0">Where it all began</a>
                            <a title="Jump to Dijkstra and programming without a computer" href="#section-link-1" class="nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-1">Dijkstra and programming without a computer</a>
                            <a title="Jump to Are GOTO statements harmful?" href="#section-link-2" class="nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-1">Are <span class="terminal-case surface-code">GOTO</span> statements harmful?</a>
                            <a title="Jump to Structured Programming begins" href="#section-link-3" class="nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-1">Structured Programming begins</a>
                            <a title="Jump to Single entry, single exit" href="#section-link-4" class="nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-0">Single entry, single exit</a>
                            <a title="Jump to Read the source" href="#section-link-5" class="nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-1">Read the <span class="bold">source</span></a>
                            <a title="Jump to Why the emphasis on that point?" href="#section-link-6" class="nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-0">Why the emphasis on that point?</a>
                            <a title="Jump to Sources" href="#section-link-7" class="nav-link block-up pad-3rem soft-corner nowrap surface-menu shift-in-0">Sources</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- adding no-show to the class list will hide this menu completely -->
            <nav id="right-nav-box" class="nav-box">
                <div>
                    <label id="right-nav-switch" class="nav-box-switch surface-ctrl box-right nav-control" for="right-nav-control">
                        <span id="right-nav-icon" class="nav-icon">◀</span>
                    </label>
                </div>
                <div id="right-nav" class="side-menu surface-menu box-right nav-item">
                    <div id="right-menu-box" class="box-menu">
                        <div id="right-nav-menu">
                            <a href="/pages/projects.html" title="The projects and homework from the FEWDR course I am taking" class="nav-link block-up pad-3rem soft-corner nowrap">Projects</a>
                            <a href="/pages/so.html" title="Collection of my Q&amp;A on Stack Overflow" class="nav-link block-up pad-3rem soft-corner nowrap">Stack Overflow</a>
                            <a href="/pages/ul.html" title="Collection of my Q&amp;A On Unix &amp; Linux" class="nav-link block-up pad-3rem soft-corner nowrap">Unix &amp; Linux</a>
                            <a href="/pages/su.html" title="Collection of my Q&amp;A on Super User" class="nav-link block-up pad-3rem soft-corner nowrap">Super User</a>
                            <a href="/pages/git.html" title="My different GitHub and GitLab repository accounts" class="nav-link block-up pad-3rem soft-corner nowrap terminal-case surface-code">git</a>
                            <a href="/pages/contact.html" title="Different methods of connecting with me" class="nav-link block-up pad-3rem soft-corner nowrap">Contact</a>
                        </div>
                    </div>
                </div>
            </nav>
        </nav>
        <nav id="nav-container" class="surface-page">
            <nav id="page-nav-box" class="nav-box">
                <div>
                    <label id="page-nav-switch" for="page-nav-control" class="nav-box-switch surface-ctrl box-left nav-control">
                        <span id="page-nav-icon" class="nav-icon">▶</span>
                    </label>
                </div>
                <div id="page-nav" class="side-menu surface-menu box-left nav-item">
                    <div id="page-menu-box" class="box-menu">
                        <div id="page-nav-menu">
                        </div>
                    </div>
                </div>
            </nav>
            <nav id="right-nav-box" class="nav-box">
                <div>
                    <label id="right-nav-switch" for="right-nav-control" class="nav-box-switch surface-ctrl box-right nav-control">
                        <span id="right-nav-icon" class="nav-icon">◀</span>
                    </label>
                </div>
                <div id="right-nav" class="side-menu surface-menu box-right nav-item">
                    <div id="right-menu-box" class="box-menu">
                        <div id="right-nav-menu">
                        </div>
                    </div>
                </div>
            </nav>
        </nav>
        <main id="page-container">
            <header>
                <h1>
                    <span class="terminal-case surface-code">[ return || ! return ]</span>
                    <span class="italic">That</span>
                    is the question.
                </h1>
            </header>
            <section id="where-it-all-began" aria-title="Where it all began">
                <a href="#" id="section-link-0" name="section-link-0"></a>
                <h2>Where it all began</h2>
                <a href="#" id="section-link-1" name="section-link-1"></a>
                <h3>Dijkstra and programming without a computer</h3>
                <p>There was an interesting fellow by the name of <a href="https://en.wikipedia.org/wiki/Edsger_W._Dijkstra" target="_BLANK">Edsger Wybe Dijkstra</a><sup>[1]</sup> who was involved in programming computers before they were built, litterally. By that I mean that a computer was designed to be built, and while the builder was making the computer Dijkstra was creating the software. The idea was that once the computer was built, and operational, the software to make it work would be available. That means that the code was written on some media, usually paper, other than the machine it was to run on. Imagine trying to write a program in a spiral notebook that you cannot test, or even compile, until sometime several months in the future, when someone finally builds the computer, and expecting it to <span class="italic">just work</span>! Not much for the <a href="https://en.wikipedia.org/wiki/Test-driven_development" target="_BLANK">Test-driven development</a><sup>[2]</sup> or <a href="https://en.wikipedia.org/wiki/Agile_software_development" target="_BLANK">Agile software development</a><sup>[3]</sup> movements to work with there.</p>
                <a href="#" id="section-link-2" name="section-link-2"></a><h3>Are <span class="terminal-case surface-code">GOTO</span> statements harmful?</h3>
                <p><span><a href="https://i.stack.imgur.com/KP9cE.png" target="_BLANK"><img class="image-float" src="https://i.stack.imgur.com/KP9cE.png" alt="Modern-day programmer at the Inquisition in the year 500 for typing GOTO 500"></a><sup>[4]</sup></span> After doing his work for a while, and seeing the practice of many of his colleagues in programming, he realised that the <span class="terminal-case surface-code">GOTO</span> statement was making programs hard to read, and that there needed to be a better method of controlling program flow. He wrote a letter <a href="https://drive.google.com/open?id=1w9BrWLUqnrrZNCQMVWPEXOKDVwbX4nmr" target="_BLANK">"A Case against the GO TO Statement"</a><sup>[5]</sup>. The <a href="https://www.acm.org" target="_BLANK">Association for Computing Machinery</a> published that letter in their journal <a href="https://cacm.acm.org/" target="_BLANK">Communications of the ACM (CACM)</a> in the March 1968 Letters to the editor section as "Go To Statement Considered Harmful". Apparently that set off a fire storm of debate within the community at the time. Much later, 1987, Frank Rubin wrote a letter, published in the CACM in March titled '"GOTO Considered Harmful" Considered Harmful'. In reply the CACM received more letters, and the debate was renewed. Most, if not all, those letters can be read in a <a href="https://drive.google.com/open?id=1MBQfVKcewOZ310WRqci89EndKyQFW9J1" target="_BLANK">compilation</a><sup>[6]</sup> from Lester I. McCann, Senior Lecturer at The University of Arizona. Dijkstra seems to have had the final word with his <a href="https://drive.google.com/file/d/1MxPEIYiUJqddKzjTe8jyKW6rhgCsmPQh/view?usp=sharing" target="_BLANK">On a Somewhat Disappointing Correspondence</a><sup>[7]</sup>.</p>
                <a href="#" id="section-link-3" name="section-link-3"></a><h3>Structured Programming begins</h3>
                <p>In 1969, during the years between the initial letter and the sudden rebirth of interest in it, Dijkstra wrote an article <a href="https://drive.google.com/open?id=13FCHQrHO8teoqIf7--xSsVV5x0pF8oJe" target="_BLANK">Notes on Structured Programming</a><sup>[8]</sup>, published in 1972 by the ACM as Chapter I of the book <span class="italic">Structured Programming</span>. The significance of this paper, and that book, is that they helped make structured programming a reality. Few people now programming can envision doing so in an <span class="italic">unstructured</span> manner. Yet, that <span class="italic">unstructured programming</span> is exactly what exited at the time of "The Great CACM GOTO Argument," as McCann termed it.</p>
                <p>In his initial letter, Dijkstra advocated for some kind of structured programming environment. He even set a standard, of sorts, for structured programming clauses to meet: "I do not claim that the clauses mentioned are exhaustive in the sense that they will satisfy all needs, but whatever clauses are suggested (e.g. abortion clauses) they should satisfy the requirement that a programmer independent coordinate system can be maintained to describe the process in a helpful and manageable way."</p>
            </section>
            <section id="single-entry-single-exit" aria-title="Single entry, single exit">
                <a href="#" id="section-link-4" name="section-link-4"></a>
                <h2>Single entry, single exit</h2>
                <a href="#" id="section-link-5" name="section-link-5"></a>
                <h3>Read the <span class="bold">source</span></h3>
                <p>The concept of a single entry and a single exit is presented in section 7 <span class="bold">ON UNDERSTANDING PROGRAMS</span> with the observation that,</p>
                <blockquote>“These flowcharts share the property that they have a single entry at the top and a single exit at the bottom: as indicated by the dotted block they can again be interpreted (by disregarding what is inside the dotted lines) as a single action in a sequential computation.”"</blockquote>
                <p>In the examples he creates for his flowcharts, he draws the "dotted block" such that leaving the block only goes to one place, the next action in a time-succession, probably also a delineated block.</p>
                <p><span><sup>[9]</sup><a href="https://i.stack.imgur.com/5pkdH.png" target="_BLANK"><img class="image-float-right" src="https://i.stack.imgur.com/5pkdH.png" alt="Diagram of a program block for an if-then-else construct"></a></span>
                The third example given is for the conditional <span class="terminal-case surface-code">if ? then S1 else S2</span>. The block drawn does not represent the "flow" through and past <span class="terminal-case surface-code">S1</span> somehow interacting with the "flow" through and past <span class="terminal-case surface-code">S2</span>. Both lead to the exit, and how they got there is not important to anything outside of the dotted box. Likewise, in his diagram for the <span class="terminal-case surface-code">case</span> statement, there is no interaction indicated between the various branches. The removal, or addition, of any branch to the <span class="terminal-case surface-code">case</span> <span class="italic">should</span> not change the operation of any other branch of the <span class="terminal-case surface-code">case</span>. Interestingly enough, there are some languages where multiple branches of a <span class="terminal-case surface-code">case</span> might be executed, depending of the order they are defined, and the possible values of the selectors in the switch. Most such languages do provide a mechanism to prevent that, but not all.</p>
            </section>
            <section id="why-the-emphasis-on-that-point" aria-title="Why the emphasis on that point?">
                <a href="#" id="section-link-6" name="section-link-6"></a>
                <h2>Why the emphasis on that point?</h2>
                <p>At the time Dijkstra wrote his <a href="https://drive.google.com/open?id=13FCHQrHO8teoqIf7--xSsVV5x0pF8oJe" target="_BLANK">EWD249 monograph</a><sup>[10]</sup>, as well as his <a href="https://drive.google.com/open?id=1w9BrWLUqnrrZNCQMVWPEXOKDVwbX4nmr" target="_BLANK">EWD215 letter</a><sup>[11]</sup>, the bulk of programming was done in either <a href="https://en.wikipedia.org/wiki/Assembly_language" target="_BLANK">Assembly Language</a><sup>[12]</sup> at least partially unique to each computer model or <a href="https://en.wikipedia.org/wiki/Fortran" target="_BLANK">FORTRAN</a><sup>[13]</sup>. Assembly language provides no programming structure at all, so it cannot enforce any. Fortran had some, now considered primitive, structural programming components. Fortran provided in-built abilities for entering a subroutine at more than one location, and allowed the caller to predetermine an alternative address to return to. That the subroutine could also have more than one <span class="terminal-case surface-code">return</span> statement made no difference, either to the model of structured programming Dijkstra was developing, or to the ability to exit from a routine to any arbitrary location (determined at coding time) however the routine actually was exited. Someone else, on the Software Engineering site of Stack Exchange wrote an <a href="https://softwareengineering.stackexchange.com/a/118793/275869" target="_BLANK">excellent answer</a><sup>[14]</sup> to the question <a href="https://softwareengineering.stackexchange.com/q/118703/275869" target="_BLANK">Where did the notion of “one return only” come from?</a>, with example code, that deals with that aspect of "only one retrun" in modern myths.</p>
            </section>
            <section id="sources" class="biblio">
                <a href="#" id="section-link-7" name="section-link-7"></a>
                <h2>Sources</h2>
                <ul>
                    <li>[1]: <a href="https://en.wikipedia.org/wiki/Edsger_W._Dijkstra" target="_BLANK">[Wikidedia - Edsger W. Dijkstra]</a></li>
                    <li>[2]: <a href="https://en.wikipedia.org/wiki/Test-driven_development" target="_BLANK">[Wikidedia - Test-driven development]</a></li>
                    <li>[3]: <a href="https://en.wikipedia.org/wiki/Agile_software_development" target="_BLANK">[Wikidedia - Agile software development]</a></li>
                    <li>[4]: <a href="https://blog.codinghorror.com/id-consider-that-harmful-too/" target="_BLANK">[Jeff Atwood, Coding Horror]</a></li>
                    <li>[5]: <a href="https://drive.google.com/open?id=1w9BrWLUqnrrZNCQMVWPEXOKDVwbX4nmr" target="_BLANK">[Commun. ACM 11 1968, 3: 147–148]</a></li>
                    <li>[6]: <a href="https://drive.google.com/open?id=1MBQfVKcewOZ310WRqci89EndKyQFW9J1" target="_BLANK">[Lester I. McCann, Univ. of Ariz.]</a></li>
                    <li>[7]: <a href="https://drive.google.com/file/d/1MxPEIYiUJqddKzjTe8jyKW6rhgCsmPQh/view?usp=sharing" target="_BLANK">[Dijkstra, E.W., EWD1009]</a></li>
                    <li>[8]: <a href="https://drive.google.com/open?id=13FCHQrHO8teoqIf7--xSsVV5x0pF8oJe" target="_BLANK">[Dijkstra, E. W., EWD249]</a></li>
                    <li>[9]: <a href="https://i.stack.imgur.com/5pkdH.png" target="_BLANK">[Dijkstra, E. W., EWD249 pg. 23]</a></li>
                    <li>[10]: <a href="https://drive.google.com/open?id=13FCHQrHO8teoqIf7--xSsVV5x0pF8oJe" target="_BLANK">[Dijkstra, E. W., EWD249]</a></li>
                    <li>[11]: <a href="https://drive.google.com/open?id=1w9BrWLUqnrrZNCQMVWPEXOKDVwbX4nmr" target="_BLANK">[Dijkstra, E. W., EWD215]</a></li>
                    <li>[12]: <a href="https://en.wikipedia.org/wiki/Assembly_language" target="_BLANK">[Wikidedia - Assembly Language]</a></li>
                    <li>[13]: <a href="" target="_BLANK">[Wikidedia - Fortran]</a></li>
                    <li>[14]: User <a href="https://softwareengineering.stackexchange.com/users/16929/kevin-cline" target="_BLANK">kevin cline</a> of <a href="https://softwareengineering.stackexchange.com/" target="_BLANK">Software Engineering</a>, a site in the <a href="https://stackexchange.com/sites?view=grid#" target="_BLANK">Stack Exchange Network</a></li>
                </ul>
            </section>
        </main>
        <footer id="site-footer" class="surface-foot">
            <div id="copyright">
                Copyright © 2020 Chindraba
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
    </div>
</body>
</html>
EOHTML;

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
