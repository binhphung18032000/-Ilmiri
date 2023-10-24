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
define( 'DB_PASSWORD', 'T&z9ppo9!E9ZjjZEoYFyyB*c' );

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
define('AUTH_KEY',         '<B-8sqiqgI7,qgKZA[Hy52(@~blW~=-8xr-6+.RV6B=7GrQ&i#]pXYWwVc7!{<4;');
define('SECURE_AUTH_KEY',  'l:;0=@36di=:fWFZU:##]$:t6qdJTKxp4DF1}z6p9f=O</EC:f *NYi]IR$G$.d.');
define('LOGGED_IN_KEY',    '7a*i1q;kguG HAT/|zTJ*ZO.?nwUF-Gt:nmV$~~fSS?4-]>WfxLv%Ptm/@l|:BPQ');
define('NONCE_KEY',        'HHpU1U*>l7<+-`Rv~g!-Xz=DM&DDTuRv?*o:04n@-+t/>&g1x~h,#~+,qw70ajN@');
define('AUTH_SALT',        ';!BNTB${z]H5?%)#XWc`r`{+mVoAm*{uPj?5NCgMurY}DUC]>1(lj8}O0i=aoE]s');
define('SECURE_AUTH_SALT', 'o[-$,+kSw]O,kfDgBrbRN/3BUW?J!e]Oqs2t+DGiz{ujO4so7d/0rZt;Az~~[s/L');
define('LOGGED_IN_SALT',   'O|>YFN=8+Md-4O)^)kkdDZm!wZ2aXh* IPd#-Li9Y>X%(k5tD~[x5`d@IVsT0.1s');
define('NONCE_SALT',       '5k.poU||aP~~dgzn@A+Xy^GWYN{YY^ .(Kx1D<id3d.4G+be5?{hIkM~L&%s^ZFq');
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
