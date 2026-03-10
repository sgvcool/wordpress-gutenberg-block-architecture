<?php

/**
 * Plugin Name: EW Custom Blocks
 * Description: Example Gutenberg block system demonstrating scalable block architecture.
 */

defined('ABSPATH') || exit;

/**
 * Main plugin class responsible for registering blocks.
 *
 * In larger WordPress projects this class usually becomes
 * the entry point for registering blocks, services and integrations.
 */
class EW_Custom_Blocks {

    public function __construct() {

        /**
         * Register blocks when WordPress initializes.
         *
         * The init hook is the recommended place to register
         * Gutenberg blocks.
         */
        add_action('init', [$this, 'register_blocks']);
    }

    /**
     * Registers all blocks included in this plugin.
     *
     * In larger projects this could loop through multiple block folders.
     */
    public function register_blocks() {

        /**
         * register_block_type automatically reads block.json
         * and registers scripts, styles and rendering callbacks.
         */
        register_block_type(
            __DIR__ . '/../blocks/content-grid'
        );
    }
}

/**
 * Initialize plugin
 */
new EW_Custom_Blocks();