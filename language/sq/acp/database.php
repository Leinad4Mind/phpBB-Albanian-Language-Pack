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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Këtu mund të krijoni kopje rezervë të të gjitha të dhënave që lidhen me phpBB-në. Arkivi i krijuar do të ruhet në dosjen <samp>store/</samp>. Në varësi të konfigurimit të serverit, skedarin mund ta ngjeshni në disa formate.',
	'ACP_RESTORE_EXPLAIN'	=> 'Kjo do të kryejë rikthimin e plotë të të gjitha tabelave të phpBB-së nga një skedar i ruajtur. Nëse serveri e mbështet, mund të përdorni një skedar teksti të ngjeshur me gzip ose bzip2, i cili do të çngjeshet automatikisht. <strong>PARALAJMËRIM</strong> Kjo do të mbishkruajë të gjitha të dhënat ekzistuese. Rikthimi mund të zgjasë; mos u largoni nga kjo faqe deri sa të përfundojë. Kopjet rezervë ruhen në dosjen <samp>store/</samp> dhe supozohet se janë krijuar nga funksioni i kopjeve rezervë të phpBB-së. Rikthimi i kopjeve që nuk janë krijuar nga sistemi i integruar mund të funksionojë ose jo.',

	'BACKUP_DELETE'			=> 'Skedari i kopjes rezervë u fshi me sukses.',
	'BACKUP_INVALID'		=> 'Skedari i zgjedhur për kopje rezervë është i pavlefshëm.',
	'BACKUP_NOT_SUPPORTED'	=> 'Kopja rezervë e zgjedhur nuk mbështetet',
	'BACKUP_OPTIONS'		=> 'Opsionet e kopjes rezervë',
	'BACKUP_SUCCESS'		=> 'Skedari i kopjes rezervë u krijua me sukses.',
	'BACKUP_TYPE'			=> 'Lloji i kopjes rezervë',

	'DATABASE'			=> 'Mjete të bazës së të dhënave',
	'DATA_ONLY'			=> 'Vetëm të dhënat',
	'DELETE_BACKUP'		=> 'Fshini kopjen rezervë',
	'DELETE_SELECTED_BACKUP'	=> 'Jeni të sigurt se dëshironi ta fshini kopjen rezervë të zgjedhur?',
	'DESELECT_ALL'		=> 'Çzgjidhini të gjitha',
	'DOWNLOAD_BACKUP'	=> 'Shkarkoni kopjen rezervë',

	'FILE_TYPE'			=> 'Lloji i skedarit',
	'FILE_WRITE_FAIL'	=> 'Skedari nuk mund të shkruhej në dosjen e ruajtjes.',
	'FULL_BACKUP'		=> 'E plotë',

	'RESTORE_FAILURE'		=> 'Skedari i kopjes rezervë mund të jetë i dëmtuar.',
	'RESTORE_OPTIONS'		=> 'Opsionet e rikthimit',
	'RESTORE_SELECTED_BACKUP'	=> 'Jeni të sigurt se dëshironi ta riktheni kopjen rezervë të zgjedhur?',
	'RESTORE_SUCCESS'		=> 'Baza e të dhënave u rikthye me sukses.<br /><br />Forumi duhet të jetë kthyer në gjendjen që kishte kur u krijua kopja rezervë.',

	'SELECT_ALL'			=> 'Zgjidhini të gjitha',
	'SELECT_FILE'			=> 'Zgjidhni një skedar',
	'START_BACKUP'			=> 'Filloni kopjen rezervë',
	'START_RESTORE'			=> 'Filloni rikthimin',
	'STORE_AND_DOWNLOAD'	=> 'Ruajeni dhe shkarkojeni',
	'STORE_LOCAL'			=> 'Ruajeni skedarin lokalisht',

	'TABLE_SELECT'		=> 'Përzgjedhja e tabelave',
	'TABLE_SELECT_ERROR'=> 'Duhet të zgjidhni të paktën një tabelë.',
));
