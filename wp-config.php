<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'albertolabs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`sNCE0R-`ednlfNvI`o^:4`uo+OjWs|QV``^ieUvvHGo^D,@SBOsSQ!P_SO2/1T?');
define('SECURE_AUTH_KEY',  '}g52z1-2fFFO}JQoy*{d{tC9m*,%g5j-n/{MS@*91?mT7N:-GKH>R)RRL2_LR%G}');
define('LOGGED_IN_KEY',    '|[uofbol^&np?p]9Z*/GEU[Pr,dct$Dcwf+& _[St!ziT(X lSM@{c+x2-CWvAkH');
define('NONCE_KEY',        'Tkk:///zi^m<$4`n.@mU]b>J6Xs}Ig[.avr+4s,iJISuj;qajqM2^5~R(l)g;G.|');
define('AUTH_SALT',        'C0s5~P<|E3aKk|lI)J5-I8DiS1.*t>WR@u+ cWur/CD+zuT+PVupnPi;R<M]^(#S');
define('SECURE_AUTH_SALT', '(G7weOe7 @d=[xLp0n{b6 [sm@e*b@WC]i-FQOPe{t%.i^^=l6{Q=#4Lk|_{:74/');
define('LOGGED_IN_SALT',   'K{zW~:DMJhiJUQ@&hJ`ppG}s~+E+.-BwyG2u7u.}C;Dw*JOdH/+1?P7D>rwHrtx<');
define('NONCE_SALT',       ';g>>L`7+|suR 7h&;J=B?r(Q#w(L$zTh}4BHoK>}$lOK{q&6ILP;%Z|%i?*-KrQg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
