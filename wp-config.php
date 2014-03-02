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
define('DB_NAME', 'ms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         '*X?C|y)Xd;o%`1y9mZX7t*0*5G=X=f4V]E-!^g5pwX7ucyDtp#RyE7(uXkkgYTVE');
define('SECURE_AUTH_KEY',  '-T|X[7rF47|5[(n@%Yjm{|ZV__LF%K.f]sav}/|.w|VGu|WGC+@)-KM!p~`lVXHM');
define('LOGGED_IN_KEY',    '+!m+Ao>16U<]v[dYE#r7`.T0y$i}_w&2IFzdyf;:c;0&xqYc@+%?Mw_-]yXX,5|T');
define('NONCE_KEY',        'Wbx-FUhgJAxWY6#_f0!MoW|+r uASx)J1N)sP!|~{smL/))zOrf$x+2seT;yt+q*');
define('AUTH_SALT',        'q7T~jekq;8+589lulTpiI;`AbFX^pb~}+z-8/V~l?Rc,^BQ+ek`|g^N-GD?hKQo|');
define('SECURE_AUTH_SALT', '~m+&0/y}?{Oe<0_L>(rpnD5(cDC%*W?$T)&[^SNjqB}aK?c|If+mt|w&6!kWkO[3');
define('LOGGED_IN_SALT',   ']-?..<why!8dLF;em|H&TzD^PCs-]Zn=+ynW}Z-(6_f-ue|dcbEv%}v&|o+{%.~6');
define('NONCE_SALT',       '!b[p2hhI)wlRA!tu|Py|<27-G1hn+->o65/;Z8|y-w|EeTA%_^rs5ouca@&pfP-d');

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
