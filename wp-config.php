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
define('DB_NAME', 'mahanttech');

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
define('AUTH_KEY',         '(MA#U!kqX/s9^564q(LU:O6#rt{2LM2[]Y}-H;C1o~n@FF}WBhI_-?dxT,]$K5zw');
define('SECURE_AUTH_KEY',  'b~Xb zI=lt8{+$9YPkN|=vf0K.Wp&ZP$..jM6INl:oloqHBu:/y|MTq_&~]6gHVR');
define('LOGGED_IN_KEY',    'kMcv%U7u`|!gxK;iqe#F_B0fd3(B#fIRi-O,aGG`[>1CnVG85G)gFB0n(n`KJ2Fc');
define('NONCE_KEY',        '=.:JVY;!PSVPVusA#%f;%FsG1xM3IinqCM+NGEdTk8!&tN#`fEGg`i#rH2.ahLz,');
define('AUTH_SALT',        'IIiGcvaI8r|&mLATW$%(9UTO[wnmq{~zDF>;Q?G15+%~<?3?S^%xNI_+_){OX&9n');
define('SECURE_AUTH_SALT', 'K4D4aCT9Iq4x/^!g^X2U2X|v;0(619yyv].ZRiN]9X6#CF#*2A6KX6{x;LQesRr*');
define('LOGGED_IN_SALT',   'gshOz; pU}ocg=X_M6p;s|~|3}F11Y{S=3:BOx4|Du&mRoXU$#b4`-@d@*<%m]F)');
define('NONCE_SALT',       '*OUhC;T3Ej{F+O#5H6YezaAp#[:G!_0r{AbCXo/ez}.7(W,R?lmM4+p((y@~Y_x}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mt_';

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
