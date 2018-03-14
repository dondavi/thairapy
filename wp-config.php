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
define('DB_NAME', 'ddvimysql');

/** MySQL database username */
define('DB_USER', 'dondavi');

/** MySQL database password */
define('DB_PASSWORD', 's#74a(djSeek^Kiq)7');

/** MySQL hostname */
define('DB_HOST', 'ddvimysql.cznxeue1u7nm.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ')!}y k#66D_b`FI2kQm2]vb-xvWPLli=|^DOa()!k=l4H)bB9W51%Bz@=-[!7PH,');
define('SECURE_AUTH_KEY',  'nPM]4}#[N:xDIU~$z)}U 1-,$y I,-{Mg(0yN-Z)YLc3u9i!boqt0)e ~#Pb6His');
define('LOGGED_IN_KEY',    '^f(h8_a9BK_.CHKwsYpzv-oX];TU*pQYwaCLf5RFbezC)5Lh~[8)io!bQdnB qj:');
define('NONCE_KEY',        'lDTr|U+9$s0Bp2p.ptw=t.l||N-U>Z.gAEK!r3cdu+1*B<Sz@}|Y=4~|kn0J*I|-');
define('AUTH_SALT',        'rfV|zV!g7[@`yV#)?+JCKZ(5->a{d-m^Nhfba0My8JBNxR~n*Lv-0#8+co*Z:$j5');
define('SECURE_AUTH_SALT', 'aagJ)nSy.63fp)5+YpHd*%cE@A3 }(0h$<_kq%25[DbGGR+#VedTx;~2)]->]iz}');
define('LOGGED_IN_SALT',   '34`nKrw^o8jgw8p*gm&MlV|_hCS11GwaS_!YOM%1=Av.X[Kgw:n<x@|qD|(7+$><');
define('NONCE_SALT',       'Cy|r7n[<U{fo6<gxERaa6bJmA:?+B:Bu8)^r*+I]|ZX`~//X`_F2RKTdPoum2Uwf');



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'thrpy_';

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
// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


                