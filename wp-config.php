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
define( 'DB_NAME', 'travel_kib_wp' );

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
define( 'AUTH_KEY',         '3(r&@n&U$non^t#S1)G-ZHi!q/)DI$V6giQqh>H`-+C_xbEdj|t4%~*4>wk{~c4j' );
define( 'SECURE_AUTH_KEY',  'rd=b#<F!*k_zK,? x p&>p@]83NtKAw_]PHv+wh&MMH-K?[y!S!#mIvPzE%,f/0%' );
define( 'LOGGED_IN_KEY',    'AxL,9k&Ryj;,]0]qzA(Z~}4^gw<rYO!AB S7[Vb[(;Jm%0p#@rX634le3L@S~LC!' );
define( 'NONCE_KEY',        'wvs7{C|cZq/LAK_^ (^{N6M.6Y<}@^4zl5;48u4paDKXpN?Y5.Vrn`*G 6X&FGP9' );
define( 'AUTH_SALT',        ']-m!I(Wh!:`pfc8yWffNGo%%b+f9A)?*qnQf)IO#&[^au[6lq*kfWxs315<~xJxY' );
define( 'SECURE_AUTH_SALT', 'x|m.3Pw0I?noJ5c/VVQyM~%3!4gO3(Y.XM90meLnT.F0G^q_0FOuA*~yk*t70]M{' );
define( 'LOGGED_IN_SALT',   '?$6IVhrY,kyem7g+aj%th_k#qJb ?1}L5i/!@e3ZLBR_UGq<}h K2O}Y(kCkX_+X' );
define( 'NONCE_SALT',       'A-|SFFGuUcA;DNw22VwV95Gwm*v3e1 =$Y^{KQ$xfPxN+{_bZZV{kx.WekDXfzYe' );

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
