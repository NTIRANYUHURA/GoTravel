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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GoTravel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Q55/.1;wJ5+vkT#dXy{7= wJX6jn,lzsoe{;RdZA`,hdmAD@7 43^):Z}*N=XGnd' );
define( 'SECURE_AUTH_KEY',  '+6=7#nUp?No8>}t@Lc#J$k1K#kmci]EtgA_]5.ql^$DL<&x<a{NU[gXR)aiu8!2g' );
define( 'LOGGED_IN_KEY',    ';By45$!qY:eRGS&}3Y6N1`B<f.Z;?i!C@{,1!vOA`ZMC*1}KX14/SUy#?5{yI<aK' );
define( 'NONCE_KEY',        'Iih&7UcGjbQioqHK9]b+/7`%N6L+S+K=Og(i~G]O<(npNC}( ro;`(v8I)6-&|-F' );
define( 'AUTH_SALT',        '>6(rHFsI*2+%>a9KsU0GN1yVkJQb!?L^vZ0L=0[wumbR}.T,Ym.z3SZQ`Ow1aN=,' );
define( 'SECURE_AUTH_SALT', 'Y=NN1w_?KshjSK_VxYZYAjRrK-O+e-EH#$8t0gEp~5jM=Qu*Tnvc~bBv<b^.lci]' );
define( 'LOGGED_IN_SALT',   'qgua+*[!#q/O<kA^]BXBOHmTy<)PK9.j4oCmsg:}KAP/`WJ+Spv4u%LUs:Z*P8)/' );
define( 'NONCE_SALT',       '9625076+H86KMHj:Tjvz`TCc0+buSX%+n};ZG%4S&brF%9;XJN)6@mR#]P^cerZL' );

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
