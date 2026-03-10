<?php

/**
 * Service class responsible for retrieving posts.
 *
 * Instead of querying posts directly inside the block,
 * we extract the logic into a reusable service.
 *
 * Benefits:
 * - reusable across multiple blocks
 * - easier to test
 * - easier to optimize later
 */
class EW_Post_Fetcher {

    /**
     * Fetch posts with safe defaults.
     *
     * @param array $args Custom WP_Query arguments
     * @return array
     */
    public static function get_posts($args = []) {

        /**
         * Default query parameters.
         *
         * no_found_rows improves performance by skipping
         * pagination calculations.
         */
        $defaults = [
            'post_type' => 'post',
            'posts_per_page' => 6,
            'post_status' => 'publish',
            'no_found_rows' => true
        ];

        /**
         * Merge custom args with defaults
         */
        $query = new WP_Query(
            wp_parse_args($args, $defaults)
        );

        /**
         * Return only the posts array
         */
        return $query->posts;
    }

}