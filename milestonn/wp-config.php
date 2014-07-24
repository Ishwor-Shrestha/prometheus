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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mileston_web');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'DJU?#I(T;JboLg_17qH<7vqiE<BY%T)E&a|i-efCqvUEy&An5#ph kKpHC8BSuI+');
define('SECURE_AUTH_KEY',  '4!+ArHd#*+WZYy@o4*aOV|bi3[<ml/b2hfvV.o[Qy@_K(`(97$rMot0uvRKnLyzZ');
define('LOGGED_IN_KEY',    'B+KSn%T._/bXkOA<)N4wd1$? ,3?U)9HRGI~[,$ *pj!e+[pYmuIn@W`s.tQ7~$Z');
define('NONCE_KEY',        'w..N(ZDpo]e~+Zdyd|G#hc`V&6#b*wVBP:6^{}Hzx0t90h0zeiKIY)Rkt|8)BvOm');
define('AUTH_SALT',        'oyJ6G=|.|H} ip<:,M6iW/WPzPp)5thF)GS_!!zyRYpVeT&2t~qWT-7|%4(<1>8K');
define('SECURE_AUTH_SALT', '1I1^<b.P4A!qP6,A|![>P&aU5JS3}3 D@xP.:|{8Qw>Qs17*,G>Xr|iC>,- K1;O');
define('LOGGED_IN_SALT',   'n%FT] 4v}jOY?m2hV5$?i6MJE]2ZP@8av3>7q`%p~b0RzE (jLLxnUG!?Ne7UXGd');
define('NONCE_SALT',       '>{UJx~2ERQ/SXiOHU5+-iVc,NYn1mxm$}`*kgl?bCS6-?5ghK%A,4^U_5%B1+?Y5');

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
