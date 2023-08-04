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
define( 'DB_NAME', 'Grapmedia' );

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
define( 'AUTH_KEY',         'kz~PTRg$?z;v48Rv#rAw&VM}wq;24sl,V%p*b2~zW eM?b`Mi]C|hTtY;#%?c-iH' );
define( 'SECURE_AUTH_KEY',  'm[2&.Mw4z1pyRZ;sz*chvF:@q6,Rs=0KHYA@ymje%q(L&Fx~[: %KhWHss??d z7' );
define( 'LOGGED_IN_KEY',    '9]=&WMNT:g:&je|k#@_nWdBn%BX?AG{DH2ZM>19bCS@A^fXF]3n1]z]5V:%e}loJ' );
define( 'NONCE_KEY',        'v;g8$(9K=D[55hqVr:rpR]`dA&Op^{9Y8?1(F!<~Z,e/(OQ0l}n}n>TeW]%w:jOT' );
define( 'AUTH_SALT',        'q!H0It,|o:sIDuXypL,5$0dtU|56n|n;C^X1b(!v+fP)1t;y-r_,Ok6(e]a?Gmdj' );
define( 'SECURE_AUTH_SALT', '`ep{bvc;.Y1i4^ {N,G/&%yushR6%I@G!YI@jCj2F;6XC>o-M!ud{.Lx,j9%jU${' );
define( 'LOGGED_IN_SALT',   'C{tIo(c[(tTAJ)m#=Ck>gX0L!9kb!Z;%m8Z]T#=3@C++#u}Ixd^7B7f)4y/r:Rj~' );
define( 'NONCE_SALT',       'mX^]S_~6E /Idf<f7rj_+$.td~SJFC^D~]`Zde$Vjzi5Z!qu?W$MTs-ub]BOYU/Q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Grapmedia';

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
