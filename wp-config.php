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
define( 'DB_NAME', 'Fashion' );

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
define( 'AUTH_KEY',         'N^_`;I=9cCDOJu s3j3lZ`h!/(j:^IOQfgX5K=!;:Cim*JASuL=:Vs cUQJno_IP' );
define( 'SECURE_AUTH_KEY',  '0^Qcp,ebDTs`7*-$N,lZ>ySr<s{}P[D$DlBF[;nt,PhL5G]T@Q:0^LN%xD5XbZYC' );
define( 'LOGGED_IN_KEY',    '>$L,q6+W.b=0a8K=|%#+AE0VY_bJX>BFi?NGwImq[td]ijw]S4oP@<3m;$iMVWfi' );
define( 'NONCE_KEY',        'L}E/FH0iz>_M8tUn(/*VBkQLT/OT|=+Ei)uv~QgUz$hZy1x!B]`,a;eHV77lIjC0' );
define( 'AUTH_SALT',        '=K5iA|F{5gC&L~D=43U|X2TBC}JcHoM,UHI^<x? ;ajkc;mDQawXUZ9>@OU@*.X0' );
define( 'SECURE_AUTH_SALT', '}6^$N2&{D=O>VQRb-V9_h>D7RcMC|ZItU_)Il5znPc.E,0bSzVW2*?!+#c!4i$!w' );
define( 'LOGGED_IN_SALT',   '&NEV4coXb5p1Z>(]=h?OLBF,Z40Nh%;K?KWjS~a1iTu@Ys- ^=+i-o6V=^]NF@PP' );
define( 'NONCE_SALT',       'i7A];XNdr?Y,p=Cz4<+=@vrX1)Io:t)4sE;sHxqaZB%K5*Ua2F/(>G6Q>N0{F#v]' );

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
