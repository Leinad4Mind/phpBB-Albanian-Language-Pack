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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Këtu mund të menaxhoni indekset e motorit të kërkimit. Meqë zakonisht përdorni vetëm një motor, fshini indekset që nuk përdorni. Pas ndryshimit të disa cilësimeve (p.sh. numrit minimal/maksimal të shenjave), mund të jetë e dobishme ta rikrijoni indeksin që t’i pasqyrojë ndryshimet.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Këtu përcaktoni motorin që përdoret për indeksimin e postimeve dhe kërkimet. Mund të caktoni opsione që ndikojnë në përpunimin e nevojshëm. Disa cilësime janë të përbashkëta për të gjithë motorët.',

	'COMMON_WORD_THRESHOLD'					=> 'Pragu i fjalëve të zakonshme',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Fjalët që gjenden në një përqindje më të lartë të postimeve konsiderohen të zakonshme dhe shpërfillen në kërkime. Vendoseni 0 për çaktivizim. Ka efekt vetëm mbi 100 postime. Për t’i rivlerësuar fjalët aktuale, rikrijoni indeksin.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Jeni të sigurt se dëshironi të kaloni në një motor tjetër kërkimi? Pas ndryshimit duhet të krijoni indeks për motorin e ri. Nëse nuk planifikoni kthim, mund ta fshini indeksin e vjetër për të liruar burime.',
	'CONTINUE_DELETING_INDEX'				=> 'Vazhdoni heqjen e mëparshme të indeksit',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Ka nisur heqja e indeksit. Për të hyrë në faqen e indeksit duhet ta përfundoni ose anuloni.',
	'CONTINUE_INDEXING'						=> 'Vazhdoni indeksimin e mëparshëm',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Ka nisur indeksimi. Për të hyrë në faqen e indeksit duhet ta përfundoni ose anuloni.',
	'CREATE_INDEX'							=> 'Krijoni indeksin',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> 'Numri i parazgjedhur i shenjave të kthyera',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> 'Numri i parazgjedhur i shenjave që kthehen në kërkim. Vlera 0 kthen të gjithë postimin.',
	'DELETE_INDEX'							=> 'Fshini indeksin',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Indeksi po fshihet…',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Motori i kërkimit po pastron indeksin. Kjo mund të zgjasë disa minuta.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'Motori me tekst të plotë MySQL mund të përdoret vetëm me MySQL 4 ose më të ri.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Indekset me tekst të plotë MySQL përdoren vetëm me tabela MyISAM ose InnoDB. Për InnoDB kërkohet MySQL 5.6.8 ose më i ri.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Numri gjithsej i postimeve të indeksuara',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Fjalët me të paktën kaq shenja indeksohen për kërkim. Ky cilësim ndryshohet vetëm përmes konfigurimit të MySQL-së.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Fjalët me jo më shumë se kaq shenja indeksohen për kërkim. Ky cilësim ndryshohet vetëm përmes konfigurimit të MySQL-së.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'Motori me tekst të plotë PostgreSQL mund të përdoret vetëm me PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Numri gjithsej i postimeve të indeksuara',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'Versioni i PostgreSQL-së',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Profili i konfigurimit të kërkimit tekstor:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Gjatësia minimale e fjalëve kyçe',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Gjatësia maksimale e fjalëve kyçe',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Ky motor kërkimi kërkon PostgreSQL 8.3 ose më të ri.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Profili i konfigurimit që përdoret për të përcaktuar analizuesin dhe fjalorin.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Fjalët me të paktën kaq shenja përfshihen në pyetjen e bazës së të dhënave.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Fjalët me jo më shumë se kaq shenja përfshihen në pyetjen e bazës së të dhënave.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Konfiguroni cilësimet e mëposhtme për të krijuar skedarin e konfigurimit të Sphinx-it',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Shtegu i dosjes së të dhënave',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Përdoret për indekset dhe regjistrat. Krijojeni jashtë dosjeve të qasshme nga uebi dhe përfundojeni me pjerrtore.',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Numri i postimeve në indeksin delta që përditësohet shpesh',
	'FULLTEXT_SPHINX_HOST'					=> 'Hosti i demonit të kërkimit Sphinx',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Hosti ku dëgjon demoni Sphinx (searchd). Lëreni bosh për localhost-in e parazgjedhur.',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Kufiri i kujtesës së indeksuesit',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Ky numër duhet të jetë gjithmonë më i ulët se RAM-i i disponueshëm. Problemet periodike të performancës mund të vijnë nga përdorimi i tepërt i burimeve; ulja e kujtesës së indeksuesit mund të ndihmojë.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Numri i postimeve në indeksin kryesor',
	'FULLTEXT_SPHINX_PORT'					=> 'Porta e demonit të kërkimit Sphinx',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Porta ku dëgjon demoni Sphinx (searchd). Lëreni bosh për portën e parazgjedhur 9312 të API-së Sphinx.',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Kërkimi Sphinx për phpBB mbështet vetëm MySQL dhe PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Skedari i konfigurimit të Sphinx-it',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Përmbajtja e krijuar duhet ngjitur në sphinx.conf që përdor demoni Sphinx. Zëvendësoni [dbuser] dhe [dbpassword] me kredencialet e bazës së të dhënave.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Shtegu i dosjes së të dhënave Sphinx nuk është përcaktuar. Përcaktojeni dhe dorëzojeni për të krijuar skedarin.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Cilësimet e përgjithshme të kërkimit',
	'GO_TO_SEARCH_INDEX'					=> 'Shkoni te faqja e indeksit të kërkimit',

	'INDEX_STATS'							=> 'Statistikat e indeksit',
	'INDEXING_IN_PROGRESS'					=> 'Indeksimi në vazhdim…',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Motori po indekson të gjitha postimet. Në varësi të madhësisë së forumit, kjo mund të zgjasë nga disa minuta deri në disa orë.',

	'LIMIT_SEARCH_LOAD'						=> 'Kufiri i ngarkesës së sistemit për kërkimin',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Nëse ngarkesa njëminutëshe e sistemit e tejkalon këtë vlerë, faqja e kërkimit çaktivizohet. 1.0 barazohet afërsisht me 100% të një procesori. Funksionon vetëm në serverë UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Numri maksimal i shenjave të indeksuara',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Fjalët me jo më shumë se kaq shenja do të indeksohen.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Numri maksimal i fjalëve kyçe',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Numri maksimal i fjalëve që përdoruesi mund të kërkojë. Vlera 0 lejon numër të pakufizuar.',
	'MIN_SEARCH_CHARS'						=> 'Numri minimal i shenjave të indeksuara',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Fjalët me të paktën kaq shenja do të indeksohen.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Numri minimal i shenjave të emrit të autorit',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Në kërkimin e autorit me shenjë universale duhet të vendosen të paktën kaq shenja. Nëse emri është më i shkurtër, mund të kërkoni postimet duke vendosur emrin e plotë.',

	'PROGRESS_BAR'							=> 'Shiriti i përparimit',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervali i kërkimeve të mysafirëve',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Numri i sekondave që mysafirët duhet të presin ndërmjet kërkimeve. Nëse një mysafir kërkon, të gjithë të tjerët presin deri në përfundimin e intervalit.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> 'Të gjitha postimet deri te ID-ja %2$d u indeksuan; %1$d postim prej tyre në këtë hap.',
		2	=> 'Të gjitha postimet deri te ID-ja %2$d u indeksuan; %1$d prej tyre në këtë hap.',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> 'Shpejtësia aktuale e indeksimit është rreth %1$.1f postim në sekondë.',
		2	=> 'Shpejtësia aktuale e indeksimit është rreth %1$.1f postime në sekondë.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> 'Të gjitha postimet deri te ID-ja %2$d u hoqën nga indeksi; %1$d postim prej tyre në këtë hap.',
		2	=> 'Të gjitha postimet deri te ID-ja %2$d u hoqën nga indeksi; %1$d prej tyre në këtë hap.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		1	=> 'Shpejtësia aktuale e fshirjes është rreth %1$.1f postim në sekondë.',
		2	=> 'Shpejtësia aktuale e fshirjes është rreth %1$.1f postime në sekondë.',
	),
	'SEARCH_INDEX_CREATED'					=> 'Të gjitha postimet në bazën e forumit u indeksuan me sukses.',
	'SEARCH_INDEX_PROGRESS'					=> 'Përfunduar: %1$d | Në pritje: %2$d | Gjithsej: %3$d',
	'SEARCH_INDEX_REMOVED'					=> 'Indeksi i kërkimit për këtë motor u fshi me sukses.',
	'SEARCH_INTERVAL'						=> 'Intervali i kërkimeve të përdoruesve',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Numri i sekondave që përdoruesit presin ndërmjet kërkimeve. Kontrollohet veçmas për secilin përdorues.',
	'SEARCH_STORE_RESULTS'					=> 'Kohëzgjatja e memories së rezultateve',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Rezultatet në memorie skadojnë pas kësaj kohe në sekonda. Vendoseni 0 për çaktivizim.',
	'SEARCH_TYPE'							=> 'Motori i kërkimit',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB ju lejon të zgjidhni motorin për kërkimin në përmbajtjen e postimeve. Si parazgjedhje përdoret kërkimi me tekst të plotë i phpBB-së.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Motori i kërkimit u ndryshua. Për ta përdorur motorin e ri, sigurohuni se ekziston indeks për të.',

	'TOTAL_WORDS'							=> 'Numri gjithsej i fjalëve të indeksuara',
	'TOTAL_MATCHES'							=> 'Numri gjithsej i lidhjeve fjalë-postim të indeksuara',

	'YES_SEARCH'							=> 'Aktivizoni funksionet e kërkimit',
	'YES_SEARCH_EXPLAIN'					=> 'Aktivizon kërkimin për përdoruesit, përfshirë kërkimin e anëtarëve.',
	'YES_SEARCH_UPDATE'						=> 'Aktivizoni përditësimin e tekstit të plotë',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Përditëson indekset gjatë postimit; shpërfillet nëse kërkimi është çaktivizuar.',
));
