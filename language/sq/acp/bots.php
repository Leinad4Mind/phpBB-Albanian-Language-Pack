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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Menaxhoni robotët',
	'BOTS_EXPLAIN'		=> '“Robotët”, “merimangat” ose “zvarritësit” janë agjentë të automatizuar që përdoren më së shumti nga motorët e kërkimit për të përditësuar bazat e tyre të të dhënave. Meqë rrallë i përdorin siç duhet sesionet, mund të shtrembërojnë numrin e vizitorëve, të rrisin ngarkesën dhe ndonjëherë të mos i indeksojnë siç duhet faqet. Këtu mund të përcaktoni një lloj të posaçëm përdoruesi për t’i shmangur këto probleme.',
	'BOT_ACTIVATE'		=> 'Aktivizoni',
	'BOT_ACTIVE'		=> 'Roboti aktiv',
	'BOT_ADD'			=> 'Shtoni robot',
	'BOT_ADDED'			=> 'Roboti i ri u shtua me sukses.',
	'BOT_AGENT'			=> 'Përputhja e agjentit',
	'BOT_AGENT_EXPLAIN'	=> 'Vargu që përputhet me agjentin e shfletuesit të robotit; lejohen përputhjet e pjesshme.',
	'BOT_DEACTIVATE'	=> 'Çaktivizoni',
	'BOT_DELETED'		=> 'Roboti u fshi me sukses.',
	'BOT_EDIT'			=> 'Redaktoni robotët',
	'BOT_EDIT_EXPLAIN'	=> 'Këtu mund të shtoni ose të redaktoni një robot ekzistues. Mund të përcaktoni një varg agjenti dhe/ose një a më shumë adresa IP (ose interval adresash) për përputhje. Tregoni kujdes kur përcaktoni vargjet ose adresat. Mund të përcaktoni edhe stilin dhe gjuhën me të cilat roboti do ta shohë forumin. Kjo mund të ulë përdorimin e gjerësisë së brezit duke caktuar një stil të thjeshtë për robotët. Mos harroni të caktoni lejet e duhura për grupin e posaçëm të robotëve.',
	'BOT_GROUP'			=> 'Grupi i robotit',
	'BOT_GROUP_EXPLAIN'	=> 'Zgjidhni grupin ku bën pjesë ky robot.',
	'BOT_LANG'			=> 'Gjuha e robotit',
	'BOT_LANG_EXPLAIN'	=> 'Gjuha që i paraqitet robotit gjatë shfletimit.',
	'BOT_LAST_VISIT'	=> 'Vizita e fundit',
	'BOT_IP'			=> 'Adresa IP e robotit',
	'BOT_IP_EXPLAIN'	=> 'Lejohen përputhjet e pjesshme; ndajini adresat me presje.',
	'BOT_NAME'			=> 'Emri i robotit',
	'BOT_NAME_EXPLAIN'	=> 'Përdoret vetëm për informacionin tuaj.',
	'BOT_NAME_TAKEN'	=> 'Emri po përdoret tashmë në forum dhe nuk mund të përdoret për robotin.',
	'BOT_NEVER'			=> 'Kurrë',
	'BOT_STYLE'			=> 'Stili i robotit',
	'BOT_STYLE_EXPLAIN'	=> 'Stili i forumit që përdor roboti.',
	'BOT_UPDATED'		=> 'Roboti ekzistues u përditësua me sukses.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Agjenti i robotit që dhatë është i ngjashëm me atë që po përdorni. Ndryshojeni agjentin e këtij roboti.',
	'ERR_BOT_NO_IP'				=> 'Adresat IP që dhatë ishin të pavlefshme ose emri i hostit nuk mund të zgjidhej.',
	'ERR_BOT_NO_MATCHES'		=> 'Për këtë përputhje duhet të jepni të paktën një agjent ose një IP.',
	'ERR_BOT_NO_NAME'			=> 'Duhet të jepni emrin e robotit.',

	'NO_BOT'		=> 'Nuk u gjet robot me ID-në e përcaktuar.',
	'NO_BOT_GROUP'	=> 'Grupi i posaçëm i robotëve nuk u gjet.',
));
