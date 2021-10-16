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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'gG_o3i}LJ Nv3}g)}.TC>Q|3R[|s:k[SiO27cx_K_wCbbdU14Rwkc/HKmEn-HIme' );
define( 'SECURE_AUTH_KEY',  'X:hx(QPgdP]_$^d:j+,6[gT+.nq23NSNBtXDk?}8KgVR#Kt/,D[T++i4 v!;;h?h' );
define( 'LOGGED_IN_KEY',    'l$/:!vE,^urBX)NgF7f9]V[V6h>8!#0B1g&C!(g+Z+hmQEs?W;%lujNM<I[6 ndo' );
define( 'NONCE_KEY',        'n+hv20`?uX)rZDu0|I%(YYt38D/[D_/u!7g%&qTjx9)+%m-Z(fHkQ$0pP1<]f|J.' );
define( 'AUTH_SALT',        'ygM$ntx`R*$+l##p$ij-g-ZG=V?xYZ7ebD{(2<|vd2}9=<xc4s-yeth)M`2(Fh<T' );
define( 'SECURE_AUTH_SALT', '=_j+L|@R.VT-[8*RC3nJqWJa`<=ZZs^*?/PBsunoXb3gpD[TW50Z^!+>@<k<&p)r' );
define( 'LOGGED_IN_SALT',   ';5$*vy7+~9Jt6@CxizyhYjiU=C9g>ko#Cya=|s{+U913K^0o^@~:]r:bz>|2uHw|' );
define( 'NONCE_SALT',       '^IUICql(v|)g1If&C=5Q;hbT`inpH,R&W+7CnbyUniE< R6{Gt=x+|U}]riDFAJi' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
