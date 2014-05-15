<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

switch($_SERVER['SERVER_NAME'])
{
    case 'hekkens.com':
        define('DB_NAME', 'hekkens');
		define('DB_USER', 'root');
		define('DB_PASSWORD', 'root');
		define('DB_HOST', 'localhost');
        break;
    case '192.0.0.2/wordpress':
        define('DB_NAME','wordpressblog');
		define('DB_USER','wordpress');
		define('DB_PASSWORD','');
		define('DB_HOST', 'localhost');
        break;
}


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FfyQ,n)8Ozc;Dd;LqC0}-28zSTLgg~VSB;/}Rl8nxS+Ip@ ~lrG2&{T5*b5Za:!V');
define('SECURE_AUTH_KEY',  'tk,W3tA@0[E(jvD*++6:^j|nm!b,-d4E[9HBw]>.V.G<i*QLB0EJIIHlQrD*8d@*');
define('LOGGED_IN_KEY',    'VZXT @<DdhJS.j1jI# !+6s+*JJe:r|lMOCat>netlT#T{;kOK:Crw-Y&mQ #b=Z');
define('NONCE_KEY',        '?z#JXQ:?672,yPFvq5h%99f-k)K$AD{k`7dy=Cm3H{mOs/(eb[J6x%_qht+6);-i');
define('AUTH_SALT',        '?0tL^}vhaH;cn6LJ-c@{Ama@IZ36oO,RKd>*}OM:+^0nz)(-*Ai@G*pd|[ (xz}z');
define('SECURE_AUTH_SALT', ']b;bAQ$t^3!nv9jw}%):&8&i3O|H]sP,%+@p)p $4lgt`4b<j#GpZ)br$(_Plj|%');
define('LOGGED_IN_SALT',   '1}/i7rVE}W&UE(4I#^w9iERSqp[|+~I+8DW|/&lE607Xx:@G|| ]&{/=n>hG$^.l');
define('NONCE_SALT',       '&Kn@n=0nsfBO&450)/W)8-CU*.UeJ^yJBrEP  juT-TT)Q%{E@o<#pm&8>a-g-fi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
