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
define( 'DB_NAME', 'library_db' );

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
define( 'AUTH_KEY',         '$^&tED(YrRCb|zIJ~3J9jM;4Cw7K!VYJ!PzWBP.7>5fxC~VGlN-cRu4[[;:nf^M ' );
define( 'SECURE_AUTH_KEY',  'K9p/pI&6 @KV v6<hx!d@h,>-(k)M|K[YD3qd]Xq3e,2yrc3k.r$u?7?}FTtMvp<' );
define( 'LOGGED_IN_KEY',    'xN6@rhW&sQ#cjGrz2BZ-v0TL(fl1ElJfh{TGuEDVztEBq7zgmQZ1Bct1m#0a.!~F' );
define( 'NONCE_KEY',        '6D-_qN1GfW[?:0Pj(JX{N=4>jmadLr7$KvWk9P3,[reW4t-Rz7Ha|[F/]cAW}3+.' );
define( 'AUTH_SALT',        'oY#4I]TH7rJCMOi~]kEQ81|cVo#29d#?pdZ|NiV!%TZ4cXMzWSAI[1h[,AGqJO<H' );
define( 'SECURE_AUTH_SALT', 'Li!`Q7gOa(3db4OetQ~1r/B,]R,}<lxWuS^nysF<$^8(^YM=9?wCShdcnvFW!oK/' );
define( 'LOGGED_IN_SALT',   ',cpXN^en0_7gyM|6vl+M_b%/A3LsLeNFlumnop{sfjmxN F-?_{9(y=ioR0xxY7g' );
define( 'NONCE_SALT',       '71)7kK1F=zy${l8SI+Ne iqDCZ`F)r3wX!}_R]OY; xtKpMkJ!5}}UUO3:W&^)P]' );

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
