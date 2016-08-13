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
define('DB_NAME', 'psgWP');

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
define('AUTH_KEY',         '{q~JGL R4Bx&hmWm1:3?am&rqzt;N8HbG.P48~,V0x|6tMt;d)kdVXgCL5!(DjRf');
define('SECURE_AUTH_KEY',  'd4`q*4]Ya)o-?*C3)kIfj&OuY/*2!Z_hppOd)0.ec9O$E*vZd`CZ(StN(ZdYLA*k');
define('LOGGED_IN_KEY',    'g*|yp^zr?tXk&iUlrIj<8${4&st7wzRuP`pU)1.4R?Q0n6w9A1{f_xt]>,1]~A_K');
define('NONCE_KEY',        ']cg[Stq5>xAe}T`M`r|H6yMhIVDQ&&$/T`-kopuX2h<,6ej-j0}>BxNHA=/zBFXr');
define('AUTH_SALT',        '=*:pa2GiGn6N a1V!QiZD-V -MtTyWP]$UE5zNAaB,7|o{An!]KAY-S3Q&K*H@ 6');
define('SECURE_AUTH_SALT', 'mg8b&rQb:d6JcbF?ZVXN7t%%G/(#W[mtk/$SEcONw5R5lRlPDVhRt9rO7Z0m&Ak;');
define('LOGGED_IN_SALT',   ':Z#|K_UFMD_,gu#^^~5Jc?kXh2pC}U?D(XXq:Qo8o1k`rnuqC>vQfRr|8V!~hsyS');
define('NONCE_SALT',       'iCmIAt$.PA2xo<YfbV=:kd_bv8&J;q7EkjY?:Rzde|U/?h%F?-.N6|obG:TLtN{x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'psgwp_';

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
