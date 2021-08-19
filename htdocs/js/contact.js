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


function checkContactInfo(e) {
  e.preventDefault();
  let errorStack = [];
  console.log("Submit");
}

function countryChange() {
  const countryShortCode = contactFields.country.value;
  setRegionOptions();
}

function newErrMsg(msg) {
  return newElement({
    'tag': 'div',
    'content': msg,
  });
}

function resetContactInfo(e) {
  e.preventDefault();
  const textFields = [
    'bugPage',
    'shoutName',
    'otherReason',
    'name',
    'email',
    'feedbackPro',
    'feedbackCon',
    'bugData',
    'general',
    'shoutText',
    'otherText',
  ];
  textFields.forEach((f) => contactFields[f].value = '');
  contactFields.country.value = "00";
  document.querySelector('[name="contact-control"]:checked').checked = false;
  countryChange();
}

const contactForm = document.getElementById('contact-form');
const errorMessages = {
  'bugPageMissing': newErrMsg([
    newElement({'tag':'span', 'content': "To help me find the bug, you've got to tell me where it is."}),
    newElement({'tag':'span', 'content': "'Everywhere' or 'All pages' will work as well."}),
  ]),
  'bugDescMissing': newErrMsg("Please tell me more about the bug."),
  'countryBlank'  : newErrMsg('Please select a country so this can be sent.'),
  'emailBlank'    : newErrMsg('Your email is needed before this can be sent. Please enter one.'),
  'emailFormat'   : newErrMsg("The email address doesn't look right. Please check it."),
  'emaildomain'   : newErrMsg('The email address has an invalid domain name. Please Check it.'),
  'feedbackEmpty' : newErrMsg("Please say something good or something bad. Both aren't needed, but at least one is."),
  'generalEmpty'  : newErrMsg(`You can't be "Just sayin'" if you ain't sayin'. Say something.`),
  'nameBlank'     : newErrMsg('Your name is needed before this can be sent. Please enter one.'),
  'nameShort'     : newErrMsg([
    newErrMsg('Your name is too short. Please make it longer.'),
    newErrMsg('If your name realy is this short, just re-submit.'),
  ]),
  'reasonBlank'   : newErrMsg([
    newElement({'tag':'span', 'content': "You can have you own reason for filling out the contact form."}),
    newElement({'tag':'span', 'content': "But, I ain't gonna send it unless you tell me what that reason is."}),
  ]),
  'regionMissing' : newErrMsg([
    "The country you've selected needs a ",
    newElement({'tag':'span','attribs':{'id':'region-type'}}),
    ". Please select one."
  ]),
  'shoutAnnon'    : newErrMsg("If you're giving someone a shout-out you have to say who they are."),
  'shoutEmpty'    : newErrMsg("If you're going to give a shout-out, you've got to say what the shout is."),
};

const contactZones = {
  'bugData'    : document.getElementById('contact-bug-data-zone'),
  'bugPage'    : document.getElementById('contact-bug-page-zone'),
  'country'    : document.getElementById('contact-country-zone'),
  'email'      : document.getElementById('contact-email-zone'),
  'feedback'   : document.getElementById('contact-feedback-zone'),
  'general'    : document.getElementById('contact-general-zone'),
  'name'       : document.getElementById('contact-name-zone'),
  'otherText'  : document.getElementById('contact-other-zone'),
  'otherReason': document.getElementById('contact-reason-zone'),
  'region'     : document.getElementById('contact-region-zone'),
  'shoutName'  : document.getElementById('contact-shout-name-zone'),
  'shoutText'  : document.getElementById('contact-shout-text-zone'),
};

const contactFields = {
  'bugData'    : document.getElementById('contact-bug-data'),
  'bugPage'    : document.getElementById('contact-bug-page'),
  'country'    : document.getElementById('contact-country'),
  'email'      : document.getElementById('contact-email'),
  'feedbackCon': document.getElementById('contact-feedback-cons'),
  'feedbackPro': document.getElementById('contact-feedback-pros'),
  'general'    : document.getElementById('contact-general'),
  'name'       : document.getElementById('contact-name'),
  'otherText'  : document.getElementById('contact-other'),
  'otherReason': document.getElementById('contact-reason'),
  'region'     : document.getElementById('contact-region'),
  'regionLabel': document.getElementById('contact-region-label'),
  'shoutName'  : document.getElementById('contact-shout-for'),
  'shoutText'  : document.getElementById('contact-shout-response'),
}

contactForm.addEventListener('reset', resetContactInfo);
contactForm.addEventListener('submit', checkContactInfo);
contactFields.country.addEventListener('change', countryChange);

/* vim: set syntax=javascript ts=4 sw=4 sts=4 et sr: */
