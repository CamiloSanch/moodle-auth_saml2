<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Anobody can login using saml2
 *
 * @package   auth_saml2
 * @copyright Brendan Heywood <brendan@catalyst-au.net>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'SAML2';
$string['auth_saml2description'] = 'Authenticate with a SAML2 IdP';
$string['idpname'] = 'IdP Name';
$string['idpname_help'] = 'eg myUNI - this will show on the dual login page if enabled';
$string['entityid'] = 'IdP Entity ID';
$string['entityid_help'] = 'eg https://idp.example.com/';
$string['ssourl'] = 'Signin Service URL';
$string['ssourl_help'] = 'eg https://idp.example.com/SsoRedirect';
$string['slourl'] = 'Logout Service URL';
$string['slourl_help'] = 'eg https://idp.example.com/SloRedirect';
$string['certfingerprint'] = 'Certificate finger print';
$string['certfingerprint_help'] = 'eg a bunch of hexidecimal chars';
$string['debug'] = 'Debugging';
$string['debug_help'] = 'This adds extra debugging to the normal moodle log';
$string['spmetadata'] = 'SP Metdata';
$string['spmetadata_link'] = 'View Service Provider Metadata (xml)';
$string['spmetadata_help'] = 'You may need to give this to the IdP admin to whitelist you.';
$string['duallogin'] = 'Dual login';
$string['duallogin_help'] = '
<p>If on, then users will see both manual and a SAML login button. If off they will always be taken directly to the IdP login page.</p>
<p>If off, then admins can still see the manual login page via /login/index.php?saml=off</p>
<p>If on, then external pages can deep link into moodle using saml eg /course/view.php?id=45&saml=on</p>
';
$string['anyauth'] = 'Allowed any auth type';
$string['anyauth_help'] = 'Yes: Allow SAML login for all users? No: Only users who have saml2 as their type.';
$string['wrongauth'] = 'You have logged in succesfully as \'{$a}\' but are not authorized to access Moodle.';
$string['nouser'] = 'You have logged in succesfully as \'{$a}\' but do not have an account in Moodle.';

