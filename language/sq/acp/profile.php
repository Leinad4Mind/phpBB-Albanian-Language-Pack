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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Fusha e personalizuar e profilit u shtua me sukses.',
	'ALPHA_DOTS'			=> 'Shkronja, numra dhe pika',
	'ALPHA_ONLY'			=> 'Vetëm shkronja dhe numra',
	'ALPHA_SPACERS'			=> 'Shkronja, numra dhe ndarës',
	'ALPHA_UNDERSCORE'		=> 'Shkronja, numra dhe nënvija',
	'ALPHA_PUNCTUATION'		=> 'Shkronja e numra me presje, pika, nënvija dhe viza, duke filluar me shkronjë',
	'ALWAYS_TODAY'			=> 'Gjithmonë data aktuale',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Vendosni tani opsionet',
	'BOOL_TYPE_EXPLAIN'		=> 'Përcaktoni llojin: kuti zgjedhjeje ose butona radio. Kutia shfaqet vetëm nëse është zgjedhur për përdoruesin; në atë rast përdoret opsioni gjuhësor <strong>i dytë</strong>. Butonat radio shfaqen pavarësisht vlerës.',

	'CHANGED_PROFILE_FIELD'		=> 'Fusha e profilit u ndryshua me sukses.',
	'CHARS_ANY'					=> 'Çdo shenjë',
	'CHECKBOX'					=> 'Kuti zgjedhjeje',
	'COLUMNS'					=> 'Shtyllat',
	'CP_LANG_DEFAULT_VALUE'		=> 'Vlera e parazgjedhur',
	'CP_LANG_EXPLAIN'			=> 'Përshkrimi i fushës',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Shpjegimi i kësaj fushe që i paraqitet përdoruesit.',
	'CP_LANG_NAME'				=> 'Emri/titulli i fushës që i paraqitet përdoruesit',
	'CP_LANG_OPTIONS'			=> 'Opsionet',
	'CREATE_NEW_FIELD'			=> 'Krijoni fushë të re',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Të paktën një fushë e personalizuar e profilit nuk është përkthyer ende. Vendosni të dhënat e kërkuara duke klikuar lidhjen “Përkthejeni”.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Gjuha e parazgjedhur [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Hyrjet e gjuhës së parazgjedhur nuk janë plotësuar për këtë fushë.',
	'DEFAULT_VALUE'					=> 'Vlera e parazgjedhur',
	'DELETE_PROFILE_FIELD'			=> 'Hiqni fushën e profilit',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Jeni të sigurt se dëshironi ta fshini këtë fushë profili?',
	'DISPLAY_AT_PROFILE'			=> 'Shfaqeni në panelin e kontrollit të përdoruesit',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Përdoruesi mund ta ndryshojë këtë fushë brenda panelit të vet.',
	'DISPLAY_AT_REGISTER'			=> 'Shfaqeni në ekranin e regjistrimit',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Nëse aktivizohet, fusha do të shfaqet gjatë regjistrimit.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Shfaqeni në listën e anëtarëve',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Nëse aktivizohet, fusha do të shfaqet në rreshtat e përdoruesve në listën e anëtarëve.',
	'DISPLAY_ON_PM'					=> 'Shfaqeni në ekranin e mesazhit privat',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Nëse aktivizohet, fusha do të shfaqet në miniprofilin e mesazhit privat.',
	'DISPLAY_ON_VT'					=> 'Shfaqeni në ekranin e temës',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Nëse aktivizohet, fusha do të shfaqet në miniprofilin e temës.',
	'DISPLAY_PROFILE_FIELD'			=> 'Shfaqeni publikisht fushën e profilit',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Fusha do të shfaqet në të gjitha vendet që lejojnë cilësimet e ngarkesës. “Jo” e fsheh nga faqet e temave, profilet dhe lista e anëtarëve.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Vendosni opsionet tani, secilin në rresht më vete.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Mund ta ndryshoni tekstin e opsioneve dhe të shtoni opsione të reja në fund. Nuk këshillohet të shtoni ose hiqni opsione në mes, sepse përdoruesve mund t’u caktohen vlera të gabuara. Heqja nga fundi i kthen përdoruesit që e kishin atë vlerë te vlera e parazgjedhur.',
	'EMPTY_FIELD_IDENT'				=> 'Identifikuesi i fushës është bosh',
	'EMPTY_USER_FIELD_NAME'			=> 'Vendosni një emër/titull fushe',
	'ENTRIES'						=> 'Hyrjet',
	'EVERYTHING_OK'					=> 'Gjithçka në rregull',

	'FIELD_BOOL'				=> 'Vlerë logjike (Po/Jo)',
	'FIELD_CONTACT_DESC'		=> 'Përshkrimi i kontaktit',
	'FIELD_CONTACT_URL'			=> 'Lidhja e kontaktit',
	'FIELD_DATE'				=> 'Data',
	'FIELD_DESCRIPTION'			=> 'Përshkrimi i fushës',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Shpjegimi i kësaj fushe që i paraqitet përdoruesit.',
	'FIELD_DROPDOWN'			=> 'Listë zbritëse',
	'FIELD_IDENT'				=> 'Identifikuesi i fushës',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Identifikuesi i zgjedhur ekziston tashmë. Zgjidhni një emër tjetër.',
	'FIELD_IDENT_EXPLAIN'		=> 'Identifikuesi është emri që përdoret për fushën në bazën e të dhënave dhe shabllone.',
	'FIELD_INT'					=> 'Numra',
	'FIELD_IS_CONTACT'			=> 'Shfaqeni si fushë kontakti',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'Fushat e kontaktit shfaqen në pjesën e kontaktit të profilit dhe ndryshe në miniprofil pranë postimeve e mesazheve private. Mund të përdorni <samp>%s</samp> si ndryshore vendmbajtëse që zëvendësohet nga vlera e dhënë nga përdoruesi.',
	'FIELD_LENGTH'				=> 'Gjatësia e kutisë së hyrjes',
	'FIELD_NOT_FOUND'			=> 'Fusha e profilit nuk u gjet.',
	'FIELD_STRING'				=> 'Fushë teksti me një rresht',
	'FIELD_TEXT'				=> 'Zonë teksti',
	'FIELD_TYPE'				=> 'Lloji i fushës',
	'FIELD_TYPE_EXPLAIN'		=> 'Lloji i fushës nuk mund të ndryshohet më vonë.',
	'FIELD_URL'					=> 'URL (Lidhje)',
	'FIELD_VALIDATION'			=> 'Vlefshmëria e fushës',
	'FIRST_OPTION'				=> 'Opsioni i parë',

	'HIDE_PROFILE_FIELD'			=> 'Fshiheni fushën e profilit',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Fshiheni fushën nga të gjithë përveç administratorëve dhe moderatorëve. Nëse shfaqja në panelin e përdoruesit është çaktivizuar, përdoruesi nuk mund ta shohë ose ndryshojë dhe vetëm administratorët mund ta ndryshojnë.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Identifikuesi mund të përmbajë vetëm shkronja të vogla a-z dhe _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Identifikuesi mund të ketë vetëm 17 shenja',
	'ISO_LANGUAGE'				=> 'Gjuha [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Opsionet specifike të gjuhës [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'			=> 'Çdo shkronjë, numër dhe pikë',
	'LETTER_NUM_ONLY'			=> 'Çdo shkronjë dhe numër',
	'LETTER_NUM_PUNCTUATION'	=> 'Çdo shkronjë, numër, presje, pikë, nënvijë dhe vizë, duke filluar me shkronjë',
	'LETTER_NUM_SPACERS'		=> 'Çdo shkronjë, numër dhe ndarës',
	'LETTER_NUM_UNDERSCORE'		=> 'Çdo shkronjë, numër dhe nënvijë',

	'MAX_FIELD_CHARS'		=> 'Numri maksimal i shenjave',
	'MAX_FIELD_NUMBER'		=> 'Numri më i lartë i lejuar',
	'MIN_FIELD_CHARS'		=> 'Numri minimal i shenjave',
	'MIN_FIELD_NUMBER'		=> 'Numri më i ulët i lejuar',

	'NO_FIELD_ENTRIES'			=> 'Nuk janë përcaktuar hyrje',
	'NO_FIELD_ID'				=> 'Nuk u përcaktua ID e fushës.',
	'NO_FIELD_TYPE'				=> 'Nuk u përcaktua lloji i fushës.',
	'NO_VALUE_OPTION'			=> 'Opsioni që barazohet me vlerë të pavendosur',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Vlera për mungesë hyrjeje. Nëse fusha kërkohet, zgjedhja e këtij opsioni i jep përdoruesit gabim.',
	'NUMBERS_ONLY'				=> 'Vetëm numra (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Opsionet bazë',
	'PROFILE_FIELD_ACTIVATED'	=> 'Fusha e profilit u aktivizua me sukses.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Fusha e profilit u çaktivizua me sukses.',
	'PROFILE_LANG_OPTIONS'		=> 'Opsionet specifike të gjuhës',
	'PROFILE_TYPE_OPTIONS'		=> 'Opsionet specifike të llojit të profilit',

	'RADIO_BUTTONS'				=> 'Butona radio',
	'REMOVED_PROFILE_FIELD'		=> 'Fusha e profilit u hoq me sukses.',
	'REQUIRED_FIELD'			=> 'Fushë e detyrueshme',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Detyron plotësimin e fushës nga përdoruesi ose administratori. Nëse shfaqja gjatë regjistrimit është çaktivizuar, fusha kërkohet vetëm kur përdoruesi redakton profilin.',
	'ROWS'						=> 'Rreshtat',

	'SAVE'							=> 'Ruajeni',
	'SECOND_OPTION'					=> 'Opsioni i dytë',
	'SHOW_NOVALUE_FIELD'			=> 'Shfaqeni fushën kur nuk është zgjedhur vlerë',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Përcakton nëse fusha shfaqet kur nuk është zgjedhur vlerë për fushat opsionale ose ende nuk është zgjedhur vlerë për fushat e detyrueshme.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Këtu mund të vendosni parametrat e parë bazë të fushës së re. Këto të dhëna nevojiten për hapin e dytë, ku caktoni opsionet e mbetura dhe e rregulloni më tej fushën.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Këtu mund të ndryshoni parametrat bazë të fushës. Opsionet përkatëse rillogariten në hapin e dytë.',
	'STEP_1_TITLE_CREATE'			=> 'Shtoni fushë profili',
	'STEP_1_TITLE_EDIT'				=> 'Redaktoni fushën e profilit',
	'STEP_2_EXPLAIN_CREATE'			=> 'Këtu mund të përcaktoni disa opsione të zakonshme që mund të dëshironi t’i rregulloni.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Këtu mund të ndryshoni disa opsione të zakonshme.<br /><strong>Ndryshimet në fushat e profilit nuk ndikojnë te vlerat ekzistuese të vendosura nga përdoruesit.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Opsionet specifike të llojit të profilit',
	'STEP_2_TITLE_EDIT'				=> 'Opsionet specifike të llojit të profilit',
	'STEP_3_EXPLAIN_CREATE'			=> 'Meqë keni instaluar më shumë se një gjuhë, duhet të plotësoni edhe elementet e mbetura gjuhësore. Përndryshe përdoret gjuha e parazgjedhur e kësaj fushe; elementet mund t’i plotësoni edhe më vonë.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Meqë keni instaluar më shumë se një gjuhë, mund të ndryshoni ose shtoni elementet e mbetura gjuhësore. Përndryshe përdoret gjuha e parazgjedhur e kësaj fushe.',
	'STEP_3_TITLE_CREATE'			=> 'Përkufizimet e mbetura gjuhësore',
	'STEP_3_TITLE_EDIT'				=> 'Përkufizimet gjuhësore',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Vendosni frazën që do të shfaqet si vlerë e parazgjedhur. Lëreni bosh nëse dëshironi që fillimisht të jetë bosh.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Vendosni tekstin që do të shfaqet si vlerë e parazgjedhur. Lëreni bosh nëse dëshironi që fillimisht të jetë bosh.',
	'TRANSLATE'						=> 'Përkthejeni',

	'USER_FIELD_NAME'	=> 'Emri/titulli i fushës që i paraqitet përdoruesit',

	'VISIBILITY_OPTION'				=> 'Opsionet e dukshmërisë',
));
