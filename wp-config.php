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
define( 'DB_NAME', 'iamchun' );

/** Database username */
define( 'DB_USER', 'iamchun' );

/** Database password */
define( 'DB_PASSWORD', '1234567' );

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
define( 'AUTH_KEY',         'c;*&XOe2qP2or6 dpO/^_lZTfY]6]UDGvz^d)5>$;$[ZB4Wc!~H}R&i,7&Z=S:@z' );
define( 'SECURE_AUTH_KEY',  'TXcM7qO$%0L{zlzMU6tV&^9r4[]62{[UW(uV!4mE^rwjAQI|OdhL~l~&ZUdrGE@w' );
define( 'LOGGED_IN_KEY',    'X{LAPx2D4-[R7~dzZ$oVCM}Tz>)8SP`Sr]TA+Ijl!8p=`[+(siG!i,N|tkH.aQ=?' );
define( 'NONCE_KEY',        '=dk*3E{O3@1XUwP|.DgT>wi*dn 6AM`4CTF5]B&w</&-/JE6w5F3@p2e(eX(t:tv' );
define( 'AUTH_SALT',        '5qg~ni4O-GaFq gwZipTwQds(.b38KQd^Dqccka)%F<gu`AAY_vSClt1Q#;5#&|7' );
define( 'SECURE_AUTH_SALT', '9 g@R7wND058S[hetZQK8NK(D.K%SPZupZbdJr{t}n n_PLJL:ArP;Qw7FxQ}hUN' );
define( 'LOGGED_IN_SALT',   'CrbOaKe0`>;#7~7V~`Dx?U/@rros@utX5G5#JULtdW):|XPV5Zs-f75+US0bT^;>' );
define( 'NONCE_SALT',       '=NQ^c{Il]+-`>{Q7@4bwGp0qJH>aW1g@m+&#[0Y]:Alq~niCK#c]A;i4abXb^pkM' );

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
