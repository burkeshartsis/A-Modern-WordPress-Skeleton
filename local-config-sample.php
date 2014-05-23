<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'ywamthailand_c' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

/** Disables WP Automatic Updates - WP updates are handled manually in Git **/
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/** Turn debugging ON */
define('WP_DEBUG', true);

/** Turn forced display OFF */
define('WP_DEBUG_DISPLAY', false);

/** Turn logging to wp-content/debug.log ON */
define('WP_DEBUG_LOG', false);