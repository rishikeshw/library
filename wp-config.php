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
define( 'AUTH_KEY',         '~evCB7rdy=_(HY0=K?Xj0P}wU!XC^Mx!]{9Z#$>LZN(--f01oq6SFv?7A4?<UM<K' );
define( 'SECURE_AUTH_KEY',  '`Gbh^gDCC3Io}C[qa$@bO_nSc)3z+<?ggnmS/Cwk~&6H_WZ9#-kk E(%=K$}=OJj' );
define( 'LOGGED_IN_KEY',    '8cUj,]0>0dr^E]A/ph;Dcd <fm5?6R0Pd#H]w=>C5W*NT%$C=xIihN5zbjch^YcP' );
define( 'NONCE_KEY',        'WR^gA;fT>uV9$`3p#2-L/5`Ah>C)zZJhNz1GTSoSNoKVo^8NEsYu>V>6He=a)?=5' );
define( 'AUTH_SALT',        '>r6rL+0`uA[nU{D5zRqV`Tv-4[lQ|g:z.H:(2*woJr8:a2YSng@|{obUJD9SeitR' );
define( 'SECURE_AUTH_SALT', '/L=y0q~>kDE(u|L#A$#+n:!P;zP}f1+#K~kR$eH3TSRy(?SsDf11y#*eMU?H^!]K' );
define( 'LOGGED_IN_SALT',   'je;l*5sdtepJ^bNb;q}l<ae;{o#e{6[f1@;?q$Y$:.`=RW2grquHQ3fAkThr>wu[' );
define( 'NONCE_SALT',       '-4Jn;R>YaB.#Y#]7).9DxBk6:.}]{. N=)}pu${2]%|]dW_)i9m4F rcI73|<_$,' );

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
