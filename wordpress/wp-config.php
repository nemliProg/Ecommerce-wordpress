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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!a?*f`kYWc$U$qk8M~+BW$-k^hM5y,y*&rOo^qI[3OepR?p?cS-@l:RG@Oqe,2Tb' );
define( 'SECURE_AUTH_KEY',  'SmRqeZ| sk`ftkY>$?DDTP6XtS3=Y*O4CK),kXL(:S{u=8yJ/4$M9xsY[>QJC>V;' );
define( 'LOGGED_IN_KEY',    '1dvM 2[N0n1u@<p}j+=#!R89~R-(LtrX>&t>7 [wbuFA#ZEz@0D:25n!b)p5=f;)' );
define( 'NONCE_KEY',        'oZyR)H+2FL7PHdlWmzITzJOw.*./wGRKK`%etE,rk`&M$`-GZcgTVSPLHF%be8+t' );
define( 'AUTH_SALT',        '>-`v~?|_k&:*:O8.l?B$*1u6c%Y_t2,nT^2P`/L!s}M%9)J8H5oMJ{O(Rs] ]aCk' );
define( 'SECURE_AUTH_SALT', 'l.NUz22:ut/FH5S#Y{>0U_O}]FimtdAS;uH(q;<Srtvfs,D6>QgpZi53N9;A8X;c' );
define( 'LOGGED_IN_SALT',   '<1[_io 6HMi+7DchCsEVra<tHI,qTk>3QLT}#W%+JC&@3|Q*IOoq-Du7I,_qI6uE' );
define( 'NONCE_SALT',       'R{V4GSG?D:UR@Ofb/H%0C-}{!^511/_?8`8ShD*1ZWe+[?-:7)xU(V0p;:suOQx-' );

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
