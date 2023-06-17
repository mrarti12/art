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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'n>E1cIAxK#v`:ZWAV9L)KAEc|a=0J-Zj38.}Gg)a1Sy]t @OTC(%Y$xDg/HK;UkY' );
define( 'SECURE_AUTH_KEY',  '9O__9=Wg%o$Vpw9H$QVVIUTBAs{bO>=~6zrLn* X`j~/ TxJ.t1reP2m2U p81g4' );
define( 'LOGGED_IN_KEY',    'msCOjycRH^on,m()PJ(?Cu3srUO[DPIQg7`K}p-bWm55qDt;;N%z*u4KjzSAyn8=' );
define( 'NONCE_KEY',        '6pP{-:6!Rca>s-K)g?}Ny}t*HAa#tW(wIv0 @U~dJ=ZlPW[Nt>JKTREtxmaSCWQ?' );
define( 'AUTH_SALT',        'Cpb4eIQ<`f1%Q2J9vcD7QC7u(4N:bUqP1q4-k|Mlc<{UU55wJUF8cui]SN@1zN./' );
define( 'SECURE_AUTH_SALT', 'e-D4!2=VHQ]5]S{3=You42laV.JefcNk{DO21Fjhku+2dd!~d,7t2Nvz:ZaIT5H;' );
define( 'LOGGED_IN_SALT',   '4zdCNys5g@9+}Y7IHvgZ3oaVw4$7v(B)wzjL2llNc;`{]#^<r4/m,Q|tbi*Jj05t' );
define( 'NONCE_SALT',       'h(#?(T--}@sV/YRlt34s|3pR#YiaoOVEBt[_Pj,)(mwbp2w.Q0?sSY=z~3Q-[FJ{' );

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
