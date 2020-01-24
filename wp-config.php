<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'yuth_fourm' );

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


//Always ask FTP 
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aJ_XrFYh{qc41[z!-WzRQW,9:2^hE_PkqQ1e5gq]kdbr0cWNAZCLO9nC]q1*H4IE' );
define( 'SECURE_AUTH_KEY',  'WEAROn,DI+znuJ,jV:lo*u=9P1XMOuabuLO<mv{O_AmP@w-rM&Y?(#<t:)#.iB(a' );
define( 'LOGGED_IN_KEY',    'GJV;H7a%6h9pNwcZzNI||A!bl(uPK7KQl%(wcA{6?2c*tLdq_Qy1h*Mf@=VityE0' );
define( 'NONCE_KEY',        'X?cY^|dC?X5r1`TE|[NeqvPidYM]bC@KH6)/)BV#M4R[23YQO`oJV_B]xd<eTDuu' );
define( 'AUTH_SALT',        'TX( C gzE`399Edvv>lK<a ,_i+`.`w?KnO=fRRdV{cCe4F>A[!KC}k_KLqo|#mg' );
define( 'SECURE_AUTH_SALT', 'sC7Y@A~@PudLegh$Xs^>L=-wmSpz!&bx.aE6x&%9W&)( xt`2w>g2nG2W4D$}!xq' );
define( 'LOGGED_IN_SALT',   '=(?A,qvq/$dij2.LpU=qqm+rMr&sD5{?x6#C8#ZGc#3W4lZ~yO-{D=J+eKAd2be]' );
define( 'NONCE_SALT',       '.7z=x(Uu9!,j-}g&(p2*Io6LdPz@WEwna5U>h6um@Wju~kNPDm])U)xkVirpELyp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yuth_';

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
