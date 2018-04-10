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
define('DB_NAME', 'growwithme_web');

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
define('AUTH_KEY',         'xj/]UAe=siOz=ODHGE,gGOau9Jth^EW5;o>JiLvP5@rCwr@!ShD`rHUwa4{`3{}5');
define('SECURE_AUTH_KEY',  'TS?`S:7J?%#kGI*`EME5[xYxQLuy.AO9#P|-kAq7<qd(7dWzd}]sN[jF[n>Ab5]y');
define('LOGGED_IN_KEY',    '3S>c:?/x0L#%u%{myIzNU2L!-,P=tf<qCNZJPG?6k#2aCh@Ak]#}^]8#cipy9iih');
define('NONCE_KEY',        'Hro^xR-H(EEQ#jSths^#>vj*A-/vs)Ea<c^pk5r_:ktAIk]%4xH_l[`M~fM0xLP&');
define('AUTH_SALT',        'c{SUaX?6C+QpYD}3#!uT_7R-eI{;[!D7_5NA?0dV=?2y(Bt&;q|Gd+wd/8p1(L#9');
define('SECURE_AUTH_SALT', '!n#)|haLxcX/Y7U`t~4|Uo+-+w,RVx$pt&mX^@kTa`#=JPhdQzW{.8: {_@^+lo5');
define('LOGGED_IN_SALT',   '^@UJ%;^CwkY?b}+MGeL1)U15p#I6yHt3QbdD =Lz]`wW<2QXUM5_MDa{4)kCCi`l');
define('NONCE_SALT',       'YO_JU_QmOt7c+zIkp!OkEVIub<hFN%&aY)Z-L3FLR!aRb1`~65ELf=JC~_L76V3E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'w30x_';

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
