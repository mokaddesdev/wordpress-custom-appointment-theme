<?php
/**
 * Autoloader file for theme.
 *
 * @package appointment
 */

namespace APPOINTMENT_THEME\Inc\Helpers;

/**
 * Auto loader function.
 *
 * @param string $resource Source namespace.
 *
 * @return void
 */
function autoloader( $resource = '' ) {
	$resource_path  = false;
	// 👇 Changed to match your actual namespace root
	$namespace_root = 'Appointment_Theme\\';
	$resource       = trim( $resource, '\\' );

	if ( empty( $resource ) || strpos( $resource, '\\' ) === false || strpos( $resource, $namespace_root ) !== 0 ) {
		// Not our namespace, bail out.
		return;
	}

	// Remove the root namespace.
	$relative_class = substr( $resource, strlen( $namespace_root ) );

	// Split into parts.
	$parts = explode( '\\', $relative_class );

	// The last part is the class name.
	$class_name = array_pop( $parts );

	// Determine the file prefix based on the second part (if it's 'Traits').
	$prefix = 'class-';
	if ( ! empty( $parts ) && isset( $parts[0] ) && 'Inc' === $parts[0] && isset( $parts[1] ) && 'Traits' === $parts[1] ) {
		$prefix = 'trait-';
	}

	// Convert each remaining part to lowercase and underscores to hyphens.
	$directories = array_map( function( $part ) {
		return str_replace( '_', '-', strtolower( $part ) );
	}, $parts );

	// Build the file name.
	$file_name = $prefix . str_replace( '_', '-', strtolower( $class_name ) ) . '.php';

	// Construct the full file path.
	$resource_path = APPOINTMENT_DIR_PATH . '/' . implode( '/', $directories ) . '/' . $file_name;

	$is_valid_file = validate_file( $resource_path );
	if ( ! empty( $resource_path ) && file_exists( $resource_path ) && ( 0 === $is_valid_file || 2 === $is_valid_file ) ) {
		require_once $resource_path;
	}
}

spl_autoload_register( 'APPOINTMENT_THEME\Inc\Helpers\autoloader' );