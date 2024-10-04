<?php
// Fetch posts
$args = array(
    'post_type' => 'post', // Change to your custom post type if needed
    'posts_per_page' => 10, // Limit the number of posts
);
$query = new WP_Query($args);

get_header(); ?>


<div class="page-wrapper">
    <main class="main-wrapper">
        <section class="vacatures-hero-section">
            <div class="padding-global">
                <div class="container">
                    <div class="section-headding-area">
                        <h1 class="h1 vacatures">BLOG</h1>
                        <p class="hero-subtitle--vacatures">Hier deel ik mijn ideeën, ervaringen en andere persoonlijke insights in mijn werk en leven. Bij vragen of reacties mag je altijd contact opnemen!</p>
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
                            <!-- posts -->
                                <?php if ($query->have_posts()) : ?>
                                    <div class="w-dyn-items">
                                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                                            <div class="w-dyn-item">
                                                <a href="<?php the_permalink(); ?>" class="blog-item w-inline-block">
                                                    <div class="blog-image-wrap is-blog">
                                                        <div class="simpleParallax" style="overflow: hidden;">
                                                            <img width="380" parallax-anim="" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" style="transform: translate3d(0px, 21px, 0px) scale(1.1); will-change: transform; transition: transform 0.4s cubic-bezier(0, 0, 0, 1) 0s, scale 0.3s ease 0s;">
                                                        </div>
                                                    </div>
                                                    <div class="blog-content">
                                                        <h2 class="job-title cc-blog"><?php the_title(); ?></h2>
                                                        <p class="paragraph-detials-medium cc-vacatures"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                                        <div class="profile-block">
                                                            <img width="50" src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="" class="profile-picture">
                                                            <div class="normal-wrapper">
                                                                <div class="title-small mb-0"><?php the_author(); ?></div>
                                                                <p class="mb-0"><?php echo get_the_date(); ?></p>
                                                            </div>
                                                        </div>
                                                        <div fs-cmsfilter-field="categories" class="text-block-2"><?php the_category(', '); ?></div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php else : ?>
                                    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
                                <?php endif; ?>

                                <?php 
                                // Reset post data
                                wp_reset_postdata(); 
                                ?>
                                <!-- posts -->

                            </div>
                        </div>
                        <div class="similar-jobs">
                            <div class="head-form">UItgelichte blogs</div>
                            <div class="w-dyn-list">
                               <!-- here -->
                                <div role="list" class="featured-blog-list w-dyn-items">
                                    <?php 
                                    // Query for three random posts
                                    $args = array(
                                        'post_type' => 'post',
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
                                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" loading="lazy" alt="<?php the_title(); ?>" sizes="(max-width: 479px) 87vw, (max-width: 767px) 23vw, (max-width: 991px) 19vw, 11vw" class="similar-job-list-image">
                                                        </div>
                                                        <div class="head-form cc-margin"><?php the_title(); ?></div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                        <p><?php esc_html_e('Sorry, no posts available.', 'textdomain'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <!-- here -->

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
                            <form action="/search" class="search w-form"><input class="seach-bar w-input" maxlength="256" name="query" placeholder="Zoek blogs" type="search" id="search" required=""><a href="#" class="search-button-wrapper w-inline-block"><input type="submit" class="search-button w-button" value=""><img alt="" src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/6675621e3d7a76a90d05aeaa_Search%20icon.svg" class="search-icon"></a></form>
                            <div class="featured-articles">
                                <div class="title-large">Featured</div>
                                <div class="featured-block"><a href="#" class="featured-item w-inline-block"><img width="90" src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/6675621f3d7a76a90d05af2c_Feature%201.jpg" alt="" class="feature-image">
                                        <div class="title-small">12 unique examples of photography portfolio websites</div>
                                    </a><a href="#" class="featured-item w-inline-block"><img width="90" src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/6675621f3d7a76a90d05af10_Feature%202.jpg" alt="" class="feature-image">
                                        <div class="title-small">12 unique examples of photography portfolio websites</div>
                                    </a><a href="#" class="featured-item w-inline-block"><img width="90" src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/6675621f3d7a76a90d05aeeb_Feature%203.jpg" alt="" class="feature-image">
                                        <div class="title-small">12 unique examples of photography portfolio websites</div>
                                    </a><a href="#" class="featured-item w-inline-block"><img width="90" src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/6675621f3d7a76a90d05af20_Feature%204.jpg" alt="" class="feature-image">
                                        <div class="title-small">12 unique examples of photography portfolio websites</div>
                                    </a></div>
                            </div>
                            <div class="categories-block">
                                <div class="title-large">Categories</div><a href="#" class="categories-pill w-inline-block">
                                    <div class="title-small pink">Product</div>
                                </a><a href="#" class="categories-pill w-inline-block">
                                    <div class="title-small pink">Engineering</div>
                                </a><a href="#" class="categories-pill w-inline-block">
                                    <div class="title-small pink">Technology</div>
                                </a><a href="#" class="categories-pill w-inline-block">
                                    <div class="title-small pink">Company</div>
                                </a><a href="#" class="categories-pill w-inline-block">
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