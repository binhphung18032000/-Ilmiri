<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ilmiri' );

/** Database username */
define( 'DB_USER', 'ilmiri' );

/** Database password */
define( 'DB_PASSWORD', 'As11,0K^C/3.8iE%3#;yDiJr' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5u9I)@?3CEn,YOmR9`(9U}4;<?rup#IY#3V]5eCV[eAL](Nr|&C|C3UZDQ( JbP~');
define('SECURE_AUTH_KEY',  'y4qA=/%o*] r~Z*^CIdjRJyuaav&GLK?PpRH5*O$rI20__~%!Lc^+$S**RiUS&SV');
define('LOGGED_IN_KEY',    'B&[+GRSlN~HwJ [t-ALHwP|rx@ ?=-hwA)B,33^%T49:v|9!2AZ+K,97zZaSd}oW');
define('NONCE_KEY',        'y!v#1[R]i3Bppc>!6gzo<|I+)8&[bk3OMW(F:k_a}!x,{y]{nFG:`Hn]X;Q8t:|H');
define('AUTH_SALT',        'p32d~7zy#v`F*H0dtx%P[]dw4s%3bq{MGo,!?{ PTetZoPXMhZxNy*/Ep1lL5p:D');
define('SECURE_AUTH_SALT', 'F=MxWsV.]u1as@/EB;x+`k_e~6A{dFh>3Y>K%1lc{7!8G?=U] pnqd=gXP!w}09k');
define('LOGGED_IN_SALT',   'XD7fB8j(5]U~Ph%#|_Wpv1UzH_ei=#=F2Pl?5 e@D1(S-]@Fb^?arZe^p]hJdT*^');
define('NONCE_SALT',       'jJDB?9TT+&kR*#`d!8V}Q^e4Me1B&~$^,sJ{;AX#J0P|YfrZvc+9|}2d>zI!/5co');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
