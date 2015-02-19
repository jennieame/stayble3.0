<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'stayble_old');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G$ie)e)Z|)5S81Z4j0BT-22#mXn|e||cbq0V!g[L*7hofT)~_}CfqQg+bPly>&$~');
define('SECURE_AUTH_KEY',  ')q(4a3RgW.s/>Ul1BV%[J~~hu^MhvLueH/6GsLpI_p|wKd03M{nktI~pLne0n`i~');
define('LOGGED_IN_KEY',    'RS` ~yG<|lJs*,kPY6XM2^5e^SE~|5{:-AgfOR(Hud-m+~Cs/2Tnr(NhFOf+X+@I');
define('NONCE_KEY',        'fG+xAv46s;xp*cEI1-~WR+s&pRaM/{K+|A(3A`b?*`@ <47s09EBb<+Ta(6Zf}ZS');
define('AUTH_SALT',        '9WT /E.rR0A.AleEC?O(~`jhQl&Uj>(YuB~X,MXGc=P1{d%52 PG/-izU~t+/6vm');
define('SECURE_AUTH_SALT', '(54[X;r*l?PsdR2ZBz-s*v?VC?P1[+7)T7U[]ukCf;,]+=U3ME*mW:7%Dm&+l&A0');
define('LOGGED_IN_SALT',   'vF.q=]G&W.}/;[D)KIl Ey^F+ncfNwEs2:7T5L]$j<fNYQp,a!4ygv&|e4Bd^l?B');
define('NONCE_SALT',       ')LeB@RdK(@Il&ol&X[e;<Va;7Y{M?KIJzGBZb>Apz<l}n?T*Esoz$!/,y?4P^|}T');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'stayble_wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');