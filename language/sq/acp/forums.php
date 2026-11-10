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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Mosha e postimit për krasitje automatike',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Numri i ditëve nga postimi i fundit pas të cilave tema hiqet.',
	'AUTO_PRUNE_FREQ'			=> 'Shpeshtësia e krasitjes automatike',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Koha në ditë ndërmjet krasitjeve.',
	'AUTO_PRUNE_VIEWED'			=> 'Mosha e shikimit për krasitje automatike',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Numri i ditëve nga shikimi i temës pas të cilave ajo hiqet.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Shpeshtësia e krasitjes së temave hije',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Mosha e temave hije për krasitje',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Numri i ditëve pas të cilave hiqet tema hije.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Koha në ditë ndërmjet krasitjeve.',

	'CONTINUE'						=> 'Vazhdoni',
	'COPY_PERMISSIONS'				=> 'Kopjoni lejet nga',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Për ta lehtësuar konfigurimin, mund të kopjoni lejet e një forumi ekzistues.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Pasi të krijohet, forumi do të ketë lejet e forumit të zgjedhur. Nëse nuk zgjidhet forum, ai nuk do të duket derisa t’i caktohen lejet.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Nëse zgjidhni të kopjoni lejet, ky forum do të ketë të njëjtat leje si forumi që zgjidhni këtu. Kjo do t’i mbishkruajë të gjitha lejet e vendosura më parë për këtë forum me lejet e forumit të zgjedhur. Nëse nuk zgjidhet asnjë forum, lejet aktuale do të ruhen.',
	'COPY_TO_ACL'					=> 'Përndryshe mund të %scaktoni leje të reja%s për këtë forum.',
	'CREATE_FORUM'					=> 'Krijoni forum të ri',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Fshini përmbajtjen ose zhvendoseni në forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Fshini nënforumet ose zhvendosini në forum',
	'DEFAULT_STYLE'						=> 'Stili i parazgjedhur',
	'DELETE_ALL_POSTS'					=> 'Fshini postimet',
	'DELETE_SUBFORUMS'					=> 'Fshini nënforumet dhe postimet',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktivizoni temat aktive',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Nëse vendoset po, temat aktive në nënforumet e zgjedhura shfaqen nën këtë kategori.',

	'EDIT_FORUM'					=> 'Redaktoni forumin',
	'ENABLE_INDEXING'				=> 'Aktivizoni indeksimin e kërkimit',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Nëse vendoset po, postimet në këtë forum indeksohen për kërkim.',
	'ENABLE_POST_REVIEW'			=> 'Aktivizoni rishikimin e postimit',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Lejon përdoruesin ta rishikojë postimin nëse tema mori postime të reja gjatë shkrimit. Duhet çaktivizuar në forumet e bisedës.',
	'ENABLE_QUICK_REPLY'			=> 'Aktivizoni përgjigjen e shpejtë',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Aktivizon përgjigjen e shpejtë në këtë forum. Nuk zbatohet nëse është çaktivizuar në të gjithë forumin dhe shfaqet vetëm për përdoruesit me leje postimi.',
	'ENABLE_RECENT'					=> 'Shfaqni temat aktive',
	'ENABLE_RECENT_EXPLAIN'			=> 'Nëse vendoset po, temat e këtij forumi shfaqen në listën e temave aktive.',
	'ENABLE_TOPIC_ICONS'			=> 'Aktivizoni ikonat e temave',

	'FORUM_ADMIN'						=> 'Administrimi i forumeve',
	'FORUM_ADMIN_EXPLAIN'				=> 'Në phpBB3 gjithçka bazohet te forumet; kategoria është vetëm një lloj i posaçëm forumi. Çdo forum mund të ketë nënforume të pakufizuara dhe mund të përcaktoni nëse pranojnë postime. Këtu mund të shtoni, redaktoni, fshini, kyçni, shkyçni dhe kontrolloni forumet, si edhe t’i risinkronizoni. <strong>Forumet e reja shfaqen vetëm pasi t’u kopjoni ose caktoni lejet e duhura.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Aktivizoni krasitjen automatike',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Krasit temat e forumit sipas shpeshtësisë dhe moshës më poshtë.',
	'FORUM_CREATED'						=> 'Forumi u krijua me sukses.',
	'FORUM_DATA_NEGATIVE'				=> 'Parametrat e krasitjes nuk mund të jenë negativë.',
	'FORUM_DESC_TOO_LONG'				=> 'Përshkrimi është shumë i gjatë; duhet të ketë më pak se 4000 shenja.',
	'FORUM_DELETE'						=> 'Fshini forumin',
	'FORUM_DELETE_EXPLAIN'				=> 'Formulari më poshtë ju lejon ta fshini forumin. Nëse pranon postime, mund të vendosni ku të zhvendosen temat ose nënforumet.',
	'FORUM_DELETED'						=> 'Forumi u fshi me sukses.',
	'FORUM_DESC'						=> 'Përshkrimi',
	'FORUM_DESC_EXPLAIN'				=> 'Çdo shenjim HTML i vendosur këtu shfaqet siç është. Përshkrimi nuk përdoret kur lloji është kategori.',
	'FORUM_EDIT_EXPLAIN'				=> 'Formulari ju lejon ta personalizoni forumin. Kontrollet e moderimit dhe numërimit të postimeve caktohen përmes lejeve për çdo përdorues ose grup.',
	'FORUM_IMAGE'						=> 'Figura e forumit',
	'FORUM_IMAGE_EXPLAIN'				=> 'Vendndodhja e figurës shtesë, relative ndaj dosjes rrënjë të phpBB-së.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Figura e përcaktuar e forumit nuk ekziston',
	'FORUM_LINK_EXPLAIN'				=> 'URL-ja e plotë (duke përfshirë protokollin, p.sh. <samp>http://</samp>) e destinacionit ku do të dërgohet përdoruesi kur të klikojë këtë forum, p.sh. <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Gjurmoni ridrejtimet e lidhjes',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Regjistron sa herë është klikuar lidhja e forumit.',
	'FORUM_NAME'						=> 'Emri i forumit',
	'FORUM_NAME_EMPTY'					=> 'Duhet të vendosni emrin e forumit.',
	'FORUM_NAME_EMOJI'					=> 'Emri i forumit është i pavlefshëm.<br>Përmban shenjat e pambështetura:<br>%s',
	'FORUM_PARENT'						=> 'Forumi prind',
	'FORUM_PASSWORD'					=> 'Fjalëkalimi i forumit',
	'FORUM_PASSWORD_CONFIRM'			=> 'Konfirmoni fjalëkalimin',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Nevojitet vetëm nëse vendoset fjalëkalim.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Përcakton fjalëkalimin e forumit; parapëlqeni sistemin e lejeve.',
	'FORUM_PASSWORD_UNSET'				=> 'Hiqni fjalëkalimin',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Zgjidheni për ta hequr fjalëkalimin e forumit.',
	'FORUM_PASSWORD_OLD'				=> 'Fjalëkalimi përdor metodë të vjetër hashimi dhe duhet ndryshuar.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Fjalëkalimet nuk përputhen.',
	'FORUM_PRUNE_SETTINGS'				=> 'Cilësimet e krasitjes së forumit',
	'FORUM_PRUNE_SHADOW'				=> 'Aktivizoni krasitjen automatike të temave hije',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Krasit temat hije sipas shpeshtësisë dhe moshës më poshtë.',
	'FORUM_RESYNCED'					=> 'Forumi “%s” u risinkronizua me sukses',
	'FORUM_RULES_EXPLAIN'				=> 'Rregullat shfaqen në çdo faqe brenda forumit.',
	'FORUM_RULES_LINK'					=> 'Lidhja e rregullave të forumit',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Vendosni URL-në e faqes/postimit me rregullat. Kjo mbishkruan tekstin e rregullave.',
	'FORUM_RULES_PREVIEW'				=> 'Parapamja e rregullave',
	'FORUM_RULES_TOO_LONG'				=> 'Rregullat duhet të kenë më pak se 4000 shenja.',
	'FORUM_SETTINGS'					=> 'Cilësimet e forumit',
	'FORUM_STATUS'						=> 'Gjendja e forumit',
	'FORUM_STYLE'						=> 'Stili i forumit',
	'FORUM_TOPICS_PAGE'					=> 'Tema për faqe',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Nëse nuk është zero, mbishkruan cilësimin e parazgjedhur.',
	'FORUM_TYPE'						=> 'Lloji i forumit',
	'FORUM_UPDATED'						=> 'Të dhënat e forumit u përditësuan me sukses.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Po përpiqeni ta ktheni në lidhje një forum me nënforume. Zhvendosini më parë të gjitha nënforumet, sepse pas kthimit në lidhje nuk do të mund t’i shihni më.',

	'GENERAL_FORUM_SETTINGS'	=> 'Cilësimet e përgjithshme të forumit',

	'LINK'						=> 'Lidhje',
	'LIMIT_SUBFORUMS'			=> 'Kufizojeni legjendën te nënforumet e drejtpërdrejta',
	'LIMIT_SUBFORUMS_EXPLAIN'	=> 'Shfaq vetëm nënforumet që janë fëmijë të drejtpërdrejtë. Çaktivizimi shfaq të gjitha nënforumet me opsionin e listimit aktiv, pavarësisht thellësisë.',
	'LIST_INDEX'				=> 'Listojeni nënforumin në legjendën e prindit',
	'LIST_INDEX_EXPLAIN'		=> 'E shfaq këtë forum në indeks dhe vende të tjera si lidhje në legjendën e prindit, nëse listimi i nënforumeve është aktiv.',
	'LIST_SUBFORUMS'			=> 'Listojini nënforumet në legjendë',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'I shfaq nënforumet në indeks dhe vende të tjera si lidhje në legjendë, nëse opsioni i tyre i listimit te prindi është aktiv.',
	'LOCKED'					=> 'I kyçur',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Forumi i zgjedhur nuk pranon postime. Zgjidhni një forum që pranon postime.',
	'MOVE_POSTS_TO'					=> 'Zhvendosini postimet te',
	'MOVE_SUBFORUMS_TO'				=> 'Zhvendosini nënforumet te',

	'NO_DESTINATION_FORUM'			=> 'Nuk keni përcaktuar forum për zhvendosjen e përmbajtjes.',
	'NO_FORUM_ACTION'				=> 'Nuk u përcaktua veprimi për përmbajtjen e forumit.',
	'NO_PARENT'						=> 'Pa prind',
	'NO_PERMISSIONS'				=> 'Mos kopjoni leje',
	'NO_PERMISSION_FORUM_ADD'		=> 'Nuk keni lejet e nevojshme për të shtuar forume.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Nuk keni lejet e nevojshme për të fshirë forume.',

	'PARENT_IS_LINK_FORUM'		=> 'Prindi i përcaktuar është lidhje dhe nuk mund të mbajë forume të tjera. Përcaktoni kategori ose forum si prind.',
	'PARENT_NOT_EXIST'			=> 'Prindi nuk ekziston.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Krasitni njoftimet',
	'PRUNE_STICKY'				=> 'Krasitni temat ngjitëse',
	'PRUNE_OLD_POLLS'			=> 'Krasitni sondazhet e vjetra',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Heq temat me sondazhe pa vota për aq ditë sa mosha e postimit.',

	'REDIRECT_ACL'	=> 'Tani mund të %scaktoni lejet%s për këtë forum.',

	'SYNC_IN_PROGRESS'			=> 'Sinkronizimi i forumit',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Po risinkronizohet intervali i temave %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategori',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Lidhje',

	'UNLOCKED'			=> 'I shkyçur',
));
