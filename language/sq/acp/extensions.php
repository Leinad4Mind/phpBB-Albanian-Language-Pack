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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Shtesë',
	'EXTENSIONS'				=> 'Shtesat',
	'EXTENSIONS_ADMIN'			=> 'Menaxheri i shtesave',
	'EXTENSIONS_EXPLAIN'		=> 'Menaxheri i shtesave është mjet i phpBB-së që ju lejon të menaxhoni gjendjen e të gjitha shtesave dhe të shihni informacion rreth tyre.',
	'EXTENSION_INVALID_LIST'	=> 'Shtesa “%s” nuk është e vlefshme.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Shtesa e zgjedhur nuk është e disponueshme për këtë forum; verifikoni nëse lejohen versionet tuaja të phpBB-së dhe PHP-së (shihni faqen e hollësive).',
	'EXTENSION_DIR_INVALID'		=> 'Shtesa e zgjedhur ka strukturë të pavlefshme dosjesh dhe nuk mund të aktivizohet.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Shtesa e zgjedhur nuk mund të aktivizohet; kontrolloni kërkesat e saj.',
	'EXTENSION_NOT_INSTALLED'	=> 'Shtesa %s nuk është e disponueshme. Kontrolloni nëse e keni instaluar siç duhet.',

	'DETAILS'				=> 'Hollësitë',

	'EXTENSIONS_NOT_INSTALLED'	=> 'Shtesa të painstaluara',
	'EXTENSIONS_DISABLED'		=> 'Shtesa të çaktivizuara',
	'EXTENSIONS_ENABLED'		=> 'Shtesa të aktivizuara',

	'EXTENSION_DELETE_DATA'	=> 'Fshini të dhënat',
	'EXTENSION_DISABLE'		=> 'Çaktivizoni',
	'EXTENSION_ENABLE'		=> 'Aktivizoni',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Fshirja e të dhënave të shtesës heq të gjitha të dhënat dhe cilësimet e saj. Skedarët e shtesës ruhen që ajo të mund të aktivizohet sërish.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Çaktivizimi i një shtese ruan skedarët, të dhënat dhe cilësimet e saj, por heq funksionet që ajo ka shtuar.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Aktivizimi i shtesës ju lejon ta përdorni në forum.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Të dhënat e shtesës po fshihen. Mos u largoni dhe mos e rifreskoni faqen deri sa procesi të përfundojë.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Shtesa po çaktivizohet. Mos u largoni dhe mos e rifreskoni faqen deri sa procesi të përfundojë.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Shtesa po aktivizohet. Mos u largoni dhe mos e rifreskoni faqen deri sa procesi të përfundojë.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Të dhënat e shtesës u fshinë me sukses',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Shtesa u çaktivizua me sukses',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Shtesa u aktivizua me sukses',

	'EXTENSION_NAME'			=> 'Emri i shtesës',
	'EXTENSION_ACTIONS'			=> 'Veprimet',
	'EXTENSION_OPTIONS'			=> 'Opsionet',
	'EXTENSION_INSTALL_HEADLINE'=> 'Instalimi i një shtese',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Shkarkoni një shtesë nga baza e shtesave të phpBB-së</li>
			<li>Çngjesheni shtesën dhe ngarkojeni në dosjen <samp>ext/</samp> të forumit phpBB</li>
			<li>Aktivizojeni shtesën këtu, në Menaxherin e shtesave</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Përditësimi i një shtese',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Çaktivizojeni shtesën</li>
			<li>Fshini skedarët e shtesës nga sistemi i skedarëve</li>
			<li>Ngarkoni skedarët e rinj</li>
			<li>Aktivizojeni shtesën</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Heqja e plotë e një shtese nga forumi',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Çaktivizojeni shtesën</li>
			<li>Fshini të dhënat e shtesës</li>
			<li>Fshini skedarët e shtesës nga sistemi i skedarëve</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Jeni të sigurt se dëshironi t’i fshini të dhënat e lidhura me “%s”?<br /><br />Kjo heq të gjitha të dhënat dhe cilësimet dhe nuk mund të zhbëhet!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Jeni të sigurt se dëshironi ta çaktivizoni shtesën “%s”?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Jeni të sigurt se dëshironi ta aktivizoni shtesën “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Jeni të sigurt se dëshironi ta detyroni përdorimin e versionit të paqëndrueshëm?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Kthehuni te lista e shtesave',

	'EXT_DETAILS'			=> 'Hollësitë e shtesës',
	'DISPLAY_NAME'			=> 'Emri i shfaqur',
	'CLEAN_NAME'			=> 'Emri i pastër',
	'TYPE'					=> 'Lloji',
	'DESCRIPTION'			=> 'Përshkrimi',
	'VERSION'				=> 'Versioni',
	'HOMEPAGE'				=> 'Faqja kryesore',
	'PATH'					=> 'Shtegu i skedarit',
	'TIME'					=> 'Koha e publikimit',
	'LICENSE'				=> 'Licenca',

	'REQUIREMENTS'			=> 'Kërkesat',
	'PHPBB_VERSION'			=> 'Versioni i phpBB',
	'PHP_VERSION'			=> 'Versioni i PHP',
	'AUTHOR_INFORMATION'	=> 'Të dhënat e autorit',
	'AUTHOR_NAME'			=> 'Emri',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Faqja kryesore',
	'AUTHOR_ROLE'			=> 'Roli',

	'NOT_UP_TO_DATE'		=> '%s nuk është i përditësuar',
	'UP_TO_DATE'			=> '%s është i përditësuar',
	'ANNOUNCEMENT_TOPIC'	=> 'Njoftimi i publikimit',
	'DOWNLOAD_LATEST'		=> 'Shkarkoni versionin',
	'NO_VERSIONCHECK'		=> 'Nuk u dha informacion për kontrollin e versionit.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Rikontrolloni të gjitha versionet',
	'FORCE_UNSTABLE'					=> 'Kontrolloni gjithmonë versionet e paqëndrueshme',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Cilësimet e kontrollit të versionit',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Shfletoni bazën e shtesave',

	'META_FIELD_NOT_SET'	=> 'Metafusha e kërkuar %s nuk është caktuar.',
	'META_FIELD_INVALID'	=> 'Metafusha %s është e pavlefshme.',
));
