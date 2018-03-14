<<<<<<< HEAD
<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * TablePress Support
 *
 * @link https://tablepress.org/
 */

add_action( 'wp_enqueue_scripts', 'us_dequeue_tablepress_default', 15 );

function us_dequeue_tablepress_default() {
	wp_dequeue_style( 'tablepress-default' );
}
=======
<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * TablePress Support
 *
 * @link https://tablepress.org/
 */

add_action( 'wp_enqueue_scripts', 'us_dequeue_tablepress_default', 15 );

function us_dequeue_tablepress_default() {
	wp_dequeue_style( 'tablepress-default' );
}
>>>>>>> 676c6ed3ea2781a8ef08b445789c78df38727548
