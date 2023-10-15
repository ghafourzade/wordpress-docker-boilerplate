<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_ENV["WORDPRESS_DB_NAME"]);

/** Database username */
define('DB_USER', $_ENV["WORDPRESS_DB_USER"]);

/** Database password */
define('DB_PASSWORD', $_ENV["WORDPRESS_DB_PASSWORD"]);

/** Database hostname */
define('DB_HOST', $_ENV["WORDPRESS_DB_HOST"]);

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qlOQ^ 4V]th#TK(U;N CXMd[L<J+G?Ujx` T}ASa0SCU-vR.Jowwf4]}]!}f(7>8');
define('SECURE_AUTH_KEY',  'dB%StZ^F}Rtmq_j(n&]b$SJP)aea-}/-04db@M:rAhfWeu[[6v$Q1afD;CW=k9.~');
define('LOGGED_IN_KEY',    ')}qo=%W%V,bZx9I]wpsV&-qa^#W6@,NtE&K3Ls<_+<$Mi)_ZdT}_8f;b-9qz&_gl');
define('NONCE_KEY',        'w]ejEjoq%MW9hCn,Q ,`=}U9lH}iR)y``7Kle2y%WKoDdGo(~c|rhS6p*O`rR+cF');
define('AUTH_SALT',        'Lx,[^xe_9#&V~6*LV.V@;P`k@;tF)s,GpoOK}b*@Jc=a!g?982LqbT-k@Z3od]g}');
define('SECURE_AUTH_SALT', ')`%xTDxe_>_Wy!usx-JO%4[eV.s_v8d=X%)78XdUg5C=b;t|2V+,5O22N>U*rf!o');
define('LOGGED_IN_SALT',   '|%x w+?Q^B6EMSu!+Bp!]v5sT-^+({Wl2eicAbq/F#Gda2,Z;0oPrbvM;MEfB} f');
define('NONCE_SALT',       'dIx1I8>##1@X/j*3,TFh;#1#T$w8`j`5M!=m;hDDZ9gh*T[Jw/`7[nZ*1QuCyo!s');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
