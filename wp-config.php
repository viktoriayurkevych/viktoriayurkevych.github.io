<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'Cafe' );

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
define( 'AUTH_KEY',         'Fs:|%%|C*B6_t*pWHZue&VvH+jL|TJxjyUfEmBK}HTF)ke!o*4f5o%jD,F^^qb)<' );
define( 'SECURE_AUTH_KEY',  'wN/<)#<X{_io3 %ck^hY2A1Qf4F<FN=WnF2Cm:/#HAOhRe&$KJ>A?DwvkI6S]_ g' );
define( 'LOGGED_IN_KEY',    '8E#$v1sO5-,.t,h8;]nA-6vxK<D,k|K#m#y,sXiPVs&1T<r7n1?G(s[&%1nYEzfx' );
define( 'NONCE_KEY',        '(eLZ_w)Be:c1cjRl1=1w|AdVf8c.&D6ZS[6lu/uMKBs~)B0lt0^@/zDq]&+yY6V=' );
define( 'AUTH_SALT',        '<X#%r+NNil&nLEK7GFup5xicjLA<6?hf)]g%~d>>D7S[gswowN$J#!M<0ld8 S~&' );
define( 'SECURE_AUTH_SALT', 'P -VGG16~Oh|>LweM1cNuNN,~!jc0p)j&5^bQr%A9NbX~#mxg$g=R%^&axNb>p6l' );
define( 'LOGGED_IN_SALT',   ':~w5O{cE+*lK[)m,GP%ni1J1Dn#eTq~w2l_j{qR^m`K|miIsZqE`bF*$q~p[_/48' );
define( 'NONCE_SALT',       'W9WFco.O}:G$^B6a8U8.W;{@3lpQV/|fe3p,q2i>XpL3.T3v3oXGA|1},NWXH4;s' );

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
