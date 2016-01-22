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
define('DB_NAME', 'DentistDB');

/** MySQL database username */
define('DB_USER', 'dev');

/** MySQL database password */
define('DB_PASSWORD', 'dev');

/** MySQL hostname */
define('DB_HOST', '192.168.1.6');

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
define('AUTH_KEY',         'd7m|(6@o2S#^OndRAWH<Jv.UFHx~?ZpEAEc{mehK4 Oh6YMQyU+r+w<pN{#Wds-M');
define('SECURE_AUTH_KEY',  ']7W(I!0P!|_*eNQ?+QWpbDaC xo Y`;sfp]_o^s C0HI&BvNB:Y`8X^NXqxS]omo');
define('LOGGED_IN_KEY',    'W$]Q3/|T=TATj${Mi-A?:c7UJ.4ecPQon>[Jj&f+X#U0]n<H7yJ/1rqEvY-Kyk(o');
define('NONCE_KEY',        '<:U>XsA%]n/R+E_r@.$Z7|n#>6MtQUe0!G9<kaw0IGa].f?NYLV9z-@bptHvbWeX');
define('AUTH_SALT',        'vpK`L<bhdX*iF[dF)|IeKK_*AO~s7R`>Rf~>-UZ7,+:QT+}?/%)h$f-7X$JycC6 ');
define('SECURE_AUTH_SALT', 'uvInq?{ww@^O=HO6=q6Hr6etD>PO~g!-5Pn3Vz?&xZl(`VhA^U+H54aGZpSr~N1j');
define('LOGGED_IN_SALT',   'MUQOI;8y;|d)qB9YpWDq7GYZr>71_y0c5Dz !cfyXh8-ac_m_d jCg?9mJkivT<`');
define('NONCE_SALT',       'Mo||)&&W+74<`5_*%b{8.XnV6BL|h^15xgnhQoG?OeGi)%XckLI1dC-mZCzU.]:=');

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
