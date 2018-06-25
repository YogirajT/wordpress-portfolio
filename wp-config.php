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
define('DB_NAME', 'yogi_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'xiLKEX2Ff@b&kmpr');

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
define('AUTH_KEY',         'n[>(!dBxy(L}; aO,9Ut&!i]>`2kPkdn#[o_jH2:^tgV:qCnu|$NzHw/]FLs5JWS');
define('SECURE_AUTH_KEY',  '9 !@R70p&luiSt_*-aef!UKS@Il ?j+ AG4rc4^-;t9+Nk:,d+Wb&(C,f.Ur>9YV');
define('LOGGED_IN_KEY',    '>D1sn3vPlDIE}^Cf6p4<61jyA<TRgnF;Q>ZS#tvgGX|0Ezx-Ix8*@QTySzTYrq+]');
define('NONCE_KEY',        'vHF{I!t)X2M-3A):N(aLf}9SLb@1k3 7B}(p.Fw<0sqOKK eI1 ^h8r+bc6,q!% ');
define('AUTH_SALT',        'lNv-z25(as_JhuSa&:1Q=B=om>$kU|)*L2Qp6%|KN{l~.+N2Tk/)nIs1fQ|vjziY');
define('SECURE_AUTH_SALT', 'oHt)=Y$bs[[i+Qg`KT<`^YKn!n3*|HNbY7nAa37U+O;BY;vHWOc0UwRl173HuqI<');
define('LOGGED_IN_SALT',   'eF2E)}LUn$Tgu}Xw_v-W/r9@q]O;S. aIS>IW#NM|b*nzVoH:wE?n+*xH]YQRBNG');
define('NONCE_SALT',       '~7Bt?)B341q!Vi,E^{&42}yHgxbOPp`}o>o/gsGg#M+A.>nv_yF/S9y$nB8~+%G]');

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
