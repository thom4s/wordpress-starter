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
define( 'DB_NAME', 'wp_starter' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=s|I/ACm<{_S;j5Yz5SFk*8#:Hx8<1eo;k?R@&y7:)MX`uB02ORKidK#y5)Pxu)w' );
define( 'SECURE_AUTH_KEY',  '|n0NQlR-ZrN^MIn=]:z>,i]3L-Q9w3@Kw1R/VzgTPZC tq&cD&|buDcb$q#eWl~j' );
define( 'LOGGED_IN_KEY',    'T#rL5IK+Z@m/v~^:kpBnH@!NS<x-n- F[Y,a d2}c?wCwI-x#gB~8]s-Tx@{!F3 ' );
define( 'NONCE_KEY',        'Hn2ptrkyG|-eCLB1;GMm|UGMLb:4&u|dEQh4PENdU7IOs[Polub8r_gIJ0wY8MeM' );
define( 'AUTH_SALT',        'a-w]1MSMr-]5D{_=#5YE+-C=ctfa&1N0x:+&WMLdD:PK$tQDCLZOb7s-Zs5FQg`$' );
define( 'SECURE_AUTH_SALT', 'f<&eVyM`IBQB?M r?.{bjD_C~!FrG_m+X3X+/7_@-KCs%NuIs^il6] +LKl{H~$H' );
define( 'LOGGED_IN_SALT',   '2 =wODL[*Qxw^oMkJNO(^dyVK<$0R?y98W4_XCp,~?^Tp_dFHG%+|Tx-3d{;ex]~' );
define( 'NONCE_SALT',       'Ppu3qhn;k/ZV/m8oiuZNP67;P_3UDk/cN,C*89e&k>xu^BzuPdTB<7j9ktGaZg{,' );

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
