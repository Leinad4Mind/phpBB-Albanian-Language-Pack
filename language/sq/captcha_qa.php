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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Kjo pyetje është një mjet për të parandaluar paraqitjet e automatizuara të formularëve nga spambots.',
	'CONFIRM_QUESTION_WRONG'	=> 'Ju keni dhënë një përgjigje të pavlefshme për pyetjen.',
	'CONFIRM_QUESTION_MISSING'	=> 'Pyetjet për captcha nuk mund të riktheheshin. Ju lutemi kontaktoni një administrator bordi.',

	'QUESTION_ANSWERS'			=> 'Përgjigjet',
	'ANSWERS_EXPLAIN'			=> 'Ju lutemi shkruani përgjigje të vlefshme për pyetjen, një për rresht.',
	'CONFIRM_QUESTION'			=> 'Pyetje',

	'ANSWER'					=> 'Përgjigju',
	'EDIT_QUESTION'				=> 'Redakto pyetjen',
	'QUESTIONS'					=> 'Pyetje',
	'QUESTIONS_EXPLAIN'			=> 'Për çdo paraqitje të formularit ku keni aktivizuar shtojcën Q&amp;A, përdoruesve do t\'u kërkohet një nga pyetjet e specifikuara këtu. Për të përdorur këtë shtesë, të paktën një pyetje duhet të vendoset në gjuhën e paracaktuar. Këto pyetje duhet të jenë të lehta për t\'u përgjigjur nga audienca juaj e synuar, por përtej aftësisë së një roboti të aftë për të kryer një kërkim në Google™. Është e nevojshme vetëm një pyetje e vetme e duhur. Nëse filloni të merrni regjistrime të padëshiruara, pyetja duhet të ndryshohet. Aktivizo vendosjen e rreptë nëse pyetja juaj mbështetet në shkronja të ndryshme, shenja pikësimi ose hapësira të bardha.',
	'QUESTION_DELETED'			=> 'Pyetja u fshi',
	'QUESTION_LANG'				=> 'Gjuha',
	'QUESTION_LANG_EXPLAIN'		=> 'Gjuha në të cilën janë shkruar kjo pyetje dhe përgjigjet e saj.',
	'QUESTION_STRICT'			=> 'Kontroll i rreptë',
	'QUESTION_STRICT_EXPLAIN'	=> 'Aktivizo për të zbatuar shkronjat e përziera, shenjat e pikësimit dhe hapësirat e bardha.',

	'QUESTION_TEXT'				=> 'Pyetje',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pyetja e paraqitur tek përdoruesi.',

	'QA_ERROR_MSG'				=> 'Ju lutemi plotësoni të gjitha fushat dhe shkruani të paktën një përgjigje.',
	'QA_LAST_QUESTION'			=> 'Nuk mund t\'i fshini të gjitha pyetjet kur shtojca është aktive.',
));
