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
define('DB_NAME', 'new_wordpress');

/** MySQL database username */
define('DB_USER', 'cmackey');

/** MySQL database password */
define('DB_PASSWORD', 'Monkey1!');

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
define('AUTH_KEY',         'X&HwY)q[tc_Q&<auSFgJ0&G #YCkdq,JRbQ1+.olq~)Dk@LnnNc1mLz%lV*v9PO^');
define('SECURE_AUTH_KEY',  '6 LkwOA+]-U^roc #GUND|fh|xJ>I|k#Bd`sl#qQhl)sqL{YdQ6VF1iVqpqRyhKB');
define('LOGGED_IN_KEY',    'FLzO]Tt)+Ckyg] OjBg~Wo;b&q8tgWiW}kv)3+{s79bv>vRKL~fiNAz;(r?Q(F#N');
define('NONCE_KEY',        'K6%sqqjG!J;V#k:bz#aV/<i<du(OHL[I>V]&t(<sT 4rVm0<>tT2O%[8hSTf)&Iz');
define('AUTH_SALT',        'D;Hu0_wu&Q;#y{kD;Jo8Lv>$^m`_38/30Z?V?J-%issNL7wl1F}jKMz7+^|;h<H>');
define('SECURE_AUTH_SALT', 'rtV$plx~o!!8_d&9z:_iv;FNe8i(]tVG@i8Ik[/ki#m;7V-3*WO7xLhE%Q4OjUFw');
define('LOGGED_IN_SALT',   'q%IqXDu|+nV_uK[1em,D91HU8jiQ`u{$@mVI.DV8W=>/)M7i[VP.;zX1b!f|Ab.q');
define('NONCE_SALT',       '5cjycsxr&_C>*6O;;-Xx.rLf[Cw_}ytT3G>92e 5qlz}|>mL/m5)<3j1ID6c0 HR');

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
