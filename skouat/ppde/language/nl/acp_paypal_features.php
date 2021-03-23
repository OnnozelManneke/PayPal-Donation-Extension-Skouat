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
 * mode: PayPal features
 */
$lang = array_merge($lang, [
	'PPDE_PAYPAL_FEATURES'                 => 'PayPal IPN functies',
	'PPDE_PAYPAL_FEATURES_EXPLAIN'         => 'Hier kunt u alle functies configureren die gebruikmaken van PayPal Instant Payment Notification (IPN).',

	// PayPal IPN settings
	'PPDE_LEGEND_IPN_AUTOGROUP'            => 'Auto groep',
	'PPDE_LEGEND_IPN_DEBUG'                => 'Debug instellingen',
	'PPDE_LEGEND_IPN_DONORLIST'            => 'Sponsorlijst',
	'PPDE_LEGEND_IPN_NOTIFICATION'         => 'Notificatiesysteem',
	'PPDE_LEGEND_IPN_SETTINGS'             => 'Algemene instellingen',
	'PPDE_IPN_AG_ENABLE'                   => 'Schakel automatische groep in',
	'PPDE_IPN_AG_ENABLE_EXPLAIN'           => 'Maakt het mogelijk om sponsors toe te voegen aan een vooraf gedefinieerde groep.',
	'PPDE_IPN_AG_DONORS_GROUP'             => 'Sponsor groep',
	'PPDE_IPN_AG_DONORS_GROUP_EXPLAIN'     => 'Selecteer de groep waaraan sponsors worden toegevoegd.',
	'PPDE_IPN_AG_GROUP_AS_DEFAULT'         => 'Stel de sponsorgroep in als standaard',
	'PPDE_IPN_AG_GROUP_AS_DEFAULT_EXPLAIN' => 'Schakel dit in om de sponsorgroep in te stellen als de standaardgroep van de gebruiker.',
	'PPDE_IPN_AG_MIN_BEFORE_GROUP'         => 'Minimumbedrag voor sponsorgroep',
	'PPDE_IPN_AG_MIN_BEFORE_GROUP_EXPLAIN' => 'Het totale aantal donaties dat een gebruiker moet doen om te worden toegevoegd aan de sponsorgroep.',
	'PPDE_IPN_DL_ALLOW_GUEST'              => 'Sta gasten toe de Sponsorlijst te bekijken',
	'PPDE_IPN_DL_ALLOW_GUEST_EXPLAIN'      => 'Hiermee worden de forumtoestemmingen ingesteld zodat gasten de lijst met sponsors kunnen zien.',
	'PPDE_IPN_DL_ENABLE'                   => 'Sponsorlijst inschakelen',
	'PPDE_IPN_DL_ENABLE_EXPLAIN'           => 'Maakt het mogelijk om de lijst met sponsors in te schakelen.',
	'PPDE_IPN_ENABLE'                      => 'IPN inschakelen',
	'PPDE_IPN_ENABLE_EXPLAIN'              => 'Schakel deze optie in als u de service voor directe betaling notoficaties van PayPal wilt gebruiken.<br>Indien ingeschakeld, zijn hieronder meer functies beschikbaar.',
	'PPDE_IPN_LOGGING'                     => 'Schakel fouten logboeken in',
	'PPDE_IPN_LOGGING_EXPLAIN'             => 'Schrijf fouten en gegevens van PayPal IPN naar een bestand in <strong>/store/ext/ppde/</strong>.',
	'PPDE_IPN_NOTIFICATION_ENABLE'         => 'Notificaties inschakelen',
	'PPDE_IPN_NOTIFICATION_ENABLE_EXPLAIN' => 'Maakt het mogelijk om de forumbeheerder en sponsors op de hoogte te stellen wanneer een donatie is ontvangen.',

	// PayPal sandbox settings
	'PPDE_LEGEND_SANDBOX_SETTINGS'         => 'Sandbox instellingen',
	'PPDE_SANDBOX_ENABLE'                  => 'Sandbox testen',
	'PPDE_SANDBOX_ENABLE_EXPLAIN'          => 'Gebruik PayPal Sandbox in plaats van PayPa services.<br>Handig voor ontwikkelaars en testers. Alle transacties zijn fictief.',
	'PPDE_SANDBOX_FOUNDER_ENABLE'          => 'Sandbox alleen voor oprichters',
	'PPDE_SANDBOX_FOUNDER_ENABLE_EXPLAIN'  => 'PayPal Sandbox wordt alleen weergegeven voor de oprichters van het forum.',
	'PPDE_SANDBOX_ADDRESS'                 => 'PayPal Sandbox account',
	'PPDE_SANDBOX_ADDRESS_EXPLAIN'         => 'Voer het PayPal Sandbox e-mailadres of het verkoper ID in.',
	'PPDE_SANDBOX_REMOTE'                  => 'PayPal sandbox URL',
	'PPDE_SANDBOX_REMOTE_EXPLAIN'          => 'Wijzig deze instelling niet, tenzij deze extensie fouten tegenkomt om contact op te nemen met de externe sandbox-host.',
]);

/**
 * Confirm box
 */
$lang = array_merge($lang, [
	'PPDE_PAYPAL_FEATURES_SAVED' => 'PayPal IPN functies opgeslagen.',
]);

/**
 * Errors
 */
$lang = array_merge($lang, [
	'PPDE_PAYPAL_FEATURES_MISSING'        => 'Gelieve dit na te kijken: “Sandbox address”.',
	'PPDE_PAYPAL_FEATURES_NOT_ENABLEABLE' => 'IPN PayPal kan niet worden ingeschakeld. Controleer de systeemvereisten van de module “Overzicht”.',
]);
