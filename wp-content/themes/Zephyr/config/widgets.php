<<<<<<< HEAD
<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Theme's Widgets config
 *
 * @var $config array Framework-based widgets config
 *
 * @return array Changed config
 */

// Update options for Social Links widget
unset( $config['us_socials']['params']['style'] );
$config['us_socials']['params']['color']['value'] = array(
	__( 'Colored', 'us' ) => 'brand',
	__( 'Desaturated', 'us' ) => 'desaturated',
	__( 'Colored Inverted', 'us' ) => 'brand_inv',
	__( 'Desaturated Inverted', 'us' ) => 'desaturated_inv',
);

unset( $config['us_contacts'] );

return $config;
=======
<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Theme's Widgets config
 *
 * @var $config array Framework-based widgets config
 *
 * @return array Changed config
 */

// Update options for Social Links widget
unset( $config['us_socials']['params']['style'] );
$config['us_socials']['params']['color']['value'] = array(
	__( 'Colored', 'us' ) => 'brand',
	__( 'Desaturated', 'us' ) => 'desaturated',
	__( 'Colored Inverted', 'us' ) => 'brand_inv',
	__( 'Desaturated Inverted', 'us' ) => 'desaturated_inv',
);

unset( $config['us_contacts'] );

return $config;
>>>>>>> 676c6ed3ea2781a8ef08b445789c78df38727548
