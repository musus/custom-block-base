<?php

/*
Plugin Name: Custom Block Base
*/

// Do not load directly.
defined( 'ABSPATH' ) || die();

// Set version number.
$custom_block_info = get_file_data( __FILE__, [ 'version' => 'Version' ] );
define( 'CUSTOM_BLOCK_VERSION', $custom_block_info['version'] );

// Set asset URL.
define( 'CUSTOM_BLOCK_ASSET_URL', plugin_dir_url( __FILE__ ) );

// Load all files in inc dir.
foreach ( scandir( __DIR__ . '/inc' ) as $file ) {
	if ( preg_match( '#^[^._].*\.php$#u', $file ) ) {
		require __DIR__ . '/inc/' . $file;
	}
}