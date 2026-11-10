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
	'CLI_APCU_CACHE_NOTICE'				=> 'Cache APCu duhet të pastrohet përmes Panelit të Kontrollit të Administratës.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Vendoseni këtë opsion nëse opsioni i konfigurimit ndryshon shumë shpesh për t\'u ruajtur në mënyrë efikase në memorie.',
	'CLI_CONFIG_CURRENT'				=> 'Vlera aktuale e konfigurimit, përdorni 0 dhe 1 për të specifikuar vlerat boolean',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfigurimi %s u fshi me sukses.',
	'CLI_CONFIG_NEW'					=> 'Vlera e re e konfigurimit, përdorni 0 dhe 1 për të specifikuar vlerat boolean',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfigurimi %s nuk ekziston',
	'CLI_CONFIG_OPTION_NAME'			=> 'Emri i opsionit të konfigurimit',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Vendoseni këtë opsion nëse vlera duhet të printohet pa një rresht të ri në fund.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Shuma në rritje me',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Konfigurimi %s u rrit me sukses',
	'CLI_CONFIG_SET_FAILURE'			=> 'Konfigurimi %s nuk mund të vendosej',
	'CLI_CONFIG_SET_SUCCESS'			=> 'U vendos me sukses konfigurimin %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Printon një listë të punëve të gatshme dhe të papërgatitura të cron-it.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Kryen të gjitha detyrat e gatshme të cron.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Emri i detyrës që do të ekzekutohet',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Listoni të gjitha migrimet e instaluara dhe të disponueshme.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Përditëson bazën e të dhënave duke aplikuar migrime.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Rikthe një migrim.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Fshin një opsion konfigurimi',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Çaktivizon shtesën e specifikuar.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Aktivizon zgjerimin e specifikuar.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Gjen migrimet që nuk varen.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Riparon strukturën e pemës së forumeve dhe moduleve.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Merr vlerën e një opsioni konfigurimi',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Rrit vlerën e plotë të një opsioni konfigurimi',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Liston të gjitha shtesat në bazën e të dhënave dhe në sistemin e skedarëve.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Emri i mjedisit.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Ekzekutoni në modalitetin e sigurt (pa shtesa).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Lëshoni guaskën.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Pastron shtesën e specifikuar.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Liston llojet e tekstit që mund të riparohen.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Riparues të disponueshëm:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Riparon tekstin e ruajtur me shërbimet aktuale text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Lloji i tekstit për riparim. Lëreni bosh për të riparuar gjithçka.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Mos ruani asnjë ndryshim; thjesht printoni se çfarë do të ndodhte',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'Riparësoni të gjitha kodet BBC pa përjashtim. Vini re se çdo kod BBC i çaktivizuar më parë do të ripërpunohet, aktivizohet dhe jepet plotësisht.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'ID-ja më e ulët e regjistrimit për t\'u përpunuar',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'ID-ja më e lartë e rekordit për t\'u përpunuar',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Numri i përafërt i regjistrimeve për t\'u përpunuar në të njëjtën kohë',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Filloni të riparoni aty ku u ndal ekzekutimi i fundit',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Vendos vlerën e një opsioni konfigurimi vetëm nëse e vjetra përputhet me vlerën aktuale',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Vendos vlerën e një opsioni konfigurimi',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Fshini të gjitha miniaturat ekzistuese.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Gjeneroni të gjitha miniaturat që mungojnë.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Rikrijo të gjitha miniaturat.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Kontrolloni nëse bordi është i përditësuar.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Emri i shtesës për t\'u kontrolluar (nëse të gjitha, kontrollon të gjitha shtesat)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Ekzekutoni komandën e kontrollit me cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Ekzekutoni komandën duke zgjedhur për të kontrolluar vetëm versionet e qëndrueshme ose të paqëndrueshme.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Përditëson hash-et e fjalëkalimeve të vjetruara për t\'u hashuar me bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" duhet të vendoset në "të qëndrueshme" ose "të paqëndrueshme".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktivizoni (ose çaktivizoni) një llogari përdoruesi.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Emri i përdoruesit të llogarisë për të aktivizuar.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Çaktivizoni llogarinë e përdoruesit',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Përdoruesi është tashmë aktiv.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Përdoruesi është tashmë joaktiv.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Shto një përdorues të ri.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Emri i përdoruesit të përdoruesit të ri',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Fjalëkalimi i përdoruesit të ri',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Adresa e emailit të përdoruesit të ri',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Dërgo emailin e aktivizimit të llogarisë te përdoruesi i ri (nuk është dërguar si parazgjedhje)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Fshi një llogari përdoruesi.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Emri i përdoruesit për të fshirë',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'Fshi llogaritë e përdoruesve me ID.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'ID-të e përdoruesve të përdoruesve për t\'u fshirë',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Fshini të gjitha postimet nga përdoruesi. Pa këtë opsion, postimet e përdoruesit do të mbahen.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Ripastroni emrat e përdoruesve.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Shtesa %s nuk mund të çaktivizohej',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Shtesa %s u çaktivizua me sukses',
	'CLI_EXTENSION_DISABLED'			=> 'Shtesa %s nuk është e aktivizuar',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Shtesa %s nuk mund të aktivizohej',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Shtesa %s u aktivizua me sukses',
	'CLI_EXTENSION_ENABLED'				=> 'Shtesa %s është aktivizuar tashmë',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Shtesa %s nuk ekziston',
	'CLI_EXTENSION_NAME'				=> 'Emri i zgjerimit',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Shtesa %s nuk mund të fshihej',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Shtesa %s u spastrua me sukses',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Shtesa %s nuk mund të përditësohej',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Shtesa %s u përditësua me sukses',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Nuk u gjet asnjë shtesë.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Shtesa %s nuk është e aktivizuar.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Në dispozicion',
	'CLI_EXTENSIONS_DISABLED'			=> 'I paaftë',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktivizuar',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'U riparua me sukses struktura e pemës së forumeve dhe moduleve.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Përditësuar me sukses haset e fjalëkalimeve të vjetruara për të bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Emri i migrimit, duke përfshirë hapësirën e emrave (përdorni të pjerrëta përpara në vend të vijës së prapme për të shmangur problemet).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Migrimet e disponueshme',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Migrimet e instaluara',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Shfaq vetëm migrimet e disponueshme',
	'CLI_MIGRATIONS_EMPTY'                  => 'Nuk ka migrime.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Riparimi i %1$s (vargu %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Po riparon %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Riparimi përfundoi me sukses',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) u fshi.',
	'CLI_THUMBNAIL_DELETING'	=> 'Fshirja e miniaturave',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) u anashkalua.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) u krijua.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Gjenerimi i miniaturave',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Të gjitha miniaturat janë rigjeneruar.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Të gjitha miniaturat janë fshirë.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Nuk ka miniaturë për të krijuar.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Nuk ka miniaturë për t\'u fshirë.',

	'CLI_USER_ADD_SUCCESS'			=> 'Përdoruesi %s u shtua me sukses.',
	'CLI_USER_DELETE_CONFIRM'		=> 'Jeni i sigurt që dëshironi të fshini \'%s\'? [v/J]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Jeni i sigurt që dëshironi të fshini ID-të e përdoruesve "%s"? [v/J]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'ID-të e përdoruesve u fshinë me sukses.',
	'CLI_USER_DELETE_ID_START'		=> 'Fshirja e përdoruesve me ID',
	'CLI_USER_DELETE_NONE'			=> 'Asnjë përdorues nuk u fshi nga ID-ja e përdoruesit.',
	'CLI_USER_RECLEAN_START'		=> 'Ri-pastrimi i emrave të përdoruesve',
	'CLI_USER_RECLEAN_DONE'			=> [
		0	=> 'Ripastrimi i plotë. Nuk nevojiten emra përdoruesi për t\'u pastruar.',
		1	=> 'Ripastrimi i plotë. Emri i përdoruesit %d u pastrua.',
		2	=> 'Ripastrimi i plotë. Emrat e përdoruesve të %d u pastruan.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . 'Opsionale mund të specifikoni një emër të detyrës cron për të ekzekutuar vetëm detyrën e specifikuar cron.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktivizoni një llogari përdoruesi ose çaktivizoni një llogari duke përdorur opsionin <info>--deactivate</info>.
Për të dërguar opsionalisht një email aktivizimi te përdoruesi, përdorni opsionin <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Komanda <info>%command.name%</info> shton një përdorues të ri:
Nëse kjo komandë ekzekutohet pa opsione, do t\'ju kërkohet t\'i futni ato.
Për t\'i dërguar opsionalisht një email përdoruesit të ri, përdorni opsionin <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Ripastrimi i emrave të përdoruesve do të kontrollojë të gjithë emrat e përdoruesve të ruajtur dhe do të sigurojë që versionet e pastra të ruhen gjithashtu. Emrat e përdoruesve të pastruar janë një formë e pandjeshme, NFC e normalizuar dhe e transformuar në ASCII.',
));
