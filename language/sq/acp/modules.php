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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Këtu mund të menaxhoni të gjitha llojet e moduleve. Kini parasysh se PKA-ja ka strukturë menyje me tri nivele (Kategori -> Kategori -> Modul), ndërsa panelet e tjera kanë strukturë me dy nivele (Kategori -> Modul), e cila duhet ruajtur. Gjithashtu, mund t’ia bllokoni vetes hyrjen nëse çaktivizoni ose fshini modulet përgjegjëse për vetë menaxhimin e moduleve.',
	'ADD_MODULE'					=> 'Shtoni modul',
	'ADD_MODULE_CONFIRM'			=> 'Jeni të sigurt se dëshironi ta shtoni modulin e zgjedhur me mënyrën e zgjedhur?',
	'ADD_MODULE_TITLE'				=> 'Shtoni modul',

	'CANNOT_REMOVE_MODULE'	=> 'Moduli nuk mund të hiqet sepse ka elemente vartëse. Hiqini ose zhvendosini të gjitha para se të kryeni këtë veprim.',
	'CATEGORY'				=> 'Kategori',
	'CHOOSE_MODE'			=> 'Zgjidhni mënyrën e modulit',
	'CHOOSE_MODE_EXPLAIN'	=> 'Zgjidhni mënyrën që përdor moduli.',
	'CHOOSE_MODULE'			=> 'Zgjidhni modulin',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Zgjidhni skedarin që thërret ky modul.',
	'CREATE_MODULE'			=> 'Krijoni modul të ri',

	'DEACTIVATED_MODULE'	=> 'Modul i çaktivizuar',
	'DELETE_MODULE'			=> 'Fshini modulin',
	'DELETE_MODULE_CONFIRM'	=> 'Jeni të sigurt se dëshironi ta hiqni këtë modul?',

	'EDIT_MODULE'			=> 'Redaktoni modulin',
	'EDIT_MODULE_EXPLAIN'	=> 'Këtu mund të vendosni cilësimet specifike të modulit.',

	'HIDDEN_MODULE'			=> 'Modul i fshehur',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Moduli u shtua me sukses.',
	'MODULE_DELETED'			=> 'Moduli u hoq me sukses.',
	'MODULE_DISPLAYED'			=> 'Moduli shfaqet',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Nëse nuk dëshironi ta shfaqni këtë modul, por dëshironi ta përdorni, vendoseni në jo.',
	'MODULE_EDITED'				=> 'Moduli u redaktua me sukses.',
	'MODULE_ENABLED'			=> 'Moduli aktiv',
	'MODULE_LANGNAME'			=> 'Emri gjuhësor i modulit',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Vendosni emrin që do të shfaqet për modulin. Përdorni konstanten gjuhësore nëse emri merret nga skedari gjuhësor.',
	'MODULE_TYPE'				=> 'Lloji i modulit',

	'NO_CATEGORY_TO_MODULE'	=> 'Kategoria nuk mund të kthehet në modul. Hiqini ose zhvendosini të gjitha elementet vartëse para se të kryeni këtë veprim.',
	'NO_MODULE'				=> 'Nuk u gjet modul.',
	'NO_MODULE_ID'			=> 'Nuk u përcaktua ID-ja e modulit.',
	'NO_MODULE_LANGNAME'	=> 'Nuk u përcaktua emri gjuhësor i modulit.',
	'NO_PARENT'				=> 'Pa prind',

	'PARENT'				=> 'Prindi',
	'PARENT_NO_EXIST'		=> 'Prindi nuk ekziston.',

	'SELECT_MODULE'			=> 'Zgjidhni një modul',
));
