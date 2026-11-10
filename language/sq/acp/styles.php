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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_STYLES_EXPLAIN'						=> 'Këtu mund të menaxhoni stilet e disponueshme në forum.<br>Kini parasysh se stili “<strong>prosilver</strong>” nuk mund të çinstalohet, sepse është stili i parazgjedhur dhe stili prind kryesor i phpBB-së.',

	'CANNOT_BE_INSTALLED'						=> 'Nuk mund të instalohet',
	'CONFIRM_UNINSTALL_STYLES'					=> 'Jeni të sigurt se dëshironi t’i çinstaloni stilet e zgjedhura?',
	'COPYRIGHT'									=> 'E drejta e autorit',

	'DEACTIVATE_DEFAULT'						=> 'Stili i parazgjedhur nuk mund të çaktivizohet.',
	'DELETE_FROM_FS'							=> 'Fshini nga sistemi i skedarëve',
	'DELETE_STYLE_FILES_FAILED'					=> 'Gabim gjatë fshirjes së skedarëve të stilit "%s".',
	'DELETE_STYLE_FILES_SUCCESS'				=> 'Skedarët e stilit "%s" u fshinë.',
	'DETAILS'									=> 'Hollësitë',

	'INHERITING_FROM'							=> 'Trashëgon nga',
	'INSTALL_STYLE'								=> 'Instaloni stilin',
	'INSTALL_STYLES'							=> 'Instaloni stile',
	'INSTALL_STYLES_EXPLAIN'					=> 'Këtu mund të instaloni stile të reja.<br>Nëse një stil i caktuar nuk gjendet në listën më poshtë, kontrolloni nëse është instaluar tashmë. Nëse nuk është instaluar, kontrolloni nëse është ngarkuar siç duhet.',
	'INVALID_STYLE_ID'							=> 'ID e pavlefshme e stilit.',

	'NO_MATCHING_STYLES_FOUND'					=> 'Asnjë stil nuk përputhet me kërkesën.',
	'NO_UNINSTALLED_STYLE'						=> 'Nuk u gjetën stile të painstaluara.',

	'PURGED_CACHE'								=> 'Memoria e përkohshme u pastrua.',

	'REQUIRES_STYLE'							=> 'Ky stil kërkon që të jetë instaluar stili "%s".',

	'STYLE_ACTIVATE'							=> 'Aktivizoni',
	'STYLE_ACTIVE'								=> 'Aktiv',
	'STYLE_DEACTIVATE'							=> 'Çaktivizoni',
	'STYLE_DEFAULT'								=> 'Bëjeni stilin e parazgjedhur',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> 'Duhet ta aktivizoni stilin para se ta bëni të parazgjedhur.',
	'STYLE_ERR_INVALID_PARENT'					=> 'Stil prind i pavlefshëm.',
	'STYLE_ERR_NAME_EXIST'						=> 'Një stil me këtë emër ekziston tashmë.',
	'STYLE_ERR_STYLE_NAME'						=> 'Duhet të jepni një emër për këtë stil.',
	'STYLE_INSTALLED'							=> 'Stili "%s" u instalua.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Kthehuni te lista e stileve të instaluara',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Instaloni stile të tjera',
	'STYLE_NAME'								=> 'Emri i stilit',
	'STYLE_NAME_RESERVED'						=> 'Stili "%s" nuk mund të instalohet sepse emri është i rezervuar.',
	'STYLE_NOT_INSTALLED'						=> 'Stili "%s" nuk u instalua.',
	'STYLE_PATH'								=> 'Shtegu i stilit',
	'STYLE_UNINSTALL'							=> 'Çinstaloni',
	'STYLE_UNINSTALL_DEPENDENT'					=> 'Stili "%s" nuk mund të çinstalohet sepse ka një ose më shumë stile vartëse.',
	'STYLE_UNINSTALLED'							=> 'Stili "%s" u çinstalua me sukses.',
	'STYLE_PHPBB_VERSION'						=> 'Versioni i phpBB',
	'STYLE_USED_BY'								=> 'Përdoret nga (përfshirë robotët)',
	'STYLE_VERSION'								=> 'Versioni i stilit',

	'UNINSTALL_PROSILVER'						=> 'Stili “prosilver” nuk mund të çinstalohet.',
	'UNINSTALL_DEFAULT'							=> 'Stili i parazgjedhur nuk mund të çinstalohet.',

	'BROWSE_STYLES_DATABASE'					=> 'Shfletoni bazën e stileve',
]);
