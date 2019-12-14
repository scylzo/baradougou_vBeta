<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baradougou_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gb^V[C0y7XfaGe4| .=Dc3E6rP(/LO,.6x)tpI+aDgsx#^$p7:dxix*Fe@G<kHR5' );
define( 'SECURE_AUTH_KEY',  'lVp3*b5.(h:2}0#mmal#>gM6/ycR|}79ZLtkHsg[Pi] dRsE7)YCd%*-MdlaMMw7' );
define( 'LOGGED_IN_KEY',    'Ns^7pGyKum=}geY0%J}wNoWg3em2-=L9-+Vetq%kCWdLv:K:`Nr`#y1$[x/5FCl7' );
define( 'NONCE_KEY',        '@AQssko2..K|dB^l7J5)Y_yEB%WGi(AYlYWT8%c=<IjHJNOWpsF&RZ;P51_mn)~v' );
define( 'AUTH_SALT',        '1~mIH>zUuApH.~,roDj95q/R&*R[@pl4^k!o-K7NRvi{P6fPF-]e=}brP[THAc#W' );
define( 'SECURE_AUTH_SALT', 'q%*E+Ex1+! jG_Fef9K|mlkqfYfuZF(vB#;$XZf}$a7Z$ySpb^[(sn/K_;)R8t]g' );
define( 'LOGGED_IN_SALT',   '9T1:N+T}v!nY<rB,_^a~le;yx%VERP*jQ(5KiR*/C[biK:swTe9`A5.xuAM-1UMj' );
define( 'NONCE_SALT',       '` PtU>1$A7Ck%b=bRpjl#/Wl;11Lpvq1)SgTBbT>F32(-II|;njZd|n=}VBaqx|m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
