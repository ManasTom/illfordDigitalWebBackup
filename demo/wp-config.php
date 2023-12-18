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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u388363396_riDzN' );

/** Database username */
define( 'DB_USER', 'u388363396_MAwRq' );

/** Database password */
define( 'DB_PASSWORD', 'o7cg8AF4uu' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '6mwImE7-80Q;*{yfeQoR_*F@nLHgL~RO98Dj&9HH<yvoR``+/WiQwlJSNsQ?DMlg' );
define( 'SECURE_AUTH_KEY',   'RM+-=B5YP7|7|~UP^GRWJW}&R6xr:ygS9aH.K7& 3:^;b.9lT%`GY1M<64N%78ZR' );
define( 'LOGGED_IN_KEY',     'T4r4(bA&Rq2xUY]Mmi[a)NEKa_;%$jI3M4[pHmuD[&Kj!)S te,],H`}8}]m|P^%' );
define( 'NONCE_KEY',         'GF4+sX?k 0oQ.0_moc+*+/Wl3NAPJYQN:Vf Zi{R=dM0&Es6 &#7wrTR-B<){>B2' );
define( 'AUTH_SALT',         'R)n8Mc$Lk}bK]HRu=|f(t_n~lkNbHh%TO<s)rIp<8&p=8vuFT/y-TOO&JE=+.>=q' );
define( 'SECURE_AUTH_SALT',  '#y*G3`QC_;mg=r.5# _7$%V&[BK,J4~&#<+PF)krF!oVc8,$zVGqx>cHR J<T9*1' );
define( 'LOGGED_IN_SALT',    'M:[+gl_9!Ak#$:eH#3j3g28#Cy~02.l+s`J$nQl(Sto@EyD%sP-{EY[~xzw7@Kos' );
define( 'NONCE_SALT',        '_wZR!JrZFZCS#:Ud6]{/<UB?J&3Z(*6e[jD2@G2^ D+_uijl,O]r|9f-gVw#VcB1' );
define( 'WP_CACHE_KEY_SALT', '{ 7{n/:1djEl+`-lk+UZJX]Ciukf}Jp8iw#~.3Ca`n?OioL[+Ob9yXR%K6-%Lc}8' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
