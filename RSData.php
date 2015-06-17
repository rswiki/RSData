<?php
/* This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}

$wgExtensionCredits['api'][] = array(
	'path' => __FILE__,
	'name' => 'RSData',
	'author' => array(
		'[http://runescape.wikia.com/wiki/User:Cqm Cqm]',
		'[http://runescape.wikia.com/wiki/User:TehKittyCat TehKittyCat]',
	), 
	'url' => 'https://github.com/rswiki/RSData', 
	'descriptionmsg' => 'rsdata-desc',
	'version'  => '0.0.1',
);

// i18n
$wgExtensionMessagesFiles['RSData'] = __DIR__ . '/RSData.i18n.php';

// classes
$wgAutoloadClasses['RSDataApi'] = __DIR__ . '/RSDataApiExtension.php';

// setup api module
$wgAPIModules['rsdata'] = 'RSDataApi';
