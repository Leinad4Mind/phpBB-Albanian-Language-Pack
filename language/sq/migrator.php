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
	'CONFIG_NOT_EXIST'					=> 'Cilësimi i konfigurimit "%s" papritur nuk ekziston.',

	'GROUP_NOT_EXIST'					=> 'Grupi "%s" papritur nuk ekziston.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Aplikoni varësitë e %s.',
	'MIGRATION_DATA_DONE'				=> 'Të dhënat e instaluara: %1$s; Koha: %2$.2f sekonda',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Instalimi i të dhënave: %1$s; Koha: %2$.2f sekonda',
	'MIGRATION_DATA_RUNNING'			=> 'Instalimi i të dhënave: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migrimi i instaluar tashmë efektivisht (i anashkaluar): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Diçka shkoi keq gjatë kërkesës dhe u bë një përjashtim. Ndryshimet e bëra përpara se të ndodhte gabimi u kthyen në maksimumin e aftësive tona, por ju duhet të kontrolloni tabelën për gabime.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migrimi "%1$s" nuk përmbushet, mungon migrimi "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'Migrimi "%s" nuk është i instaluar.',
	'MIGRATION_NOT_VALID'				=> '%s nuk është një migrim i vlefshëm.',
	'MIGRATION_SCHEMA_DONE'				=> 'Skema e instaluar: %1$s; Koha: %2$.2f sekonda',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Instalimi i skemës: %1$s; Koha: %2$.2f sekonda',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Instalimi i skemës: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Të dhënat e kthyera: %1$s; Koha: %2$.2f sekonda',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Kthimi i të dhënave: %1$s; Koha: %2$.2f sekonda',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Kthimi i të dhënave: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Skema e rikthyer: %1$s; Koha: %2$.2f sekonda',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Kthimi i skemës: %1$s; Koha: %2$.2f sekonda',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Kthimi i skemës: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Një migrim është i pavlefshëm. Një ndihmës i deklaratës nëse i mungon një kusht.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Një migrim është i pavlefshëm. Ndihmës së deklaratës nëse i mungon një thirrje e vlefshme për një hap migrimi.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Një migrim është i pavlefshëm. Një funksion i personalizuar i thirrshëm nuk mund të thirrej.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Një migrim është i pavlefshëm. U has në një lloj mjeti të panjohur migrimi.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Një migrim është i pavlefshëm. U ndesh një mjet migrimi i papërcaktuar.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Një migrim është i pavlefshëm. U has një metodë e papërcaktuar e mjetit të migrimit.',

	'MODULE_ERROR'						=> 'Ndodhi një gabim gjatë krijimit të një moduli: %s',
	'MODULE_EXISTS'						=> 'Një modul ekziston tashmë: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Ekzistojnë tashmë disa module me emrin e dhënë të modulit prind: %s. Provoni të përdorni tastet para/pas për të qartësuar vendosjen e modulit.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Mungon një skedar informacioni i kërkuar i modulit: %2$s',
	'MODULE_NOT_EXIST'					=> 'Një modul i kërkuar nuk ekziston: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Nuk mund të përcaktohet identifikuesi i modulit prind: %s',
	'PERMISSION_NOT_EXIST'				=> 'Cilësimi i lejes "%s" papritur nuk ekziston.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Roli i lejes i caktuar grupit "%1$s" papritur nuk ekziston. ID-ja e rolit: "%2$s"',
	'ROLE_NOT_EXIST'					=> 'Roli i lejes "%s" papritur nuk ekziston.',
));
