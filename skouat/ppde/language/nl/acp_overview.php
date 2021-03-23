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
 * mode: overview
 */
$lang = array_merge($lang, [
	'PPDE_OVERVIEW' => 'Overzicht',

	'PPDE_ESI'                   => 'Extensie en systeeminformatie',
	'PPDE_ESI_DETECTED'          => 'Gedetecteerd',
	'PPDE_ESI_INSTALL_DATE'      => 'Installatiedatum van <strong>%s</strong>',
	'PPDE_ESI_INTL_NOT_DETECTED' => 'Overweeg om de <a href="https://www.php.net/manual/en/book.intl.php">PHP intl</a> extensie te installeren',
	'PPDE_ESI_MORE_INFORMATION'  => 'Meer informatie…',
	'PPDE_ESI_NOT_DETECTED'      => 'Niet gedetecteerd',
	'PPDE_ESI_RESYNC_OPTIONS'    => 'Reset extensie en systeeminformatie of controleer deze opnieuw',
	'PPDE_ESI_TLS'               => 'TLS 1.2',
	'PPDE_ESI_VERSION'           => '<strong>%s</strong> versie',
	'PPDE_ESI_VERSION_CURL'      => '<code>cURL</code> versie',
	'PPDE_ESI_VERSION_INTL'      => 'PHP <code>Intl</code> versie',
	'PPDE_ESI_VERSION_SSL'       => 'SSL versie',

	'PPDE_STATS'         => 'Donatiestatistieken',
	'PPDE_STATS_SANDBOX' => 'Sandbox statistieken',

	'STAT_RESET_DATE'                   => 'Reset de installatiedatum van de extensie',
	'STAT_RESET_DATE_CONFIRM'           => 'Weet u zeker dat u de installatiedatum van deze extensie opnieuw wilt instellen?',
	'STAT_RESET_DATE_EXPLAIN'           => 'Het opnieuw instellen van de installatiedatum heeft invloed op de berekening van het totale bedrag aan donaties en enkele andere statistieken.',
	'STAT_RESYNC_OPTIONS'               => 'Synchroniseer statistieken',
	'STAT_RESYNC_SANDBOX_STATS'         => 'Synchroniseer PayPal Sandbox tellingen',
	'STAT_RESYNC_SANDBOX_STATS_CONFIRM' => 'Weet u zeker dat u de PayPal Sandbox tellingen opnieuw wilt synchroniseren?',
	'STAT_RESYNC_SANDBOX_STATS_EXPLAIN' => 'Synchroniseer alle sponsors en transacties met PayPal Sandbox tellingen.',
	'STAT_RESYNC_STATS'                 => 'Synchroniseer het aantal sponsors en transacties',
	'STAT_RESYNC_STATS_CONFIRM'         => 'Weet u zeker dat u sponsors en het aantal transacties opnieuw wilt synchroniseren?',
	'STAT_RESYNC_STATS_EXPLAIN'         => 'Synchroniseer alle sponsors en transacties. Alleen anonieme sponsors en actieve leden komen in aanmerking.',
	'STAT_RETEST_ESI'                   => 'Controleer de vereisten voor de extensie ',
	'STAT_RETEST_ESI_CONFIRM'           => 'Weet u zeker dat u de vereisten voor extensies wilt controleren?',
	'STAT_RETEST_ESI_EXPLAIN'           => 'Hiermee kunt u de vereisten van de extensie controleren voor het geval de webserverconfiguratie is gewijzigd.',

	'STATS_ANONYMOUS_DONORS_COUNT'   => 'Aantal anonieme sponsors',
	'STATS_ANONYMOUS_DONORS_PER_DAY' => 'Anonieme sponsors per dag',
	'STATS_KNOWN_DONORS_COUNT'       => 'Aantal gekende sponsors',
	'STATS_KNOWN_DONORS_PER_DAY'     => 'Gekende sponsors per dag',
	'STATS_TRANSACTIONS_COUNT'       => 'Aantal transacties ',
	'STATS_TRANSACTIONS_PER_DAY'     => 'Transacties per dag',
]);
