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

// Create the 'content' for the page
function render_value_content($page_name) {
    return <<<EOHTML
        <main id='page-container'>
            <header>
                <h1>
                    <span class='terminal-case surface-code'>[ return || ! return ]</span>
                    <span class='italic'>That</span>
                    is the question.
                </h1>
            </header>
            <section id='where-it-all-began' aria-title='Where it all began'>
                <a href='#' id='section-link-0' name='section-link-0'></a>
                <h2>Where it all began</h2>
                <a href='#' id='section-link-1' name='section-link-1'></a>
                <h3>Dijkstra and programming without a computer</h3>
                <p>There was an interesting fellow by the name of <a href='https://en.wikipedia.org/wiki/Edsger_W._Dijkstra' target='_BLANK'>Edsger Wybe Dijkstra</a><sup>[1]</sup> who was involved in programming computers before they were built, litterally. By that I mean that a computer was designed to be built, and while the builder was making the computer Dijkstra was creating the software. The idea was that once the computer was built, and operational, the software to make it work would be available. That means that the code was written on some media, usually paper, other than the machine it was to run on. Imagine trying to write a program in a spiral notebook that you cannot test, or even compile, until sometime several months in the future, when someone finally builds the computer, and expecting it to <span class='italic'>just work</span>! Not much for the <a href='https://en.wikipedia.org/wiki/Test-driven_development' target='_BLANK'>Test-driven development</a><sup>[2]</sup> or <a href='https://en.wikipedia.org/wiki/Agile_software_development' target='_BLANK'>Agile software development</a><sup>[3]</sup> movements to work with there.</p>
                <a href='#' id='section-link-2' name='section-link-2'></a><h3>Are <span class='terminal-case surface-code'>GOTO</span> statements harmful?</h3>
                <p><span><a href='https://i.stack.imgur.com/KP9cE.png' target='_BLANK'><img class='image-float' src='https://i.stack.imgur.com/KP9cE.png' alt='Modern-day programmer at the Inquisition in the year 500 for typing GOTO 500'></a><sup>[4]</sup></span> After doing his work for a while, and seeing the practice of many of his colleagues in programming, he realised that the <span class='terminal-case surface-code'>GOTO</span> statement was making programs hard to read, and that there needed to be a better method of controlling program flow. He wrote a letter <a href='https://drive.google.com/open?id=1w9BrWLUqnrrZNCQMVWPEXOKDVwbX4nmr' target='_BLANK'>&ldquo;A Case against the GO TO Statement&rdquo;</a><sup>[5]</sup>. The <a href='https://www.acm.org' target='_BLANK'>Association for Computing Machinery</a> published that letter in their journal <a href='https://cacm.acm.org/' target='_BLANK'>Communications of the ACM (CACM)</a> in the March 1968 Letters to the editor section as &ldquo;Go To Statement Considered Harmful&rdquo;. Apparently that set off a fire storm of debate within the community at the time. Much later, 1987, Frank Rubin wrote a letter, published in the CACM in March titled &lsquo;&ldquo;GOTO Considered Harmful&rdquo; Considered Harmful&rsquo;. In reply the CACM received more letters, and the debate was renewed. Most, if not all, those letters can be read in a <a href='https://drive.google.com/open?id=1MBQfVKcewOZ310WRqci89EndKyQFW9J1' target='_BLANK'>compilation</a><sup>[6]</sup> from Lester I. McCann, Senior Lecturer at The University of Arizona. Dijkstra seems to have had the final word with his <a href='https://drive.google.com/file/d/1MxPEIYiUJqddKzjTe8jyKW6rhgCsmPQh/view?usp=sharing' target='_BLANK'>On a Somewhat Disappointing Correspondence</a><sup>[7]</sup>.</p>
                <a href='#' id='section-link-3' name='section-link-3'></a><h3>Structured Programming begins</h3>
                <p>In 1969, during the years between the initial letter and the sudden rebirth of interest in it, Dijkstra wrote an article <a href='https://drive.google.com/open?id=13FCHQrHO8teoqIf7--xSsVV5x0pF8oJe' target='_BLANK'>Notes on Structured Programming</a><sup>[8]</sup>, published in 1972 by the ACM as Chapter I of the book <span class='italic'>Structured Programming</span>. The significance of this paper, and that book, is that they helped make structured programming a reality. Few people now programming can envision doing so in an <span class='italic'>unstructured</span> manner. Yet, that <span class='italic'>unstructured programming</span> is exactly what exited at the time of &ldquo;The Great CACM GOTO Argument,&rdquo; as McCann termed it.</p>
                <p>In his initial letter, Dijkstra advocated for some kind of structured programming environment. He even set a standard, of sorts, for structured programming clauses to meet: &ldquo;I do not claim that the clauses mentioned are exhaustive in the sense that they will satisfy all needs, but whatever clauses are suggested (e.g. abortion clauses) they should satisfy the requirement that a programmer independent coordinate system can be maintained to describe the process in a helpful and manageable way.&rdquo;</p>
            </section>
            <section id='single-entry-single-exit' aria-title='Single entry, single exit'>
                <a href='#' id='section-link-4' name='section-link-4'></a>
                <h2>Single entry, single exit</h2>
                <a href='#' id='section-link-5' name='section-link-5'></a>
                <h3>Read the <span class='bold'>source</span></h3>
                <p>The concept of a single entry and a single exit is presented in section 7 <span class='bold'>ON UNDERSTANDING PROGRAMS</span> with the observation that,</p>
                <blockquote>&ldquo;These flowcharts share the property that they have a single entry at the top and a single exit at the bottom: as indicated by the dotted block they can again be interpreted (by disregarding what is inside the dotted lines) as a single action in a sequential computation.&rdquo;</blockquote>
                <p>In the examples he creates for his flowcharts, he draws the &ldquo;dotted block&rdquo; such that leaving the block only goes to one place, the next action in a time-succession, probably also a delineated block.</p>
                <p><span><sup>[9]</sup><a href='https://i.stack.imgur.com/5pkdH.png' target='_BLANK'><img class='image-float-right' src='https://i.stack.imgur.com/5pkdH.png' alt='Diagram of a program block for an if-then-else construct'></a></span>
                The third example given is for the conditional <span class='terminal-case surface-code'>if ? then S1 else S2</span>. The block drawn does not represent the &ldquo;flow&rdquo; through and past <span class='terminal-case surface-code'>S1</span> somehow interacting with the &ldquo;flow&rdquo; through and past <span class='terminal-case surface-code'>S2</span>. Both lead to the exit, and how they got there is not important to anything outside of the dotted box. Likewise, in his diagram for the <span class='terminal-case surface-code'>case</span> statement, there is no interaction indicated between the various branches. The removal, or addition, of any branch to the <span class='terminal-case surface-code'>case</span> <span class='italic'>should</span> not change the operation of any other branch of the <span class='terminal-case surface-code'>case</span>. Interestingly enough, there are some languages where multiple branches of a <span class='terminal-case surface-code'>case</span> might be executed, depending of the order they are defined, and the possible values of the selectors in the switch. Most such languages do provide a mechanism to prevent that, but not all.</p>
            </section>
            <section id='why-the-emphasis-on-that-point' aria-title='Why the emphasis on that point?'>
                <a href='#' id='section-link-6' name='section-link-6'></a>
                <h2>Why the emphasis on that point?</h2>
                <p>At the time Dijkstra wrote his <a href='https://drive.google.com/open?id=13FCHQrHO8teoqIf7--xSsVV5x0pF8oJe' target='_BLANK'>EWD249 monograph</a><sup>[10]</sup>, as well as his <a href='https://drive.google.com/open?id=1w9BrWLUqnrrZNCQMVWPEXOKDVwbX4nmr' target='_BLANK'>EWD215 letter</a><sup>[11]</sup>, the bulk of programming was done in either <a href='https://en.wikipedia.org/wiki/Assembly_language' target='_BLANK'>Assembly Language</a><sup>[12]</sup> at least partially unique to each computer model or <a href='https://en.wikipedia.org/wiki/Fortran' target='_BLANK'>FORTRAN</a><sup>[13]</sup>. Assembly language provides no programming structure at all, so it cannot enforce any. Fortran had some, now considered primitive, structural programming components. Fortran provided in-built abilities for entering a subroutine at more than one location, and allowed the caller to predetermine an alternative address to return to. That the subroutine could also have more than one <span class='terminal-case surface-code'>return</span> statement made no difference, either to the model of structured programming Dijkstra was developing, or to the ability to exit from a routine to any arbitrary location (determined at coding time) however the routine actually was exited. Someone else, on the Software Engineering site of Stack Exchange wrote an <a href='https://softwareengineering.stackexchange.com/a/118793/275869' target='_BLANK'>excellent answer</a><sup>[14]</sup> to the question <a href='https://softwareengineering.stackexchange.com/q/118703/275869' target='_BLANK'>Where did the notion of “one return only” come from?</a>, with example code, that deals with that aspect of &ldquo;only one retrun&rdquo; in modern myths.</p>
            </section>
            <section id='sources' class='biblio'>
                <a href='#' id='section-link-7' name='section-link-7'></a>
                <h2>Sources</h2>
                <ul>
                    <li>[1]: <a href='https://en.wikipedia.org/wiki/Edsger_W._Dijkstra' target='_BLANK'>[Wikidedia - Edsger W. Dijkstra]</a></li>
                    <li>[2]: <a href='https://en.wikipedia.org/wiki/Test-driven_development' target='_BLANK'>[Wikidedia - Test-driven development]</a></li>
                    <li>[3]: <a href='https://en.wikipedia.org/wiki/Agile_software_development' target='_BLANK'>[Wikidedia - Agile software development]</a></li>
                    <li>[4]: <a href='https://blog.codinghorror.com/id-consider-that-harmful-too/' target='_BLANK'>[Jeff Atwood, Coding Horror]</a></li>
                    <li>[5]: <a href='https://drive.google.com/open?id=1w9BrWLUqnrrZNCQMVWPEXOKDVwbX4nmr' target='_BLANK'>[Commun. ACM 11 1968, 3: 147–148]</a></li>
                    <li>[6]: <a href='https://drive.google.com/open?id=1MBQfVKcewOZ310WRqci89EndKyQFW9J1' target='_BLANK'>[Lester I. McCann, Univ. of Ariz.]</a></li>
                    <li>[7]: <a href='https://drive.google.com/file/d/1MxPEIYiUJqddKzjTe8jyKW6rhgCsmPQh/view?usp=sharing' target='_BLANK'>[Dijkstra, E.W., EWD1009]</a></li>
                    <li>[8]: <a href='https://drive.google.com/open?id=13FCHQrHO8teoqIf7--xSsVV5x0pF8oJe' target='_BLANK'>[Dijkstra, E. W., EWD249]</a></li>
                    <li>[9]: <a href='https://i.stack.imgur.com/5pkdH.png' target='_BLANK'>[Dijkstra, E. W., EWD249 pg. 23]</a></li>
                    <li>[10]: <a href='https://drive.google.com/open?id=13FCHQrHO8teoqIf7--xSsVV5x0pF8oJe' target='_BLANK'>[Dijkstra, E. W., EWD249]</a></li>
                    <li>[11]: <a href='https://drive.google.com/open?id=1w9BrWLUqnrrZNCQMVWPEXOKDVwbX4nmr' target='_BLANK'>[Dijkstra, E. W., EWD215]</a></li>
                    <li>[12]: <a href='https://en.wikipedia.org/wiki/Assembly_language' target='_BLANK'>[Wikidedia - Assembly Language]</a></li>
                    <li>[13]: <a href='' target='_BLANK'>[Wikidedia - Fortran]</a></li>
                    <li>[14]: User <a href='https://softwareengineering.stackexchange.com/users/16929/kevin-cline' target='_BLANK'>kevin cline</a> of <a href='https://softwareengineering.stackexchange.com/' target='_BLANK'>Software Engineering</a>, a site in the <a href='https://stackexchange.com/sites?view=grid#' target='_BLANK'>Stack Exchange Network</a></li>
                </ul>
            </section>
        </main>

EOHTML;
}

// vim: set syntax=php ts=4 sw=4 sts=4 et sr:
