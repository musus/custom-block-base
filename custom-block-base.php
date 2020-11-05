<?php
/*
Plugin Name: Custom Block Base
*/
function custom_block_base_register_block() {

	// Register JavasScript File build/index.js
	wp_register_script(
		'custom-block-base',
		plugins_url( 'build/index.js', __FILE__ ),
		array( 'wp-blocks', 'wp-element', 'wp-editor' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )
	);

	// Register editor style src/editor.css
	wp_register_style(
		'custom-block-base-editor-style',
		plugins_url( 'src/css/editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'src/css/editor.css' )
	);

	// Register front end block style src/style.css
	wp_register_style(
		'custom-block-base-frontend-style',
		plugins_url( 'src/css/style.css', __FILE__ ),
		array(),
		filemtime( plugin_dir_path( __FILE__ ) . 'src/css/style.css' )
	);

	// Register your block
	register_block_type( 'custom-block-base/test-block', array(
		'editor_script' => 'custom-block-base',
		'editor_style'  => 'custom-block-base-editor-style',
		'style'         => 'custom-block-base-frontend-style',
	) );

}

add_action( 'init', 'custom_block_base_register_block' );