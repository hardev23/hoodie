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
define( 'DB_NAME', 'hoodie' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'NJmWjGsY-Y0kIg{Wbhl3sOg4]IV-V|wRmXAvCS+;l N-#z5HLm{0>o8Nd0V2.A2m' );
define( 'SECURE_AUTH_KEY',  'QNj>HKXZMeO_auj,S.MDwUmMvKq fGW {vD%5Ub[WBzRZ9@uEh(Jp7!$C,d3VlU,' );
define( 'LOGGED_IN_KEY',    '$^<cww3!k(i.O@1>xg&%T-$k?tQ`&*xi%xXz;r+-T ex ]Bxh?]b*LG4`H-0(=~!' );
define( 'NONCE_KEY',        '5RqKu)Zmp67$QD>;vp2OKE7IIKQukQJ|&?205$(xCFe>LwoC=c`{TL;~d{=ip8@T' );
define( 'AUTH_SALT',        'zTih5[yIuz/!>8e):WeVv8JkceVr@EjyC!061EC<c0`53=8-Rsg2v`m_q7QkZn/b' );
define( 'SECURE_AUTH_SALT', 'K5c_Zqk|hdc5}21#BRI!Di*|NzY#UGx>*6@D_vH]8?N6(w#kL/~)MD5 $Ew&*=OC' );
define( 'LOGGED_IN_SALT',   'u!yNSoIo5ATry;$NG^pL@q[^d<~iPT`?$0OoRnI7p-9_R<)15Jg;8gm3Sh,@T]d,' );
define( 'NONCE_SALT',       'PN[?,$cLBD|A|cFd7L)vlmMbPk=TJNT]rBfVkfrlyD%$xlj3wlIiSKn5D#-a%6UX' );

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
