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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'sFbJE{*3<+_hwAS&c)I#[|[gD9,]~3Ls!EKiFn_2hLeyUo&6c$dioLNrH1z-BZ<U');
define('SECURE_AUTH_KEY',  '}qAOaH#U}7D# }!mGe+3V 0<VG<=A4W^I+}Vzje&3_M|cfip=kd-UGk7}Ba;I;<C');
define('LOGGED_IN_KEY',    'UgD.RG;_E:|h W74|AQ#fL-k[.TXv@%6Pm/a7}1&*6%_+2=U&OXf%X[N26fkuP75');
define('NONCE_KEY',        'q6)-hF/.}9!GKJ^vdTLbu+t)d=V|z(NPgHC;@ph[kNjpa+w/0iF[<5W.jYZ}RA@u');
define('AUTH_SALT',        'QM#-Lbc S+v@{^tH}=bB4=6Y0yKIEfJJBW(ga^i|Q^*0Lg%b?h@5yoeKb)(98N$<');
define('SECURE_AUTH_SALT', 'sTbfe[v_A=-T7{RlLV-m#_VYgk-)XS;4cl4Dq#yB0a7yq] :JxtmjI]sC8e1 C.A');
define('LOGGED_IN_SALT',   '|<eJ;K=?]G/0(LK0FNC,+%3mP|@|(6U (1%IJbkA+Y~?>3.K3/w2`kw[=@dDp-ps');
define('NONCE_SALT',       '3GIA_-4uo:wj7`6208.+)~V*-q6zQTDZNsYr#H!rlqPzq2fI6nuGEdxi!52Txr* ');

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
