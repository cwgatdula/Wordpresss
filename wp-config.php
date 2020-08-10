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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '7iuW&4hJOiK2&2bE4z/Pi;yMg/:2G4T@Tg#hq6#;W&D59e$X8SB_!t!A}re@.w(t' );
define( 'SECURE_AUTH_KEY',  'c@Gmf5$k`I*O1`MkE+qDj7%js)w&u<N=9xagQw.tK0v2+G{:8FIs9nI4f(sF<a:N' );
define( 'LOGGED_IN_KEY',    '<$H+?H0+6mgWr[S.`@IZz[|pJFU8cBD%h}D&-A$3xgBU&tuENyvEZ,vw7EY8OD@X' );
define( 'NONCE_KEY',        'M_3U)3qQsz`B6sy@9[nB)?a$8/_Jef|i<nrXl27UCfc|q4]$>$FKvfGs_>g^,/=H' );
define( 'AUTH_SALT',        '@B[I`-M2I>hz HCvx5#y-p&{7UvqY,ngw_?ex&kIM(;O+@FX9vhh|)?NC^>aiev]' );
define( 'SECURE_AUTH_SALT', 'Hsi 5j#*CgH/b;ZjRG],0akx(hi^PskU(ZI :8(%t[7xh/5.X&rnyv<Ld|~s&xMi' );
define( 'LOGGED_IN_SALT',   ',Zf;5ES vPB]Qwq_Hw.eRm|6Y%[k5-AOC-]Ap[tRwVa8kb<x9X/R+BDsDe&aKv/w' );
define( 'NONCE_SALT',       'i)=8qJ2^m&}~F,.]# gl-+9@7Ik#PPET.,5#Y3F1@jFsc,`kY}Vr8uD.&MV6mfCz' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
