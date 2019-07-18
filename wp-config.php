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
define('DB_NAME', 'mahasatguru');

/** MySQL database username */
define('DB_USER', 'mahasatguru');

/** MySQL database password */
define('DB_PASSWORD', '4e!?XGKmB!B246f9');

/** MySQL hostname */
define('DB_HOST', 'prod-ecs-db-cluster.cluster-ce0xcobaf8lf.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '5apOg9ev]EzG1_3{f`Z$p0>9KHEKe%)I2S_jxC#)$$(Lp^(&*0C^YdbZPa-[6E8v');
define('SECURE_AUTH_KEY',  'hA7&n6AcYq5;=mn,|bD1i:_c?~7n4;vanZ;Zq/kWw&|ul1!!~E98)g]hfV33C`C4');
define('LOGGED_IN_KEY',    'Yened;vjSxn`]TO+FDe3pj^N`jLpt0|]M26}DfMsp-r5I+I5:1`DE6DA6tAp8`^W');
define('NONCE_KEY',        ':W.43us/O(XzdzKB(]j}30g7<Vt<:(+m8IPGFEs8Zoda+>SJF7ANUO`LN/ oHj4,');
define('AUTH_SALT',        'L7a[{/@JspH.Ip!,ga1h9bQ (M#$wI,t[N%YpB*x{KXQt4RIS7`0.@|UF<j5rc](');
define('SECURE_AUTH_SALT', 'LE`!`xH!I#P+=I;JEjv~go]5*95<?-{F!mO~If!af6])R+WZ6ig}QV;)B:&O{&Sv');
define('LOGGED_IN_SALT',   ';!-]HaSLW$3#E.R]w`vQyPNva|vL{4(Ut3m;Z2YGN,2U4w^-PCH)Zi?rH< <U7r6');
define('NONCE_SALT',       'S9f:?!bpR7`4 1!=6^i@|=U9*kAf*~NTZ{V|/ 3Xz>TQa0pA 08{sr({]8MF9L4.');

/**#@-*/
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
    $_SERVER['HTTPS']='on';

if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
}

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
