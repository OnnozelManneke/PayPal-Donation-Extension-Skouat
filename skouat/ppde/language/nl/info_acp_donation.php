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
 * mode: main
 */
$lang = array_merge($lang, [
	'PPDE_ACP_DONATION'        => 'PayPal Donatie',
	'PPDE_ACP_OVERVIEW'        => 'Overzicht',
	'PPDE_ACP_PAYPAL_FEATURES' => 'PayPal IPN functies',
	'PPDE_ACP_SETTINGS'        => 'Algemene instellingen',
	'PPDE_ACP_DONATION_PAGES'  => 'Donatiepagina’s',
	'PPDE_ACP_CURRENCY'        => 'Valutabeheer',
	'PPDE_ACP_TRANSACTIONS'    => 'Transacties Log',
]);

/**
 * logs
 */
$lang = array_merge($lang, [
	'LOG_PPDE_DC_ACTIVATED'            => '<strong>PayPal Donatie: Valuta ingeschakeld</strong><br>» %s',
	'LOG_PPDE_DC_ADDED'                => '<strong>PayPal Donatie: nieuwe valuta toegevoegd</strong><br>» %s',
	'LOG_PPDE_DC_DEACTIVATED'          => '<strong>PayPal Donatie: Valuta uitgeschakeld</strong><br>» %s',
	'LOG_PPDE_DC_DELETED'              => '<strong>PayPal Donatie: Valuta verwijderd</strong><br>» %s',
	'LOG_PPDE_DC_MOVE_DOWN'            => '<strong>PayPal Donatie: Valuta daalde</strong> “%s”',
	'LOG_PPDE_DC_MOVE_UP'              => '<strong>PayPal Donatie: De valuta is gestegen</strong> “%s”',
	'LOG_PPDE_DC_UPDATED'              => '<strong>PayPal Donatie: Valuta bewerkt</strong><br>» %s',
	'LOG_PPDE_DP_ADDED'                => '<strong>PayPal Donatie: Nieuwe donatiepagina toegevoegd</strong><br>» “%1$s” voor de taal “%2$s”', // eg: » “Donation success” for the language “British English”',
	'LOG_PPDE_DP_DELETED'              => '<strong>PayPal Donatie: Donatiepagina verwijderd</strong><br>» “%1$s” voor de taal “%2$s”',
	'LOG_PPDE_DP_UPDATED'              => '<strong>PayPal Donatie: Donatiepagina bijgewerkt</strong><br>» “%1$s” voor de taal “%2$s”',
	'LOG_PPDE_DT_PURGED'               => '<strong>PayPal Donatie: Transactielogboek gewist</strong>',
	'LOG_PPDE_DT_UPDATED'              => '<strong>PayPal Donatie: Transacties bijgewerkt</strong>',
	'LOG_PPDE_MT_ADDED'                => '<strong>PayPal Donatie: Handmatige transactie toegevoegd</strong><br>» Sponsor: %s',
	'LOG_PPDE_PAYPAL_FEATURES_UPDATED' => '<strong>PayPal Donatie: PayPal instellingen bijgewerkt</strong>',
	'LOG_PPDE_SETTINGS_UPDATED'        => '<strong>PayPal Donatie: Instellingen bijgewerkt</strong>',
	'LOG_PPDE_STAT_RESET_DATE'         => '<strong>PayPal Donatie: Installatiedatum gereset</strong>',
	'LOG_PPDE_STAT_RESYNC'             => '<strong>PayPal Donatie: Statistieken opnieuw gesynchroniseerd</strong>',
	'LOG_PPDE_STAT_RETEST_ESI'         => '<strong>PayPal Donatie: Vereisten voor extensie aangevinkt</strong>',
	'LOG_PPDE_STAT_SANDBOX_RESYNC'     => '<strong>PayPal Donatie: PayPal Sandbox statistieken opnieuw gesynchroniseerd</strong>',
]);
