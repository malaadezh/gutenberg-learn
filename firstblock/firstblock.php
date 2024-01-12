<?php
/**
 * Plugin Name: First Block
 * Plugin URI: https://google.com
 * Description: My first gutenberg block
 * Author: Serhii Danko
 * Author URI: https://google.com
 */

function serhii_blocks_firsblock_init() {
	register_block_type_from_metadata( __DIR__ );
}

add_action( "init", "serhii_blocks_firsblock_init" );