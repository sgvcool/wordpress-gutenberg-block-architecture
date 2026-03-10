<?php
/**
 * Plugin Name: EW Custom Blocks
 * Description: Example Gutenberg block system demonstrating scalable architecture.
 */

defined('ABSPATH') || exit;

/**
 * Define plugin path constant for easier file access.
 */
define('EW_BLOCKS_PATH', plugin_dir_path(__FILE__) . '../');

/**
 * Include shared services.
 */
require_once EW_BLOCKS_PATH . 'shared/post-fetcher.php';

/**
 * Main plugin class responsible for registering blocks.
 */
class EW_Custom_Blocks {

    public function __construct() {
        add_action('init', [$this, 'register_blocks']);
    }

    /**
     * Register Gutenberg blocks.
     */
    public function register_blocks() {

        register_block_type(
            EW_BLOCKS_PATH . 'blocks/content-grid'
        );

    }

}

new EW_Custom_Blocks();