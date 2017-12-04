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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '>AV$^^6fqdhNeeLeM(j6f*w=Dk.r/tq020?,^ us0r6*:o/:MjJ[bO`!;mRNbJa6');
define('SECURE_AUTH_KEY',  'zzV!n87co1n;2!Q@N49dTHO&z&U{09{UWJmN-<eEgW8+egtR,AV8x`&2/1iD5$Oj');
define('LOGGED_IN_KEY',    ',zkP=R|`J[2,hzhhD2walf%m1)Q;_>weuw,fJ@c1s^Sa2_Kon[4bHXrRbaG~{xev');
define('NONCE_KEY',        '<mef_k%|,YNy/!Wd}t$Q`%)n9ap7X]5t]]7Ek*=W~m_&F &e@FH?|zk#Xpe:z}Sw');
define('AUTH_SALT',        '}<X;?}#.<Q]:%fnR/Z8j6MGg,;+.*vC<(MvJAQWi$str%$KqdcrkqIE*jL-eQYaF');
define('SECURE_AUTH_SALT', ' zbsAxPFwXi3Kur ihDPFib!SeOb4z6{w[GK.ggR4mR?3$l<?`[sOzkOWdK`ZI<`');
define('LOGGED_IN_SALT',   'xH4Pq]Thzzb:P]B}<#&gn<s%, pnE7zvPbK+k]tr!)t!Ul=_iXAF]Th6fart6h;-');
define('NONCE_SALT',       '0/:1FNcS9!>03Z:?{+L$91+/t+{}C*M`xI8[H!pVjO0!OBWxOy891Ox^J}2Li@OE');

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
