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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qyuLI0`>U)]UC!_Yeup.V)c)4m)%m$4ipKX`Z,k1uY9[Zx6<vAl@r#9JFK(c76D.' );
define( 'SECURE_AUTH_KEY',  'BZ}?mA:8(cDkQ@H.9)bt6Y+quci8OKaEA2>^2no#GE&Bf4{W S<R}QgSSOhB(#e&' );
define( 'LOGGED_IN_KEY',    'Tfrd,y/s(xjE4yu*2ZNWrZ5pJHOPicizqnH[=8NoE=k4na_.qEq<g%74CQ6/OAB5' );
define( 'NONCE_KEY',        'B|GV8?.Ii9d1G43*M](+GJ,UloCDz53/zMxG?D Wv0LJC9l-6? QB?+y]g|h-EPn' );
define( 'AUTH_SALT',        'X5SCE8K&z7WVxrnAlD)lAri7[MQ+#8RM^+ [)fW^<(.1ui)DwuQ w*+Ya@,,CnII' );
define( 'SECURE_AUTH_SALT', '0EXxzG!0t^CS)B*^HQQGc>l/-kUm?1}/HXu^FL?PkpiK5ir}isdD~+s/cz]N16y]' );
define( 'LOGGED_IN_SALT',   'LWh+p^eKg]_<!b=SC}1ZC~$iL.}g0eZ!wXFz25s!=um~HX_)WMwTAdB_&zND(=dx' );
define( 'NONCE_SALT',       'qda*FTRy,KVPU=H.t43Yoy40ioNut0=P5yWUKR>ex48rYwKeq)]C*UB=/drDoaY2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
