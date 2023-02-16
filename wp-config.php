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
define( 'DB_NAME', 'wp-ergonomic' );

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
define( 'AUTH_KEY',         't}IyfBMw_5>R{sOo83dl0ds]0NN;i)h{uyiH#Ojnj?Dn.lVh7~CVb>xGIcpggk&u' );
define( 'SECURE_AUTH_KEY',  ' l.&MBC-Z4o(89_C_P$Aka!#:s?/R`_ND S3I>VOs4N`k<,2xCNfh]#[]<AL(DpT' );
define( 'LOGGED_IN_KEY',    'Iiq0|8G2c4LHG;&J=0Sd}TvvXXUe4]YKfV1UXX}nD%vf23AU[,ppx(89t2DA:EWr' );
define( 'NONCE_KEY',        'd(I1[Cfzz,[X.Ca6g8eT:_B*6Jyvdc&]F|tKCPE%t`4TxBG5xm.7BwkAgzUXe!4;' );
define( 'AUTH_SALT',        'Hu4UwqcnZumQ-Pfs^@N,, Qzf!4gqFb`!chN@s<qn:L5!0Hn 0e{>Yv>#DXj<eMX' );
define( 'SECURE_AUTH_SALT', 'MGqt<Q 2D3`F=cRX+0W,DI7{>R~YgCWvd|3xEvXN(yF%-K:*`Lh39)#@,I.+orja' );
define( 'LOGGED_IN_SALT',   '$h:b5W2rbi>qrIyRfjJ1^~4q[$SnW-O`g43ZP4(ReNl1BQKzj|}:BS*0d3an>`uG' );
define( 'NONCE_SALT',       '^p<mL-[B;{t|+S;n YE2_uki}.|25[!EzSyiT]P%{,9,{5oE0[9MMq]Pf L%kZ^3' );

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
