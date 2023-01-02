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
 define('FS_METHOD','direct');
 
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aransmethod' );

/** Database username */
define( 'DB_USER', 'js' );

/** Database password */
define( 'DB_PASSWORD', 'mami2020' );

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
define( 'AUTH_KEY',         'P|}Q2*W$lP.pm:z]JaZ [.v2zT^pp9r?zf.RnHzFX_[%k=.m7}H9fJKQ5eEG~NZB' );
define( 'SECURE_AUTH_KEY',  'IO:Poz;;0.~/EbgW|C:`&K/Y_929p^EemDXt2W:Uw]ZFRs:}F8_(>0ZS0gJpo&S^' );
define( 'LOGGED_IN_KEY',    'rb93U5ED@CqRwkUwY&V+e.(DVdD_:Wdu(%V@Vn@-x5VIJ>/O(g4h7tr0M@1#o//~' );
define( 'NONCE_KEY',        '0)QS6Vn{`~P0oTF_`]yM*t[K``K1Fx8)!@Om5KbRRcn`}^qN^cl5[cziUC[BHpq6' );
define( 'AUTH_SALT',        '<L;HTQg`I($K{}~S.3|3Kk{K|%<%ID(rRG9Is+RNf^gPN9sK:^PW<Kh3:F#3(M8 ' );
define( 'SECURE_AUTH_SALT', 'NN6!~UK+&U.(^d[Rxvz;9AurB.Y0#@T:XYXZ:Eq}[=GCDy3^BMc>X4i!%IbyO!R%' );
define( 'LOGGED_IN_SALT',   '}(g#A[uHM3PTjXBHsg^y)$#3,TJ@z699.NFhTD1=C^+eY7k.O]VafLqZYfvX&viY' );
define( 'NONCE_SALT',       'M@3{QKa{V|WEjbVF:RZh+b&3 /]5~3a{{7Mk.]UYCp>SbXuU,j&DK~v,yCgH&=OZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aransmethod_';

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
