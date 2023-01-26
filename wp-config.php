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
define( 'DB_NAME', 'mv-ecommerce' );

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
define( 'AUTH_KEY',         '+Ya0YNi|DGP8=6Y!*IBC#PK|Cer&``%RSL7#c-VDH~ywt)?v*O]=5#Sa%lj7+_G<' );
define( 'SECURE_AUTH_KEY',  '_%9KQl4t <t,%[}wI?h8qON_oM.vrDoW)b}fiAgMsrj/Y@Bk@@.+f*();Slb2nl@' );
define( 'LOGGED_IN_KEY',    ' 8<OI2d%>2wSYsBzNPosQgy@Q}|!J(8yJkK9{KaOx!/NCB?=bcFOH^bD!Il9&%&z' );
define( 'NONCE_KEY',        'Hl]~y!,G*dWz]kqg[IjR2^4svb6:!20Da[cExyvv|X9Tlb3VJrhbP$.iK=6m#$f=' );
define( 'AUTH_SALT',        '7qAN+dP[mhl^h)C!_CN_2yLCXdUX|F.d(9r#Oju02I60`O@-Yz;5A^(l?:U#B-1,' );
define( 'SECURE_AUTH_SALT', 'E2OrO@VaWnxy>v{[GPsIPLL9GX:w?Hd.BeyKFlW/yeAxL-b0t/Qy!0+&#)<~YtzI' );
define( 'LOGGED_IN_SALT',   '6.&PG2pX2?6^S<ZEcj4cF}6Gm(|j!,(yM(gw@kzR3hO0.eiq0iO_.o(ZcUfpu5YU' );
define( 'NONCE_SALT',       '9*^bP65;~@h;R^U~IU(Y ZTbuf@2s1<J!NC~o_acF-,R}x&H58#zgpO2kcyn;UQj' );

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
