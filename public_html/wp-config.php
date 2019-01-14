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

// ** MySQL settings ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
	define( 'DB_NAME', 'fictionaluniversity' );
	define( 'DB_USER', 'wp' );
	define( 'DB_PASSWORD', 'wp' );
	define( 'DB_HOST', 'localhost' );
} else {
	// Live database settings
	define( 'DB_NAME', 'jaredm11_universitydata' );
	define( 'DB_USER', 'jaredm11_wp148' );
	define( 'DB_PASSWORD', 'gJzuqu73WEpLGxfvZEv6' );
	define( 'DB_HOST', 'localhost' );
}




/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!q)+Rs7=Q+7j3=BkW,+/3*tv>kJ,nh~1Q,9mQOpUOgJA#qh}/NpZW1(^a1p*#o^5' );
define( 'SECURE_AUTH_KEY',   'N/vq]w4J3qLnyZwE~F/O<NMu`!= +s$)jcdHi}!;cD8fLutig$sMD_Ph#K[A^tlB' );
define( 'LOGGED_IN_KEY',     'I7{>DYsLL#nou _DDA0fs?^hL&4d|d[*`zxI%Z}6A{c/M(f01E8Fz)|02u+sX[R^' );
define( 'NONCE_KEY',         'l~if%<8wxIA%Qj4kIfi*bD&{aM;E>}Kf_@w&UDx(b*a1QRy289vTe-nGxx:#`b-<' );
define( 'AUTH_SALT',         'Eedk*r%{;rRpC<0Vjk,Cukn lj-R;zJF|lAxyYMr0j>:$&~QwEtE}2_Z#nrzQ3m4' );
define( 'SECURE_AUTH_SALT',  'Epg>!QJ>s-v@$i-afPqi=.YN29%<;x5Y=pVxUFjK?.%Qpj.LGs]F#.8/mo.N,Dr|' );
define( 'LOGGED_IN_SALT',    'RLe~z/]Iq^2Z1Ryvj)%VP4xR*Ygcuj#IGe:2$#h#=wSZpFmksWe}@ThG3*||?{{u' );
define( 'NONCE_SALT',        'Lted__yGqJ5^zcER1n]0C2K*2{WGzX]A8hua0lc4+#W^^UZc^6.Wn`NT{1a>i6qH' );
define( 'WP_CACHE_KEY_SALT', 'e4wv>wi,u3bN8P?$|;a=4d>Z7^tUiIr&L%K{tb+L;s+bKnnmfFzO=9?hsHA@o9C.' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
