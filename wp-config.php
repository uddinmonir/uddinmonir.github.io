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
define( 'DB_NAME', 'git' );

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
define( 'AUTH_KEY',         's+8U=GC Px?fco-Q}zJ!F}6WRx-O^.Z6-?;.9Q=%.!Nq?s_-jt_:+n4Jij d|nC]' );
define( 'SECURE_AUTH_KEY',  '5&ftFG5+o0ia;Cq1kbs4yR/%FbwCgE<Yo@:T[sdPx.Gcq`3)9vb~jg;$.q3-^wC3' );
define( 'LOGGED_IN_KEY',    '+v#[XU)f.xf>!YBm8Ua1C.RUQTPxYXDi;/XBR`iMD{aHzMd?k=]?2opdrueDH6]^' );
define( 'NONCE_KEY',        'HsmmLvH>(7GAE#LIGR!z -mG-QMw`lOU`1w0[L4eHi50B<Sr)~$`wg1N6b_qZvhu' );
define( 'AUTH_SALT',        'z|K;jB=0TK4mQ^%#QB?[}t{6q9y6!RHGmBgH)<r$Zr9a<f^]V$HjH4w<526EZxLP' );
define( 'SECURE_AUTH_SALT', '<P)cw?To*]jqnQ[z>MrJ9rG.ZU4t||;%]}=okU<ZF9BUn%wn8Odx,-YPy=#!o5|)' );
define( 'LOGGED_IN_SALT',   '&Hg4-*G6E_%  %[c6ZX*1Tr<~y|b|VN,vFD)uXWbRMRz3|`@@Qsf&X(W|6c>Jx-.' );
define( 'NONCE_SALT',       'mtL(Vg}^Ut<hs*$Qcj|4aSQ(Oy`(.+CJ0F,T=8TT8wH[Y?6QqG(VA}uBzd]hS}L]' );

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
