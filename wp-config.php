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
define( 'DB_NAME', 'CUID8594' );

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
define( 'AUTH_KEY',         'qX_[,Y=`I*EkFj7fo#{<FpKB.gyG/0-N>fviQ)7Vmk*(!;lGWH16vVT>MNQ#(We&' );
define( 'SECURE_AUTH_KEY',  'Pa^i$f;9@BdLvuA5|7{v 9xGrHFU)}Cbh?->@LZ58O4,/f|ay>9fQ$0Vh2spx5a+' );
define( 'LOGGED_IN_KEY',    'tSIevh9Z_GD7UO8U{e7HD{Qyqo9Ds)wzo#EnH:J*h2;)>T{gFimM0S/PLJj|-()f' );
define( 'NONCE_KEY',        '0-5 o/9qaZk]qSH:m 7>$DLRS_+ /IM]{mq@_~F/SQ!TtHx]D_r[Du83jsF>py,@' );
define( 'AUTH_SALT',        'q&gq]h`m@(jzYbP#O}8@dIJJIM&cp3F/BT@+4zO2b]JSK)m,2isiECqTa&D (mi{' );
define( 'SECURE_AUTH_SALT', 'E^^,#9g$`&w=Z}(AZ}volJL*`_,x>H}2Z9VcXGT]ywC>^=Ic=Pa{q$?(Q;`]TNr+' );
define( 'LOGGED_IN_SALT',   'S-OhC2waH$A<e}_69DX+ <QZ]Yom:fQ{u%+YCwCKDmX/aikkQ}BRvg{j~y&z+i>I' );
define( 'NONCE_SALT',       'qVKb{d$Cp$5?aADj48mUWei=vDD|P?V1E?J_{[*O*pq^D22YZ*,*3Tq&/obnyfow' );

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
