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
define( 'DB_NAME', 'SurfNoRip' );

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
define( 'AUTH_KEY',         '/K_|TD`MQdXo8!NOqrk ={L`7iAT|&rS=-|u7?kXUlR4L)$51B7 2xUP0<PCvcQB' );
define( 'SECURE_AUTH_KEY',  'y}<2v9}$mgjA}WGUdWGW$y@(n$H6r*QE7GL7[1kYbB5pAU$~6LjV}Zsn|iPFJ3{r' );
define( 'LOGGED_IN_KEY',    'wf.J3{V!4&<~9-pW+M]Bb8_:o>2%MKC[7^TFSVK*fcVW|K-oEniru1]<o7Tq^0o}' );
define( 'NONCE_KEY',        'Wu(P|f=)<aER:/O5L@m|s}XA9r-7k@;vQ&Xf&ofz0_`eUD=PXYWuC!k^,*k}iZkZ' );
define( 'AUTH_SALT',        'S_l9@1KQ)^?8JfYp>jH;6^+6e27prc|e<+:`of#)beU{V)CTC%+%;^/+WZ,)9eiL' );
define( 'SECURE_AUTH_SALT', '(D7^yHl5h*.)iqNJ3y%Y15@yu1swf2),3^%(= 1HKtoG+p73$;qe-gt)L,)m`BN=' );
define( 'LOGGED_IN_SALT',   'U:C^P*y)l+{2l^P?PP]OM_Csi=4G]S3B(#(z~C6:f)iwT#TCLX9xDkLs-|$Q^ONR' );
define( 'NONCE_SALT',       'XIk{q&5<~@F<#+=g25><L:>@ynv0|ycPy=^s?Uu^i.-BO/&)Y+{t8#ilQ!;aD:P^' );

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
