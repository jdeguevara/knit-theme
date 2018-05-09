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
define('DB_NAME', 'knit_database');

/** MySQL database username */
define('DB_USER', 'rebeccaborough');

/** MySQL database password */
define('DB_PASSWORD', 'ACCEBB');

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
define('AUTH_KEY',         'xzWipM0(vxB:;_e+6YNv{1KL,!@^SP4Z,vL+,l!gdo.U~eRE6jI0+#V:~p`dJo2b');
define('SECURE_AUTH_KEY',  '@u;!J0U37;TpQ3`@,dPwj8Z(tgM,8A2hOui5jH(d(F;(),9OJ2hq8TDPuDs@x*7E');
define('LOGGED_IN_KEY',    'ljA%qK_F$MTe~5|hishJZpN<?frm13FJaP>Q{=xKx7a.ynBXCT0Ac0.Q1`L./Xt|');
define('NONCE_KEY',        '(p?RZ^u(oP+WWtDefzPSEt6_W`3rL0;AqjEeIYYD=Q]%YP&[92d]2rl]X]LjZ=Qe');
define('AUTH_SALT',        '&osu$]kcY?B(/2GxRHK@!=_qXQfwAe^B$MoMT37HDdESEte8RY^5tuKI=H9Z2=20');
define('SECURE_AUTH_SALT', 'u5oUfRAt[*hv8Q |ha0c~4#Q=M~+t5W7J<Zl1<Pb8ULZ/T3BG@:n>FyI@iLny*sj');
define('LOGGED_IN_SALT',   '#z [y.OJ,N$)K<6L&<*=@* GcwxZf,>7Z2Z|zNMlbm0sY~Ep47^|Daw<V%tCB`pp');
define('NONCE_SALT',       '=n[_/AYWRQ&L.ww^Ip)H%o%bX|.NP-ny[Q&_R=IrIjZU{j])EZYt$ $v=;~6]M&`');

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
