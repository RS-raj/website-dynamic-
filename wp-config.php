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
define( 'DB_NAME', 'rajeshraj' );

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
define( 'AUTH_KEY',         'XF]*++uKcFaJ_bBQ$,[Hcv2(+d8.fI33@ j{`kbh#hXR2SAZA31Zg(<j{j{lXhvJ' );
define( 'SECURE_AUTH_KEY',  'S7AZcI^}~]iMPvUn1Fh17i4*)b9>|C.]6dm:EA6H#,3</?0h0T<v^}]^V%)[B)jc' );
define( 'LOGGED_IN_KEY',    ';j$f+aYFsG]?g1!t#4D6y-P/d6+Aw>v+iukh3JkB)@X)Ey,iAAh_~o!>E9eZv-y}' );
define( 'NONCE_KEY',        '=/c1sV~L0o6Td<&:y?hte7D93{[y}dO^4_d#ZtV;f+-ss`8QRR{HjZ@s5R%-}eYs' );
define( 'AUTH_SALT',        '#S^6F<Y={MlP3i^kU-f_J{(>(m/k*z%tshnZbzXX]0C_86<5hhC!M|}@X*--#fCX' );
define( 'SECURE_AUTH_SALT', '@Q5ts,^2tQ}o=<&B L$Mpkw>{7G6Iu7p^s*I@~WCD7B|zE!BefM&qASBBt+2b_fD' );
define( 'LOGGED_IN_SALT',   '*l$:|PJ!Y?AGv^zv._<6JBIyc tH}l$gUVOn40B_?Sj6^5e`c>(IRn|ab>(Cprw2' );
define( 'NONCE_SALT',       'X;LOtz^ ][W]WK!(!z;TiAe]YN::d{_tB=[%~$ sl-JP8fK }a$hsFa{XI5&Fu4n' );

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
