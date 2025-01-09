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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`aD0j^NJZ~7gYB04~7V9:jEf1&5R*tE26kFS@|Kp^>hAvu/vg%:tW84{rDGwY#{q' );
define( 'SECURE_AUTH_KEY',   '^x_EFvN8*hB<5:s_s>j!TCm% qiQ[.`]c$ovr!di9Y[$qsG_vR:Yq6g`~H%>+Pjy' );
define( 'LOGGED_IN_KEY',     '$^LJ:?]?i)D[l5iC%~_}]Dw42Mc(S~1!6s)P[88~~qkpPKUx3,)V)suQHcAD02O1' );
define( 'NONCE_KEY',         'tLzL){Nd*,*6N`T1Ofi};nAoCkE/sy3@iF$w7F(urUyc3`O9=hp_oeIegoNuU.ml' );
define( 'AUTH_SALT',         't>)>AIbz{Kst)D@.kaY]? Jw[YOkqvThI(J290mcK[HG!g8bt)l$%|#1c6{0<m@D' );
define( 'SECURE_AUTH_SALT',  'v2Ibc%-SwCL D(m/B+o)>]Gn.`Nbb=Pk 7.&[=pEyO{6lM/A?qw!X*@~e!TfM:tD' );
define( 'LOGGED_IN_SALT',    ';pq~vH&S{oq! Gi?}z=5[x<a&MK;#.qSw0QH@Faq.{S KFr<9mlDqZ*H~kf5fTXE' );
define( 'NONCE_SALT',        'n^iPv;0z321qwfv8P)XGY.(tpTz3I{hJZ1{C,%.,~3-F15}0$I9SWyu C*qE0&Wt' );
define( 'WP_CACHE_KEY_SALT', '$0{m~St/7#AZe3sfwzQVjO!q0-rylzb&Dv~I/Vx}|}=b5>V3FO+<QPu{TF@_+aZL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
