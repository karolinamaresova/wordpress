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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'yXURA|*5VJ2iS6 K1BBqPAlys0gdy%E |f<]Wd]#Cj@0mn78{TOysbu{{MlB`kAm');
define('SECURE_AUTH_KEY',  '!JE?3;Y?[-[7Xt7IW ~n8(,ILe?4MmG<9O2Eb[;?)Wp99d<@{mh.0}].W*kEFh`t');
define('LOGGED_IN_KEY',    'Jua`!Qr+>bSeBkM@veb3]`:0+PQZ9IW-]ku]hT~T_[C|[g0C?dD*;:_O-.%2$}X)');
define('NONCE_KEY',        'f_2E#|ebm9PDlZ~qniB N~p*jNmZnjPjz;%:JJ!q{leto4tbv3vL&8lvzhYnhi^9');
define('AUTH_SALT',        'SzT?:!ir6oeM4T~83!2WhwtCPKPx[LsS4E|OT:CO2fU5E3|^JHugR45K_c_Ur05B');
define('SECURE_AUTH_SALT', '%lw]yCi&b(v0H`(h7|c~|Ox wJvzZ#Jb8UU]jc5?p,D~U+c$R<<@t+#wXR%1x+FE');
define('LOGGED_IN_SALT',   '[d(;R>%=~hoiT`rhwes_gr}0/&i({%WZo}<mvOAWQcMcD3$0tRM(jz1?81N;LoHG');
define('NONCE_SALT',       'Gf+<zGe7_V$xhsL}:6TfLug!DW,PMw>D|yC?zK]@4u!?_qCsg#iy_<&8Sg2~65]9');

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
