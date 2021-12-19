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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'shlu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kfhgsklf48' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '&w0D+IJeBjwM5475M|RHl`a:^B+n_B$7u#%&ZKZi.Upv^bxWVx-T~Y{oW$y}w)UY');
define('SECURE_AUTH_KEY',  '~P<FH^.jlY7gdbwGpR9k[n}~)+mb5iou95*T>Mn6.`Hadtno!q+TV:4kbJP+wCcf');
define('LOGGED_IN_KEY',    '`:%5a-3jL`fx@/5GD{|&n~wAkCnEGt^b7&=(gc).V:=Gs7JTQ](`}Woy-x]1I3i3');
define('NONCE_KEY',        '5.ju%/kTSrpWg+K|n(FKP4M$9Sh`rn&MFLheQint,w.aPCZ7u~NlCb56S-[Mjo;:');
define('AUTH_SALT',        '|Z(}^ok(% v~fm~:E4hNRx-^{G?sQ}nLt/&}F/NcfdMPaFBz~&y-F1s_I|D?-y(8');
define('SECURE_AUTH_SALT', 'CjM_rXm.YMA%s[]I*I~Plym+Zzp.#hgZTN5{q>+b|/DdDqFWu.#K=iAk?Wc&3b^E');
define('LOGGED_IN_SALT',   'UH}&>>2wGO:x: h)9J;R;8CVRYj|Oea5|]Bz%`+m^t.Bl/[:q%f;#{bTb(-qLEg{');
define('NONCE_SALT',       '}yT2:dFbcA&eF2_[_B{=1=r`>l.t]K%`AmvP+/-@z{9hX8>jD0yo~Mz<*njvwzQY');

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
