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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jobPortal' );

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
define( 'AUTH_KEY',         '57}YR[rNxj|sqB6v|p:xt$5kFW^yE(F7wC2[{TZtUvmJb[UgyHR@*BIv`x~f!yc$' );
define( 'SECURE_AUTH_KEY',  'O,,@/IzQw!vs%qJ*NTBppIl*nny#_&i~FZfSd8nT<J/2AC$KAv4tzSuYV6MnkRy4' );
define( 'LOGGED_IN_KEY',    'Iu(W}KlaK{wt )GS1X%K$NIPFhzy&S3a2vHs[zQ#To7LEr/H=H>,*Lmgxd<8+_MK' );
define( 'NONCE_KEY',        'vg3>XAIiQ(I]e8tT1.v/LsisI!:3uf!m_>]=h+J{m7Xkj XGjcZ&l)Z!Y~=S`WOS' );
define( 'AUTH_SALT',        '5GSaoW6u3Aq_K.v%LXOb~KZV~>M!+8(h|5Z<w^jSq)8woIjYd*k|V0mZ7$7zeO}(' );
define( 'SECURE_AUTH_SALT', '_{W&|BK`}JH*_ NVwyz}B|roG7>+[V)?J #WB-9#LfpUn@,?F_!weU.g>cer)n])' );
define( 'LOGGED_IN_SALT',   'JY&a$T,C13vjrgrJvw(Hw(D?Qmq&(!emV|hH:9=v`Ly0Z81rVT}0|2}8ZMeE`~O[' );
define( 'NONCE_SALT',       'D#; S=f9Zo<h?T#}*gV:]`g$3$U[)0T6r2oGewx9YO3&^,}>hTYA@;FgtglH/MJk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
