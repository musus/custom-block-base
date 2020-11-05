<?php

function example_block_register_block() {

	// Register JavasScript File build/index.js
	wp_register_script(
		'custom-block-base', CUSTOM_BLOCK_ASSET_URL . 'build/index.js',
		array( 'wp-blocks', 'wp-element', 'wp-editor' ),
		CUSTOM_BLOCK_VERSION
	);

	// Register editor style src/editor.css
	wp_register_style(
		'custom-block-base-editor-style',
		CUSTOM_BLOCK_ASSET_URL . 'src/css/editor.css',
		array( 'wp-edit-blocks' ),
		CUSTOM_BLOCK_VERSION
	);

	// Register front end block style src/style.css
	wp_register_style(
		'custom-block-base-frontend-style',
		CUSTOM_BLOCK_ASSET_URL . 'src/css/style.css',
		array(),
		CUSTOM_BLOCK_VERSION
	);

	// Register your block
	register_block_type( 'custom-block-base/test-block', array(
		'editor_script' => 'custom-block-base',
		'editor_style'  => 'custom-block-base-editor-style',
		'style'         => 'custom-block-base-frontend-style',
	) );

}

add_action( 'init', 'example_block_register_block' );