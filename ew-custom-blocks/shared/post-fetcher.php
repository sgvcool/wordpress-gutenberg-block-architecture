<?php

/**
 * Service responsible for retrieving posts.
 *
 * Extracting query logic into a service class helps keep
 * blocks simpler and allows reuse across multiple components.
 */
class EW_Post_Fetcher {

    public static function get_posts($args = []) {

        $defaults = [
            'post_type' => 'post',
            'posts_per_page' => 6,
            'post_status' => 'publish',

            // performance optimizations
            'no_found_rows' => true,
            'update_post_meta_cache' => false,
            'update_post_term_cache' => false
        ];

        $query = new WP_Query(
            wp_parse_args($args, $defaults)
        );

        return $query->posts;

    }

}