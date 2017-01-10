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
define('AUTH_KEY',         'Vk>[5 5=<`pBP- |wC?rlxh2EC8Np>Gs:naJ.Fuz-2U`[4DXq]I`eW_?aA<`W]4A');
define('SECURE_AUTH_KEY',  'C! {w~:AkLX@`>D8RpzN5Q9~q,(Mq$l$0u7d&Rr EY0y8X:nGZo7((t<2LKG&bp/');
define('LOGGED_IN_KEY',    'MJRcb9Qs*k@dsSg:QPoF:jHXlH. oA1Bs4-Gz)mkj<lr,9.vx4GU1Tt|eoqv-MK;');
define('NONCE_KEY',        'ZPISHNEAERL7qNB/0{<CKK|^]p^p<APY/-| RYoJK@U}wkhkQ?B$/0w!_$XDZyQ:');
define('AUTH_SALT',        'zh>94jKg6+?%%W=f>>gFf*X-xYMXuCKs%rJ B,d^FT`4B2DkQG?&Pke2W_7M,rn@');
define('SECURE_AUTH_SALT', 'uG5 $Vqx>#r/;=<?@N8qFBj6  z*ng[.{%qTDP(e9C[BZSj6;#??{:YuIAom+6^G');
define('LOGGED_IN_SALT',   '^dn(+Te7q)(~S;<B~R*HyIC(ygtVT eC58-Z=J1i~<^J0tI~fbr?tYJD!2Wzm:o8');
define('NONCE_SALT',       'Gk1DPc:at8kaj6:DGm(t$=5>`X5,[>}Mn5dk<uuD1!,@uJdx!a|WHN7rytBLWr#Q');

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
