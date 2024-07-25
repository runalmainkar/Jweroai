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
define( 'DB_NAME', 'jwero' );

/** Database username */
define( 'DB_USER', 'jweroai' );

/** Database password */
define( 'DB_PASSWORD', 'Runal@2313' );

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
define( 'AUTH_KEY',         ']T^%/wXd01A,I{P6oCe>z}i},%T$D32:&~ncU%:Jt~)#_>&Tmw7_,V=?7h%+#!2D' );
define( 'SECURE_AUTH_KEY',  '|8u|)g.DWQLAKTFTvq jDRM!69e;-4vu[gHjm}%G<cOx{a2.4:N XXe/T#Hu:.}/' );
define( 'LOGGED_IN_KEY',    'jGK62}Uc+~SgRw*-gPEieYzvrYV&Y~Wo`JMScd@9M@C@tJ8;^;ekP5~$3N*r0jv^' );
define( 'NONCE_KEY',        'BFU45VU<jJ=F4x#hT0&FaC(sq-`=#|4~>m/<|F_[0hf1LITDNlw_s{o?k /Ic2J ' );
define( 'AUTH_SALT',        '2*ncE$cLU8G3QqhQ[b:1Z0hU%^g!^uT@h:Slb0:VC`v5hPUak]9z)thKioovgCy?' );
define( 'SECURE_AUTH_SALT', 'wa[%fr/3Ayu!GxBQnAb*Qd/X~[fOPexIQ~lbAY-S%5MC|Y$;h/a%4gdv(nPXUCwv' );
define( 'LOGGED_IN_SALT',   '#XkCU^6VAP)w8mfCDDl{C{r[Vrjw`P|8wLH)At8.5Pc#~a@EglyA$f>;}[KGLgVC' );
define( 'NONCE_SALT',       'KppM#uX(^(D7jnhlKRFB>{fVsRiQG^H@_#xi{2O3WNt6taUwcNkrTV4@SW/l1Fw{' );

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
