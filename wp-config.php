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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brief-1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '>_Sz&5*K/;`-3&wk.F7U.P[hWGOz},+vY>_J5KnJBSe?<z+~XQup~4k2dy]%>NKt' );
define( 'SECURE_AUTH_KEY',  '=t(#e3 >S9B`DG;,?]AL~Fh|kUu`C!0?e*3I2^v<;WEfeGw.<~j2BLFmdf!9.K^&' );
define( 'LOGGED_IN_KEY',    'Wmc/BC[P.Po,]3OLX.+)JKQ1hbX2V+OgV-`%gvPA[BVMh,>`o/5n*KK*9P.7^75%' );
define( 'NONCE_KEY',        'Xk,6Kwz^T0-]019 MYCYSE.l-Y:&DOCWAyQ viz}ZrO;KQ `H>tX[Z;[Nu9wZk1y' );
define( 'AUTH_SALT',        'w%gVnpx1=pT]W`Sb<qmiQ{1 zqU(YW(M3Y#?,DV],xp`hT|{{(>V6I|q.j]4U sA' );
define( 'SECURE_AUTH_SALT', '+DS4DsR8Oa^w|bFcq5!5nF2=:w<!Er~eyZCcMDa.Mm>4w#Ls0y,^-z[MK+F8`[|x' );
define( 'LOGGED_IN_SALT',   '2&dt9LpCo4w@L#.[UV>DyByi#8V>1d:(-T08ykfTGS*G#_`G~W;W}3.)/Q3l.o1C' );
define( 'NONCE_SALT',       'HtxYjP|~`Q833#l5T|0u9w-#M 0k?Utqpzs]NhtHI^Z5QtcR3 9Y~7_-|>?9Z3=8' );

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
