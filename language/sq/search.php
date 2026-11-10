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
	'ALL_AVAILABLE'			=> 'Të gjitha në dispozicion',
	'ALL_RESULTS'			=> 'Të gjitha rezultatet',

	'DISPLAY_RESULTS'		=> 'Shfaq rezultatet si',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Kërkimi gjeti përputhjen %d',
		2	=> 'Kërko gjetur përputhje %d',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Kërkimi gjeti më shumë se përputhja %d',
		2	=> 'Kërkimi gjeti më shumë se ndeshje %d',
	),

	'GLOBAL'				=> 'Njoftim global',

	'IGNORED_TERMS'			=> 'injoruar',
	'IGNORED_TERMS_EXPLAIN'	=> 'Fjalët e mëposhtme në pyetjen tuaj të kërkimit u shpërfillën sepse janë fjalë shumë të zakonshme: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Shko te postimi',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Bordi kërkon që ju të regjistroheni dhe të identifikoheni për të parë postimet tuaja.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Bordi kërkon që ju të regjistroheni dhe të identifikoheni për të parë postimet tuaja të palexuara.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Bordi kërkon që ju të regjistroheni dhe të identifikoheni për të parë postimet e reja që nga vizita juaj e fundit.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Ju specifikuat shumë fjalë për të kërkuar. Ju lutemi mos shkruani më shumë se fjalë %1$d.',
		2	=> 'Ju specifikuat shumë fjalë për të kërkuar. Ju lutemi mos shkruani më shumë se %1$d fjalë.',
	),

	'NO_KEYWORDS'			=> 'Duhet të specifikoni të paktën një fjalë për të kërkuar. Çdo fjalë duhet të përbëhet nga të paktën %s dhe nuk duhet të përmbajë më shumë se %s duke përjashtuar shkronjat e egra.',
	'NO_RECENT_SEARCHES'	=> 'Nuk është kryer asnjë kontroll kohët e fundit.',
	'NO_SEARCH'				=> 'Na vjen keq, por nuk ju lejohet të përdorni sistemin e kërkimit.',
	'NO_SEARCH_RESULTS'		=> 'Nuk u gjet asnjë përputhje e përshtatshme.',
	'NO_SEARCH_LOAD'		=> 'Na vjen keq, por nuk mund ta përdorni kërkimin në këtë moment. Serveri ka ngarkesë të lartë. Ju lutemi provoni përsëri më vonë.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Na vjen keq, por nuk mund ta përdorni kërkimin në këtë moment. Ju lutemi provoni përsëri në %d sekondë.',
		2	=> 'Na vjen keq, por nuk mund ta përdorni kërkimin në këtë moment. Ju lutemi provoni përsëri për %d sekonda.',
	),
	'NO_SEARCH_UNREADS'		=> 'Na vjen keq, por kërkimi për postime të palexuara është çaktivizuar në këtë tabelë.',
	'WORD_IN_NO_POST'		=> 'Nuk u gjet asnjë postim sepse fjala <strong>%s</strong> nuk gjendet në asnjë postim.',
	'WORDS_IN_NO_POST'		=> 'Nuk u gjet asnjë postim sepse fjalët <strong>%s</strong> nuk gjenden në asnjë postim.',

	'POST_CHARACTERS'		=> 'personazhet e postimeve',
	'PHRASE_SEARCH_DISABLED'	=> 'Kërkimi sipas frazës së saktë nuk mbështetet në këtë tabelë.',

	'RECENT_SEARCHES'		=> 'Kërkimet e fundit',
	'RESULT_DAYS'			=> 'Kufizoni rezultatet me të mëparshmet',
	'RESULT_SORT'			=> 'Rendit rezultatet sipas',
	'RETURN_FIRST'			=> 'Kthehu i pari',
	'RETURN_FIRST_EXPLAIN'	=> 'Vendosni në 0 për të shfaqur të gjithë postimin.',
	'GO_TO_SEARCH_ADV'	=> 'Shkoni te kërkimi i avancuar',

	'SEARCHED_FOR'				=> 'Termi i kërkimit i përdorur',
	'SEARCHED_TOPIC'			=> 'Tema e kërkuar',
	'SEARCHED_QUERY'			=> 'Pyetja e kërkuar',
	'SEARCH_ALL_TERMS'			=> 'Kërkoni për të gjitha termat ose përdorni pyetjen siç është futur',
	'SEARCH_ANY_TERMS'			=> 'Kërkoni për ndonjë term',
	'SEARCH_AUTHOR'				=> 'Kërkoni për autorin',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Përdorni * si një karakteristikë për ndeshjet e pjesshme.',
	'SEARCH_FIRST_POST'			=> 'Vetëm postimi i parë i temave',
	'SEARCH_FORUMS'				=> 'Kërkoni në forume',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Zgjidhni forumin ose forumet në të cilat dëshironi të kërkoni. Nënforumet kërkohen automatikisht nëse nuk çaktivizoni "kërkoni nënforume" më poshtë.',
	'SEARCH_IN_RESULTS'			=> 'Kërkoni këto rezultate',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Vendosni <strong>+</strong> përpara një fjale që duhet gjetur dhe <strong>-</strong> përpara një fjale që nuk duhet të gjendet. Vendosni një listë fjalësh të ndara me <strong>|</strong> në kllapa nëse duhet të gjendet vetëm një nga fjalët. Përdorni * si një karakteristikë për ndeshjet e pjesshme.',
	'SEARCH_MSG_ONLY'			=> 'Vetëm teksti i mesazhit',
	'SEARCH_OPTIONS'			=> 'Opsionet e kërkimit',
	'SEARCH_QUERY'				=> 'Pyetja e kërkimit',
	'SEARCH_SUBFORUMS'			=> 'Kërkoni nënforume',
	'SEARCH_TITLE_MSG'			=> 'Postoni subjektet dhe tekstin e mesazhit',
	'SEARCH_TITLE_ONLY'			=> 'Vetëm titujt e temave',
	'SEARCH_WITHIN'				=> 'Kërko brenda',
	'SORT_ASCENDING'			=> 'Në ngjitje',
	'SORT_AUTHOR'				=> 'Autori',
	'SORT_DESCENDING'			=> 'Duke zbritur',
	'SORT_FORUM'				=> 'Forumi',
	'SORT_POST_SUBJECT'			=> 'Tema e postimit',
	'SORT_TIME'					=> 'Koha e postimit',
	'SPHINX_SEARCH_FAILED'		=> 'Kërkimi dështoi: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Na vjen keq, kërkimi nuk mund të kryhej. Më shumë informacion rreth këtij dështimi është regjistruar në regjistrin e gabimeve.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Duhet të specifikoni të paktën karakterin %d të emrit të autorit.',
		2	=> 'Duhet të specifikoni të paktën karakteret %d të emrit të autorit.',
	),
));
