<?php
// Include the header
get_header(); 

// Check if there are any posts to display
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); // Start the Loop
        // Get the current post ID
        $post_id = get_the_ID();

        // Fetch dynamic data using ACF
        $blog_title = get_the_title($post_id); // Get the blog title
        $blog_photo = esc_url(get_field('photo', $post_id)); // Get the blog photo using ACF
        $blog_content = apply_filters('the_content', get_post_field('post_content', $post_id)); // Get the content
?>


<div class="page-wrapper">
    <main class="main-wrapper">
        <section class="vacatures-hero-section">
            <div class="padding-global">
                <div class="container">
                    <div class="section-headding-area">
                        <h2 class="h2 vacatures"><?php echo esc_html($blog_title); ?></h2>
                        <p class="hero-subtitle--vacatures">Hier deel ik mijn ideeën, ervaringen en andere persoonlijke insights in mijn werk en leven. Bij vragen of reacties mag je altijd contact opnemen!</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="vacatures-inner-containt">
            <div class="padding-global">
                <div class="container cc-small">
                    <div class="containt">
                        <div class="rich-text-area">
                            <h2 class="job-title">Open Sollicitatie</h2>
                            <div class="card-image-wrapper is-job">
                                <div class="simpleParallax" style="overflow: hidden;">
                                    <?php if ($blog_photo) : ?> <!-- Check if photo exists -->
                                        <img src="<?php echo $blog_photo; ?>" alt="<?php echo esc_attr($blog_title); ?>" /> <!-- Dynamic Blog Photo -->
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/path/to/default-image.jpg'); ?>" alt="Default Image" /> <!-- Fallback image -->
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="rich-text-vacatures w-richtext">
                                <?php echo $blog_content; ?>
                            </div>
                            <div class="button-area">
                                <a href="mailto:info@bodinewerkt.nl" class="main-button w-button">Mail bodine</a>
                                <a href="tel:+31657757947" class="main-button is-outline w-button">Bel bodine</a>
                            </div>
                        </div>

                        <div class="similar-jobs">
                            <div class="txt-details">Featured</div>
                            <div class="w-dyn-list">
                            <div role="list" class="featured-blog-list w-dyn-items">
                                    <?php 
                                    // Query for three random blogs
                                    $args = array(
                                        'post_type' => 'blogs', // Change to your custom post type 'blog'
                                        'posts_per_page' => 3,
                                        'orderby' => 'rand', // Order by random
                                    );

                                    $random_query = new WP_Query($args);

                                    if ($random_query->have_posts()) :
                                        while ($random_query->have_posts()) : $random_query->the_post(); ?>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="<?php the_permalink(); ?>" class="featured-blog-item-link w-inline-block">
                                                    <div class="featured-blog-item-wrapper">
                                                        <div class="similar-job-list-image-wrapper">
                                                            <img src="<?php echo esc_url(get_field('photo')); ?>" loading="lazy" alt="<?php the_title(); ?>" class="similar-job-list-image">
                                                        </div>
                                                        <div class="head-form cc-margin"><?php the_title(); ?></div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                        <p><?php esc_html_e('Sorry, no blogs available.', 'textdomain'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
</div>

<?php
    endwhile; // End the Loop
else : 
    // If no posts were found
    echo '<p>No blog posts found.</p>';
endif;

// Include the footer
get_footer(); 
?>