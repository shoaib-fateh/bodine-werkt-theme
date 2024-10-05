<?php
// Fetch blogs (custom post type)
$args = array(
    'post_type' => 'blogs', // Change to your custom post type 'blog'
    'posts_per_page' => 10, // Limit the number of blogs
);
$query = new WP_Query($args);

get_header(); ?>

<div class="page-wrapper">
    <main class="main-wrapper">
        <section class="vacatures-hero-section">
            <div class="padding-global">
                <div class="container">
                    <div class="section-headding-area">
                        <h1 class="h1 vacatures">VACATURES</h1>
                        <p class="hero-subtitle--vacatures">Een beter salaris, fijne secundaire voorwaarden of een betere klik met je collega’s? Kortom, ben jij opzoek naar meer werkplezier? Vind jouw werkplezier met onderstaande vacatures!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-section is-vacature">
            <div class="padding-global">
                <div class="container cc-small">
                    <div class="containt">
                        <div class="blog-area w-dyn-list">
                            <div fs-cmsfilter-element="list" role="list" class="blog-list w-dyn-items">
                                <?php if ($query->have_posts()) : ?>
                                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="<?php the_permalink(); ?>" class="blog-item w-inline-block">
                                                <div class="blog-image-wrap is-blog">
                                                    <div class="simpleParallax" style="overflow: hidden;">
                                                        <img width="380" parallax-anim="" alt="<?php the_title(); ?>" src="<?php echo esc_url(get_field('photo')); ?>" class="blog-image" style="transform: translate3d(0px, -1px, 0px) scale(1.1); will-change: transform; transition: transform 0.4s cubic-bezier(0, 0, 0, 1) 0s, scale 0.3s ease 0s;">
                                                    </div>
                                                </div>
                                                <div class="blog-content">
                                                    <h2 class="job-title cc-blog"><?php the_title(); ?></h2>
                                                    <p class="paragraph-detials-medium cc-vacatures"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                                    <div class="profile-block">
                                                        <img width="50" src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" alt="<?php the_author(); ?>" sizes="48px" class="profile-picture">
                                                        <div class="normal-wrapper">
                                                            <div class="title-small mb-0"><?php the_author(); ?></div>
                                                            <p class="mb-0"><?php echo get_the_date(); ?></p>
                                                        </div>
                                                    </div>
                                                    <div fs-cmsfilter-field="categories" class="text-block-2">
                                                        <!-- <?php the_category(', '); ?> -->
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <p><?php esc_html_e('Sorry, no blogs matched your criteria.', 'textdomain'); ?></p>
                                <?php endif; ?>
                                <?php 
                                // Reset post data
                                wp_reset_postdata(); 
                                ?>
                            </div>
                        </div>
                        <div class="similar-jobs">
                            <div class="head-form">UItgelichte blogs</div>
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
        <div class="section__blog is-featured hide">
            <div class="container-large-blog">
                <div class="w-layout-grid blog-grid">
                    <div class="content-right">
                        <div class="stick-wrapper">
                            <form action="/search" class="search w-form">
                                <input class="seach-bar w-input" maxlength="256" name="query" placeholder="Zoek blogs" type="search" id="search" required="">
                                <a href="#" class="search-button-wrapper w-inline-block">
                                    <input type="submit" class="search-button w-button" value="">
                                    <img alt="" src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/6675621e3d7a76a90d05aeaa_Search%20icon.svg" class="search-icon">
                                </a>
                            </form>
                            <div class="featured-articles">
                                <div class="title-large">Featured</div>
                                <div class="featured-block">
                                    <a href="#" class="featured-item w-inline-block">
                                        <img width="90" src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/6675621f3d7a76a90d05af2c_Feature%201.jpg" alt="" class="feature-image">
                                        <div class="title-small">12 unique examples of photography portfolio websites</div>
                                    </a>
                                    <a href="#" class="featured-item w-inline-block">
                                        <img width="90" src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/6675621f3d7a76a90d05af10_Feature%202.jpg" alt="" class="feature-image">
                                        <div class="title-small">12 unique examples of photography portfolio websites</div>
                                    </a>
                                    <a href="#" class="featured-item w-inline-block">
                                        <img width="90" src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/6675621f3d7a76a90d05af20_Feature%204.jpg" alt="" class="feature-image">
                                        <div class="title-small">12 unique examples of photography portfolio websites</div>
                                    </a>
                                </div>
                            </div>
                            <div class="categories-block">
                                <div class="title-large">Categories</div>
                                <a href="#" class="categories-pill w-inline-block">
                                    <div class="title-small pink">Product</div>
                                </a>
                                <a href="#" class="categories-pill w-inline-block">
                                    <div class="title-small pink">Engineering</div>
                                </a>
                                <a href="#" class="categories-pill w-inline-block">
                                    <div class="title-small pink">Technology</div>
                                </a>
                                <a href="#" class="categories-pill w-inline-block">
                                    <div class="title-small pink">Company</div>
                                </a>
                                <a href="#" class="categories-pill w-inline-block">
                                    <div class="title-small pink">Saas</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
