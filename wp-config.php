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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '=TyRC4rs$;bhUpIs=h{,,IA&S6O>ro!wHz&`6DFsL[7 Lm<@P1H&+%L!iS?r^ovh');
define('SECURE_AUTH_KEY',  'xp^Q?rhTfx;=sw_S|+90{f+XdCQq[+WsPoq-b)7^cj+nQ4Z$k8H+e`ol.-EGc9q3');
define('LOGGED_IN_KEY',    'LCV$_X=98*xU{x+Dy*_ttGjE+{VrK&phGB+G;l+HOp|.&`$d}PNxK`)^C+e@zPj2');
define('NONCE_KEY',        'm<{~NkS[3-4I~+(O+UY[VNL^wq1C(@S.l7_Z[$E~G4Hg8p~o*1ihDW~?CixWy|K?');
define('AUTH_SALT',        '{~BE;$+E7P-fwE<Iw+|wOV~D/~qW z:Om,MRJib8nH^VOla||cO?vBMd^.((3u/6');
define('SECURE_AUTH_SALT', 'J*+S_|wMPJk?r^@xcIpNQY`j>t<SaSD3^yy/E=UlMGW-c|+V^c$L#*:0(v]K=`(|');
define('LOGGED_IN_SALT',   '>q!pZpQ+[NvNLb+s<U/-5fi6/+WNgx-9%L+CVwV^f#$pXH2b<n6AvmLNp1. ]goW');
define('NONCE_SALT',       '-+k~4mSRGtz!GhKZ&QtGkT6@D*_f$Izi|*E(A.dk:v}=7M]KXdN6Z|+d@a=]3>7,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_getqajob';

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
define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
