<?php
/**
 * Plugin Name: MyGuten Block
 */

add_action(
	'init',
	function() {
		$asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

		wp_register_script(
			'myguten-block',
			plugins_url( 'build/index.js', __FILE__ ),
			$asset_file['dependencies'],
			$asset_file['version']
		);

		register_block_type(
			'myguten-block/test-block',
			[
				'editor_script' => 'myguten-block',
			]
		);
	}
);
