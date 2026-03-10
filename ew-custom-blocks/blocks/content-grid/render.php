<?php

/**
 * Server-side rendering for the block.
 */

$posts_to_show = $attributes['postsToShow'] ?? 6;
$columns = $attributes['columns'] ?? 3;

/**
 * Fetch posts using our service class.
 */
$posts = EW_Post_Fetcher::get_posts([
    'posts_per_page' => $posts_to_show
]);

if (!$posts) {
    return '<p>No posts found.</p>';
}

ob_start();

echo '<div class="ew-grid columns-' . esc_attr($columns) . '">';

foreach ($posts as $post) {

    ?>
    <article class="ew-card">

        <h3>
            <a href="<?php echo esc_url(get_permalink($post)); ?>">
                <?php echo esc_html(get_the_title($post)); ?>
            </a>
        </h3>

    </article>
    <?php

}

echo '</div>';

return ob_get_clean();