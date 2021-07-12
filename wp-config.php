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
define('DB_NAME', 'piowycmy_CDPLiverpool');

/** MySQL database username */
define('DB_USER', 'piowycmy_WPXBG');

/** MySQL database password */
define('DB_PASSWORD', '9q(.sx!pnf*I}vv3f');

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
define('AUTH_KEY',         '?m9A^mdRZ18y#8@0RK2n?rhp!YnNFO<ktN.fvuD@I2o.`bd55wvaeTIo/k0viIAd');
define('SECURE_AUTH_KEY',  'YPmZ4<R+ccdzCbS}%.r&GH)cX<S=}i1(WMkm7UP&9;|Y,x28BPSDl&%/`JJlWn_t');
define('LOGGED_IN_KEY',    'ZvN8pp.H:]U?c22NU-,f@RX=-0oU[4hKObwm3;)+2Cd81qOe7G/5K1_l@ Pv%%gD');
define('NONCE_KEY',        '(O$_1Gn:~3F::cvU|n9Fa9yWecko.7o[4Q$gE45xvxD$sH6$Nl`Q;%Gmr4t-^]I2');
define('AUTH_SALT',        'B3xFtXZj6(Xjd Hc-6Or*sK~}InS$,ywsb@b?|3RMr8*#s+=|qwk.pr^UIz.)$3g');
define('SECURE_AUTH_SALT', '5@m;tg)@RM2ANsiE<chv?Bz(7UlHpJ3WN|T^|iH<2+C}.OHvEfaMmI{e_xL9t0p0');
define('LOGGED_IN_SALT',   'e9E*7<JfcLhbx3.~3-MCwSyzBA/M-@?qk$}9!IKr9qfC]V>]Y+]su51S[]?4wM_C');
define('NONCE_SALT',       ']/k-zxI#s8y]F)STRX:fekyA)83#Jm4AiIRx9;$n3%e02Hs-oiY~%c[`P=de!~hq');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
