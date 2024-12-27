<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         '0(;H>g;1y1e7FENe^9q]~j]Y|VGy)EXos7f,hU-KX[D~W1X+gk4MK}#:r*f{JX,|' );
define( 'SECURE_AUTH_KEY',  'N|@g5R]p<gMjNc2*os>|Vbv~mX5)d`!Pv%$0$V!y`s!rswFTUQcs3*Bl0oJYusG!' );
define( 'LOGGED_IN_KEY',    '9NJCdzJS/@oYJ2gAD@!qrSB<uqD^`Q&?At-=T$</;95nL+QM$>HsyOj+P;i#Rb#*' );
define( 'NONCE_KEY',        '-NHYziNSK[*p{hdiQGr5JdDgh!|*[I@NcweJINp5yFefBu>Nseur YfEAhl94T@{' );
define( 'AUTH_SALT',        'h<8x{@}d(Whi]4%y{ uVx*/>_uKBP8ZavsX&yHpnH3`M87T &nEdE.67`iOTF#iG' );
define( 'SECURE_AUTH_SALT', 'Vb1oSJ2[|%K_j^rX %Zt&V>.X.6M=k =N[$C|@e!u:0K!$3bkVnTCL6XsX04f`+.' );
define( 'LOGGED_IN_SALT',   'Eh/@%6=-n8fx$j51011N Ew71YLtAn}em9qP{p]o]kp55jauv;1zU(>4arpFma?<' );
define( 'NONCE_SALT',       '2m&J*)T$i>QAn3Mce#_-g=|u}= BHG%l{huNh:JDcx%4|);OKm^k?zxb4& [On;8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

