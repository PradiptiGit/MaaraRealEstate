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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maarareal_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         's34wtYq~8,EZ_cL*O1ph(NW~w$;j1YXmIlFQLh-zfBn;I:CDCKf<)dj-!scLCQYw' );
define( 'SECURE_AUTH_KEY',  '/$1_%ZTrh{0;2UKA9!+fyH((T!Ynf8Z)GmC:XD(?])TS]q[UL+uWc0.cG{=gVozA' );
define( 'LOGGED_IN_KEY',    'Y{:Z1vWhnO5 !6S)/ey-W[a., PByXnEx;o%R7$&-39_rSgAY1l]y< zi)ViqWU_' );
define( 'NONCE_KEY',        'hPx^(@*dJ]EKKb@&(F#2BR.;.U;c}s9]%eE):)%m20F_*{|sAF43jWcL7Nywk!z ' );
define( 'AUTH_SALT',        ':yuF5KvOG`w$Db4Tf+^n,PHxsa,VW7$_-HH4x Sq`nqi.0|qO8Qkn/KV>{[~2PX%' );
define( 'SECURE_AUTH_SALT', 'BuW-|z+DP&I;P7cVCVG58n^)3+rqc$}PYnNGX_w5%=6`H5KfnH}jRG;qqSxBMniR' );
define( 'LOGGED_IN_SALT',   '>Dn^Q_()V]^x-1_Czvbu<+`RVZz|]$YL}+C(^T^Pj|:BdkB9/a&|{?xz<H/zqEXZ' );
define( 'NONCE_SALT',       '3U3%niIqSh<I7u;t<?4jgGl;42?2,uY]HDw>U`)M4 jQx7OQsQ0K@7K{`ulwF55S' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
