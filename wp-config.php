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
define('DB_NAME', 'on_campus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^jT|rwSGA>9-%kbCVc+F&xD-qvx@!3B(r^wrb2Sm9;2M6j,aDq>&{o%;;;Ytl2=4');
define('SECURE_AUTH_KEY',  'T@35KN_S7Vp>%b4n&0^[Yr?%,(YTcKm0_e7D#(H)+`oaJT{zTqKe$-|{^L*dnzz~');
define('LOGGED_IN_KEY',    'EW@_Ttm(9|i;f*XEJt|r.W)5^=aq3aZ;PX`y%+OuM2=kGJ9J$j+lk?!!gnb,m9O-');
define('NONCE_KEY',        'm6<OYA]=OxP0G4HIGi^lau:rNxXxO_+LK12;,(|~+EB54hS,%0DraHII<8.v @(+');
define('AUTH_SALT',        'jB+ dezy,eF=Y;.p9c*W-QMoL<_c}D0*4jh=WhK=!;sq>y/CRH%kHd;FGga.8nf,');
define('SECURE_AUTH_SALT', 'cQb-@2%q5$k!V9!tdT~qHq y{W%]8?Y_QTdgWa|@Vkg+M+Lj|~z(&$)o?%h{Wqny');
define('LOGGED_IN_SALT',   'K[QS)i}?0>j0?|`xxBE*(ld9MBMsN?Z|[$|<DFNdDe+]eqxNioU~.F%p(YxR9OST');
define('NONCE_SALT',       'n5$Q_ND@RYNO3&K`>eYtrr$R3=L^f6bj{_-1MsWQMsJ(X6T.-itNO/GX-V}p~}q|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
