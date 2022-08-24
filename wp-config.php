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
define( 'DB_NAME', 'jet-consulting' );

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
define( 'AUTH_KEY',         '?zn<-U&*bsL:vgM7^gLq`_T)$.]LY,8d`_DY;ScF7}g$?O!:0IG&sKY03}:=)%8D' );
define( 'SECURE_AUTH_KEY',  'GUM3~I5Of=A2Xf/Ok2Ir<;l*VFt#<u&,=IZiOXPU(I;w56oAf23K1.B.%hE[`d_9' );
define( 'LOGGED_IN_KEY',    'VD8U7d 2$cYw;okEr]^kl/?Pl-~>4<#}vL+g/hNYz5I,nq-i`AA9:CVFhG!v}a=5' );
define( 'NONCE_KEY',        'VVH? ,Q{ak)+<U~l-OKS bfHv6;RK5##bjKY[wi7%<puVe.EF@AF=8F2/MkGVP3#' );
define( 'AUTH_SALT',        'wTRUP]@PUxGMC.vs91Ob B*SA#LZ:b|x]viG{+[rLx*6e!PBAdo]8N,Y6i7pwaMa' );
define( 'SECURE_AUTH_SALT', 'W&RaBO[gA27Ox=.7} 8F>!+s#Wod.-O,2adh~rZwnZOW5ut-BslB)B`/BIEgQ@*R' );
define( 'LOGGED_IN_SALT',   '<Me(|5#G@kLunq;)IAh:8se>73mQO?NtA(xk%V-wGXW^&#h;X7!Ga,h_i!oJqC$Y' );
define( 'NONCE_SALT',       '1<4q0OC30:k(2mx2qq<[-;FkFH!,R1^4=HAU<)P7(9uO!8WPqVk`<4g+w$7eKn}r' );

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
