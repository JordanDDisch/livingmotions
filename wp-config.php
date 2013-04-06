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
define('DB_NAME', 'wp_livingmotions');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_5jP@8I5a/9,{GA4=`W4 sf)Oq~O@^5jj{d>>5=<H!8_]O|=?gmq!VhnAoyf%,:m');
define('SECURE_AUTH_KEY',  'R^@3Sn2s8+_!,V>alOF!:fpb>fTJ_zF;F@7[M?winrd0-p;!eyISz%Td*~xK ]Zy');
define('LOGGED_IN_KEY',    'DrD)k=[-o/QD.L$zL@Ez?:wV7t&$Yw,T<WFDywLhJY-XmwP>X]Q8T(/OM=%iq+`D');
define('NONCE_KEY',        'cC~ldjp0G78VF#[K?!`9xCNZ9F5jRFCq2jH(p>8A;aQ-UX6noY<*kY^C$hPl]}}]');
define('AUTH_SALT',        'SmHwKOx8&4S?90.}N_WV^cy`vSOC)_Si2DM^gYjR[Dn{RG_d13.HRWuP-yRGM5(9');
define('SECURE_AUTH_SALT', '#T.byy6*r?5>x^IJ4!hJC<}llkE7F&eE|I`%,$JYX7Y[Mt~BX|Uvnfwl,83^FkTe');
define('LOGGED_IN_SALT',   '{A|OYM`@_IS1ngumi|G |)%*41i2$U!,dgJv4}(|O3w!@@?b_+=jp%G*2>a{Omoo');
define('NONCE_SALT',       '@g+z>:)5-G%;<TLAgOy-;vP#@h&4cniE|2pl)}Z7lq_%&6c&J:}+ABTEZ1@n>O/j');

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
