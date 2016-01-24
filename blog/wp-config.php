<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */

if($_SERVER['SERVER_NAME'] == "localhost")
{
	define('DB_NAME', 'albertolabs_blog');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', '127.0.0.1');
}
else
{
	define('DB_NAME', 'albertolabs_blog');
	define('DB_USER', 'dev_all');
	define('DB_PASSWORD', '181302');
	define('DB_HOST', '178.33.202.66');
}

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '`UTI^Gi=rYyjpNB/{3U (D7AcWP&Sy._Y+kzt0h$x^kDJhx$g7NjJ=ZyuM=l2pzt');
define('SECURE_AUTH_KEY', '|q|Di*RCKW$u5{B=>B%}NOk-/y5 eoxS)XHM 1p }|) ;<4e[=-m{^q|dw#^[Ki*');
define('LOGGED_IN_KEY', ':6B#]0`7+h%SN9FZ~NRA=sm+{+wY4Ya%M}YoM:|<b1)&y~3),,~5tJAfki$| b#W');
define('NONCE_KEY', 'L]-gQ]-sI`s/[n6:$t%6:#|H(-Dm:9;iY6LnX2<2Ud>3A|A 8udBuS*-CaNN{/eL');
define('AUTH_SALT', '_VgHy.4-}N<m~!lvDI0i_k&-o!W;TkOwYk3Cz.V|s`ipHso^CCH:%q4}/`mo2<s*');
define('SECURE_AUTH_SALT', ',;]W(UCJ/|zgO4_#KGG;0Z#Af+i4:#7MB|f^8Q6E(`&SS!Tfa:t_+1L`|5j U+m)');
define('LOGGED_IN_SALT', '-ZvJI$K,TsA](#nV+mer&fH#htIpp8XPIL,Idatfm5|7+i&aT+ta^&Fs ADZHK;o');
define('NONCE_SALT', 'Y+Gt;fWTH%Yo{P-|_@jit+H!5]I99z7YpQ@,c+,(|loJ@6&/0i*};8+6-vY_Mqro');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

