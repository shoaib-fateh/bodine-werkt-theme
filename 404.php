<?php
get_header(); ?>

<div class="error-404">
    <h1>Oops! That page can’t be found.</h1>
    <p>It looks like nothing was found at this location. Maybe try a search?</p>
    
    <?php get_search_form(); // Include a search form ?>
    
    <h2>Recent Posts</h2>
    <ul>
        <?php
        // Display recent posts as a suggestion
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 5,
            'post_status' => 'publish'
        ));

        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<li>No recent posts found.</li>';
        endif; ?>
    </ul>
    
    <a href="<?php echo home_url(); ?>">Return to Home</a>
</div>

<?php get_footer(); ?>
