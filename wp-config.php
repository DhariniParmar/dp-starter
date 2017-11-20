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
define('DB_NAME', 'dp-starter');

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
define('AUTH_KEY',         'wKVr+0TMtKLX2L$O MqX`[_,U=J9Wv<qXHZ3qTx-tt4sIO5D]0Tcgd3SWLD;2Gv4');
define('SECURE_AUTH_KEY',  ' e7,9I@*$]?JYO9E30ge#Kkk BSX8g+]`8_^CK]kOtKHus}MQ}c9N$5(oaBtD;N0');
define('LOGGED_IN_KEY',    '62WW*cOK|Rm##=OG9R}VVI7j8(*!+.W!8YQwmP.Qv#[]Pa(_$yLE9a|r+Y,S6dIu');
define('NONCE_KEY',        '*9;#M~e|b8;%axwkMrsJ#OeyxGi%(kl+<](#N)!ff[@bU1M7XndWHHw-{tbLffeL');
define('AUTH_SALT',        '%SxiJccGFFPm*R&(&u&9DhuoPi.#H4!qH3Z=.<+O)Yl-Q2|9e@Tkd8$J.S*@1Od9');
define('SECURE_AUTH_SALT', 'ME5a$vC_2w@<hyq<]i_u-?u]-a(}s>f)=/g<t_Wb73~ca#Ve}GV_MWBkS3nwKL-9');
define('LOGGED_IN_SALT',   '{?5Tn,FZ-X{(sqn/SSj=]buX@*.B~Fy2xx`h~d-0$pRO-;S6-a%#jBrbc)T?:6{^');
define('NONCE_SALT',       '8o/Zy$=hy+|]M,hbArVygF.v3sh}(.4Nf}]i;Ml-VG.GPy,_y>Z^%`$*+UiJ*uWK');

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
