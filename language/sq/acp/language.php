<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Skedarët e gjuhës së administrimit',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Këtu mund të instaloni ose hiqni paketa gjuhësore. Paketa e parazgjedhur shënohet me yll (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Jeni të sigurt se dëshironi ta fshini “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Paketat gjuhësore të instaluara',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Të dhënat e gjuhës u përditësuan me sukses.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Kjo paketë gjuhësore është instaluar tashmë.',
	'LANGUAGE_PACK_DELETED'				=> 'Paketa gjuhësore “%s” u hoq me sukses. Të gjithë përdoruesit që përdornin këtë gjuhë u kthyen te gjuha e parazgjedhur e forumit.',
	'LANGUAGE_PACK_DETAILS'				=> 'Të dhënat e paketës gjuhësore',
	'LANGUAGE_PACK_INSTALLED'			=> 'Paketa gjuhësore “%s” u instalua me sukses.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Tekstet gjuhësore të fushave të personalizuara të profilit u kopjuan nga gjuha e parazgjedhur. Ndryshojini nëse është e nevojshme.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Emri vendor',
	'LANGUAGE_PACK_NAME'				=> 'Emri',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Paketa gjuhësore e zgjedhur nuk ekziston.',
	'LANGUAGE_PACK_USED_BY'				=> 'Përdoret nga (përfshirë robotët)',
	'LANGUAGE_VARIABLE'					=> 'Ndryshorja gjuhësore',
	'LANG_AUTHOR'						=> 'Autori i paketës gjuhësore',
	'LANG_ENGLISH_NAME'					=> 'Emri në anglisht',
	'LANG_ISO_CODE'						=> 'Kodi ISO',
	'LANG_LOCAL_NAME'					=> 'Emri vendor',

	'MISSING_LANG_FILES'		=> 'Skedarë gjuhësorë që mungojnë',
	'MISSING_LANG_VARIABLES'	=> 'Ndryshore gjuhësore që mungojnë',

	'NO_FILE_SELECTED'				=> 'Nuk keni përcaktuar skedar gjuhësor.',
	'NO_LANG_ID'					=> 'Nuk keni përcaktuar paketë gjuhësore.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Paketa gjuhësore e parazgjedhur nuk mund të hiqet.<br />Për ta hequr këtë paketë, ndryshoni së pari gjuhën e parazgjedhur të forumit.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Nuk ka paketa gjuhësore të painstaluara',

	'THOSE_MISSING_LANG_FILES'			=> 'Skedarët e mëposhtëm gjuhësorë mungojnë në dosjen e gjuhës “%s”',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Ndryshoret e mëposhtme gjuhësore mungojnë në paketën “%s”',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paketat gjuhësore të painstaluara',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Shfletoni bazën e paketave gjuhësore',
));
