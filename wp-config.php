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
define('DB_NAME', 'devtest');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'Vo!$z!khF3:XIWde>kH0SaIpyab^m-7p!Ey-xQgK]c?NX(D3]-]IxEcLR=O9_9>T');
define('SECURE_AUTH_KEY',  'X0fINc&6.-Q#`5T]tsG$aDvB<]@A s]`5l{u&cwM9js?^;K}<W2]CFi[J*4   8E');
define('LOGGED_IN_KEY',    '<Gj*Hk[yLfw7`x0*mM!hYwPYB0A1[a++H (AF=AUkA_!0[`2z<Q.@zz?kfGV.^P*');
define('NONCE_KEY',        '/_2_qk_M&PYbhI:nXVW/^`/7h4([m>T=rgHcL.8;60Z9$lj_`P%,`(zm4Du|JH*,');
define('AUTH_SALT',        ',h[S4~F`qk<AI4$fy,v ;Q/$=wV7C@PJ1tP#2FrUenm6zZzZAi}1vLT5~PrgO`dK');
define('SECURE_AUTH_SALT', '-`uyq]{mC0T-@DXj.|UdqW:Wa7=Zcp,.:xIo95EbLA1<|T}LRfB3lWMxk&b}f+1H');
define('LOGGED_IN_SALT',   '(E<f@s`H5+]np0`)SOe4bm$TJW0cjVcR!HrB|;28UKZuA;8wxR*Tqg9lYDu1{xq:');
define('NONCE_SALT',       'g=XDW$,.FD%`)-iWRs<CE]SzC(x:5E3;&]x+#JT?_JJ-:e>Rhtu0UH]s 3@]N~GQ');

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
