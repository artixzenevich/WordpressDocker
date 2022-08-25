<?php

// disable xdebug backtrace
if ( function_exists( 'xdebug_disable' ) ) {
	xdebug_disable();
}

echo 'Welcome to the Unyson Test Suite' . PHP_EOL;
echo 'Version: 1.0' . PHP_EOL . PHP_EOL;

if ( false !== getenv( 'WP_PLUGIN_DIR' ) ) {
	define( 'WP_PLUGIN_DIR', getenv( 'WP_PLUGIN_DIR' ) );
}

$GLOBALS['wp_tests_options'] = array(
	'active_plugins' => array( 'unyson/unyson.php' ),
);

if ( false !== getenv( 'WP_TESTS_DIR' ) ) {
	require getenv( 'WP_TESTS_DIR' ) . 'includes/bootstrap.php';
} else if (false !== getenv( 'WP_DEVELOP_DIR' )) {
	require getenv( 'WP_DEVELOP_DIR' ) . 'tests/phpunit/includes/bootstrap.php';
} else {
	require '../../../../tests/phpunit/includes/bootstrap.php';
}

require dirname( __FILE__ ) . '/../unyson.php';
require_once dirname( __FILE__ ) . '/framework/class-wp-unyson-unit-test-case.php';
