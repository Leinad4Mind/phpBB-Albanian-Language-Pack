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
	$lang = [];
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

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'sq',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Zgjidhja që dhatë ishte e pasaktë',
	'RECAPTCHA_NOSCRIPT'				=> 'Ju lutemi aktivizoni JavaScript në shfletuesin tuaj për të ngarkuar sfidën.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Për të përdorur reCaptcha, duhet të krijoni një llogari në <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'Ky CAPTCHA është në të vërtetë i padukshëm. Për të verifikuar që funksionon, një ikonë e vogël duhet të shfaqet në këndin e poshtëm djathtas të kësaj faqeje.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Ju keni tejkaluar numrin maksimal të përpjekjeve për hyrje të lejuara.<br>Përveç emrit tuaj të përdoruesit dhe fjalëkalimit, reCAPTCHA v3 e padukshme do të përdoret për të vërtetuar seancën tuaj.',

	'RECAPTCHA_PUBLIC'				=> 'Çelësi i faqes',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Çelësi reCAPTCHA i faqes suaj. Çelësat mund të merren në <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Ju lutemi, përdorni llojin e distinktivit reCAPTCHA v2 &gt; të padukshëm reCAPTCHA.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Çelësi reCAPTCHA i faqes suaj. Çelësat mund të merren në <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Ju lutemi, përdorni reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Çelësi sekret',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Çelësi juaj sekret reCAPTCHA. Çelësat mund të merren në <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Ju lutemi, përdorni llojin e distinktivit reCAPTCHA v2 &gt; të padukshëm reCAPTCHA.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Çelësi juaj sekret reCAPTCHA. Çelësat mund të merren në <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Ju lutemi, përdorni reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Kërkoni domen',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Domeni për të marrë skriptin nga dhe për ta përdorur gjatë verifikimit të kërkesës.<br>Përdor <samp>recaptcha.net</samp> kur <samp>google.com</samp> nuk është i aksesueshëm.',

	'RECAPTCHA_V3_METHOD'				=> 'Metoda e kërkesës',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Metoda që do të përdoret gjatë verifikimit të kërkesës. <br> Opsionet e çaktivizuara nuk disponohen brenda konfigurimit tuaj.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'KURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Prizë',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Pragu i parazgjedhur',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Përdoret kur asnjë nga veprimet e tjera nuk është i zbatueshëm.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Pragu i hyrjes',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Pragu i postimit',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Pragu i regjistrimit',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Pragu i raportit',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Pragjet',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 kthen një rezultat (<samp>1.0</samp> ka shumë të ngjarë një ndërveprim i mirë, <samp>0.0</samp> ka shumë të ngjarë një robot). Këtu mund të vendosni rezultatin minimal për veprim.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 kërkon të dini se cilën metodë të disponueshme dëshironi të përdorni kur verifikoni kërkesën.',
]);
