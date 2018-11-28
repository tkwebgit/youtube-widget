<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'ownplugin');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%MXpbw7K$ooG%tXX4:dKbE-+uza/gcnH*K?$Y$-[_/{6i1nGo(.t81)SW0{=Q^l3');
define('SECURE_AUTH_KEY',  'RCl6xp!Xro5A>|c)lMEiXap{^D#!xOK/w`8vD3X^0l:.- {zyU:.ijUq0Ow)sdSV');
define('LOGGED_IN_KEY',    '?E;Gu5#|_]XjQz6B86)Lp-/M-ZA^RR|4#]:Y/$p-%i5W_o7(F3`iJ&=v%#wCEpeL');
define('NONCE_KEY',        'KF=-f*>mV:)q0B!8^}_b%r3ZG0k&(jI}=&NDk4gaDfbn[Z>OU7;W<{tp[=<.U,l_');
define('AUTH_SALT',        'Ix&uWjn[iO.<t(A;J[S5[<uFz@ve+/DMf~B,OF*&V]Rw0$y_iysxtrX4XY]u?+;)');
define('SECURE_AUTH_SALT', '}YK]9br*r;~YfpwZ>]zH+8S5kGrPMVsuHJQ@(<?39^njV<EiGZ]3C$Nml|2ukmDn');
define('LOGGED_IN_SALT',   '!c<U0&E9vO@Z8c7[=/shtflCA i9/Vw=*jNpm</{2r>#~(AYI[MRgW{1pg[=z<]*');
define('NONCE_SALT',       '{V|m,,L7CMrFH}p)=HM-VqBWxejQ4d}Lf%HE@q><e:bAg:92n[gL:UdWYU2SI/#&');

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);
    define( 'WP_MEMORY_LIMIT', '256M' );
/* Det var allt, sluta redigera här och börja blogga! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');