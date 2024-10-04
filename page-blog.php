<?php
/*
Template Name: Blog Page
*/
get_header(); ?>

<div class="blog-container">
    <h1>Blog</h1>
    
    <?php
    // Query for the blog posts
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10, // Adjust the number of posts displayed
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // Pagination
    );
    $blog_posts = new WP_Query($args);

    if ($blog_posts->have_posts()) :
        while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
            <div class="blog-post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-meta">
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                    <span class="post-category"><?php the_category(', '); ?></span>
                </div>
                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                <div class="post-tags"><?php the_tags('', ', '); ?></div> <!-- Display tags -->
            </div>
        <?php endwhile;

        // Pagination
        echo '<div class="pagination">';
        echo paginate_links(array(
            'total' => $blog_posts->max_num_pages
        ));
        echo '</div>';

        wp_reset_postdata();
    else :
        echo '<p>No posts found</p>';
    endif; ?>
</div>

<?php get_footer(); ?>
