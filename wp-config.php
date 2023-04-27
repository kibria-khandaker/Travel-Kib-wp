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
define( 'DB_NAME', 'travelkib_wp' );

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
define( 'AUTH_KEY',         '/AG@Ur$FeG)Ym6>~;OPN0[_GBl>l}Ee@5W[r&a44mSnR6W]cLNnIHX;,B+wefH(o' );
define( 'SECURE_AUTH_KEY',  '}-0tk*l7On=Z}5Fm<osa/)dtR21Y07[BMlx_.{e~~zAXuM;Xg^ysGvo#;^=Mpg}8' );
define( 'LOGGED_IN_KEY',    'jzY]|e-sPVh<>!.A/9s<;Hk$~2[K$N,4dtk>J?GTpY&N!2Mxv0a|?u&&=Lc Om+3' );
define( 'NONCE_KEY',        '(0{Kbo`u1VTagc1LVhhK6c&LR&`:lwcw0?^*(^8phXYMSCZ]{r[b?1@c:-oX{bh/' );
define( 'AUTH_SALT',        '/DWz{9**7sm~OVGq7odA@oDhaV2l^|E+ %BhThR$h+SY`,XOLT6E?WON|0y,c!Vq' );
define( 'SECURE_AUTH_SALT', '}EcgbB7ICjIQ,il6Fp Bdm6hC!|%-;u`=ZHqg}nMk:1^.B#>SsDobI(G!5h[Q#:Z' );
define( 'LOGGED_IN_SALT',   '*zbH-4]93;|=s0^?m3y{Y:*DBYv)Q2T!w?X3d3@_|q@jOXDr+lYj2O<w:{EE-fg:' );
define( 'NONCE_SALT',       'WgFdY4KXNWV;=KL7>c U{mE<nn:j4it}=z}E|{*A}s:]CGH,9BCj%A1f%2m:uPPz' );

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
