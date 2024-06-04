<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'digitalsparkitservices.in_db' );

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
define( 'AUTH_KEY',         '+VKWC :&Uf8EROf`*;M1xO6Q^C1gWlCH9b.Cy+MD*sbDVY2[&U~{*K6U]bHPJ]*;' );
define( 'SECURE_AUTH_KEY',  'j%qrs3.39BAuEG@h2l7g9kfby8wu{8tQF>O>S`ix{BgOzr;>j{zIZUh4(&xT|D5_' );
define( 'LOGGED_IN_KEY',    '(HNGWKiCM#%r78MT]k`MTwTvDzK*Y?CW^83Fz<PA6~ps k4P9:&4{Upw]UY%kW]}' );
define( 'NONCE_KEY',        ')Wm,<+_,VtwULxZuth4VnTl4tLBQ:/`^Swf;@bz-(DZ?}@8mMDx(g-GuA?_VGj}G' );
define( 'AUTH_SALT',        'jQ#5!Oo^e+?1]4euE!Ms&epHM rpqGKjmA.!4>R:d38GQsh12M|@WRg?cN1r5?2X' );
define( 'SECURE_AUTH_SALT', 'gK{zk?J?Gh)^B!*wcyY=bl$64`jOZW_;gCjX$_ZGAC}Pt)++[[A*?J%LSiTUAU{/' );
define( 'LOGGED_IN_SALT',   'Msx|>h[=]w=c|xB,7|oW.?BH}}((1g2&oHH:kqFK7sJ%~2!l;[+LI0C[!hu~y+X5' );
define( 'NONCE_SALT',       '+/^qoo<[=n|4;Gvcjtp*ye4@^J +-%_P?tj@=5;l)jqUeg*t.AgNoVDGG^xaX*u+' );

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
