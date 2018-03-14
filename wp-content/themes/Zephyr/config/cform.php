<<<<<<< HEAD
<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Contact form configuration
 *
 * @var $config array Framework-based theme options config
 *
 * @filter us_config_cform
 */

// Using titles instead of placeholders
return us_array_merge(
	$config, array(
	'fields' => array(
		'name' => array(
			'placeholder' => '',
			'title' => __( 'Name', 'us' ),
		),
		'email' => array(
			'placeholder' => '',
			'title' => __( 'Email', 'us' ),
		),
		'phone' => array(
			'placeholder' => '',
			'title' => __( 'Phone Number', 'us' ),
		),
		'message' => array(
			'placeholder' => '',
			'title' => __( 'Message', 'us' ),
		),
	),
)
);
=======
<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Contact form configuration
 *
 * @var $config array Framework-based theme options config
 *
 * @filter us_config_cform
 */

// Using titles instead of placeholders
return us_array_merge(
	$config, array(
	'fields' => array(
		'name' => array(
			'placeholder' => '',
			'title' => __( 'Name', 'us' ),
		),
		'email' => array(
			'placeholder' => '',
			'title' => __( 'Email', 'us' ),
		),
		'phone' => array(
			'placeholder' => '',
			'title' => __( 'Phone Number', 'us' ),
		),
		'message' => array(
			'placeholder' => '',
			'title' => __( 'Message', 'us' ),
		),
	),
)
);
>>>>>>> 676c6ed3ea2781a8ef08b445789c78df38727548
