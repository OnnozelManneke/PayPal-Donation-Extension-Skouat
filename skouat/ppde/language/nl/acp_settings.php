<?php
/**
 *
 * PayPal Donation extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015-2020 Skouat
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

/**
 * mode: settings
 */
$lang = array_merge($lang, [
	'PPDE_SETTINGS'                   => 'Algemene instellingen',
	'PPDE_SETTINGS_EXPLAIN'           => 'Hier kunt u de belangrijkste instellingen voor PayPal donatie configureren.',

	// General settings
	'PPDE_ACCOUNT_ID'                 => 'PayPal account ID',
	'PPDE_ACCOUNT_ID_EXPLAIN'         => 'Voer uw verkoper account ID of PayPal e-mailadres in.',
	'PPDE_ALLOW_GUEST'                => 'Sta gasten toe om te doneren',
	'PPDE_ALLOW_GUEST_EXPLAIN'        => 'Hiermee worden de forum permissies ingesteld zodat gasten kunnen doneren',
	'PPDE_DEFAULT_CURRENCY'           => 'Standaard valuta',
	'PPDE_DEFAULT_CURRENCY_EXPLAIN'   => 'Bepaal welke valuta standaard wordt geselecteerd.',
	'PPDE_DEFAULT_LOCALE'             => 'Locale instellingen',
	'PPDE_DEFAULT_LOCALE_EXPLAIN'     => 'Definieer de landinstelling die wordt gebruikt om valuta’s op te maken.',
	'PPDE_DEFAULT_LOCALE_REQUIRED'    => 'De extensie <a href="https://www.php.net/manual/en/book.intl.php">PHP intl</a> is vereist en moet versie 1.1.0 of nieuwer zijn.',
	'PPDE_DEFAULT_LOCALE_SELECT'      => 'Selecteer een landinstelling',
	'PPDE_DEFAULT_VALUE'              => 'Standaard donatiewaarde',
	'PPDE_DEFAULT_VALUE_EXPLAIN'      => 'Bepaal welke donatiewaarde standaard wordt voorgesteld.',
	'PPDE_DROPBOX_ENABLE'             => 'Schakel vervolgkeuzelijst in',
	'PPDE_DROPBOX_ENABLE_EXPLAIN'     => 'Geef een vervolgkeuzelijst weer in plaats van een tekstvak.',
	'PPDE_DROPBOX_VALUE'              => 'Vervolgkeuzelijst donatiewaarden',
	'PPDE_DROPBOX_VALUE_EXPLAIN'      => 'Definieer de beschikbare donatiewaarden in de vervolgkeuzelijst.<br>Gebruik <strong>komma</strong> (“,”) <strong>zonder spatie</strong> om de waarden te scheiden.',
	'PPDE_ENABLE'                     => 'Schakel PayPal donatie in',
	'PPDE_ENABLE_EXPLAIN'             => 'Schakel de PayPal donatie extensie in of uit.',
	'PPDE_HEADER_LINK'                => 'Geef de link “Donaties” in de koptekst weer',
	'PPDE_LEGEND_GENERAL_SETTINGS'    => 'Algemene instellingen',

	// Advanced settings
	'PPDE_LEGEND_ADVANCED_SETTINGS'   => 'Geavanceerde instellingen',
	'PPDE_DEFAULT_REMOTE'             => 'PayPal URL',
	'PPDE_DEFAULT_REMOTE_EXPLAIN'     => 'Wijzig deze instelling niet, tenzij deze extensie fouten tegenkomt om contact op te nemen met de externe host.',

	// Stats Donation settings
	'PPDE_AMOUNT'                     => 'Bedrag',
	'PPDE_DECIMAL_EXPLAIN'            => 'Gebruik “.” als decimaal symbool.', // Note for translator: do not translate the decimal symbol
	'PPDE_GOAL'                       => 'Donatie doel',
	'PPDE_GOAL_EXPLAIN'               => 'Het totale bedrag dat u wilt inzamelen.',
	'PPDE_LEGEND_STATS_SETTINGS'      => 'Statistieken donatie configuratie',
	'PPDE_RAISED'                     => 'Ontvangen donaties',
	'PPDE_RAISED_EXPLAIN'             => 'Het huidige bedrag dat via donaties is ontvangen.',
	'PPDE_STATS_INDEX_ENABLE'         => 'Geef donatiestatistieken weer op de index',
	'PPDE_STATS_INDEX_ENABLE_EXPLAIN' => 'Schakel dit in als u de donatiestatistieken op de index wilt weergeven.',
	'PPDE_STATS_LOCATION'             => 'Positie van donatiestatistieken op index',
	'PPDE_STATS_LOCATION_EXPLAIN'     => 'Bepaal waar donatiestatistieken op de index worden weergegeven.',
	'PPDE_STATS_TEXT_ONLY'            => 'Donatiestatistieken met alleen tekst',
	'PPDE_STATS_TEXT_ONLY_EXPLAIN'    => 'Schakel dit in als u de statistiekenbalken voor donaties wilt uitschakelen. Alleen de tekst wordt weergegeven.',
	'PPDE_USED'                       => 'Gebruikte donaties',
	'PPDE_USED_EXPLAIN'               => 'Het bedrag aan donaties dat u al heeft gebruikt.',
]);

/**
 * Confirm box
 */
$lang = array_merge($lang, [
	'PPDE_SETTINGS_SAVED' => 'Donatie instellingen opgeslagen.',
]);

/**
 * Errors
 */
$lang = array_merge($lang, [
	'PPDE_SETTINGS_MISSING' => 'Gelieve dit na te kijken: “Account ID”.',
]);
