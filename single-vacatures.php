<?php
get_header(); // Include header
?>

<main class="main-wrapper">
    <section class="vacatures-hero-section bg-light-pink is-inner">
        <div class="padding-global">
            <div class="container">
                <div class="section-headding-area">
                    <h1 class="h2 vacatures"><?php the_title(); ?></h1>
                    <p class="hero-subtitle--vacatures-inner">Een beter salaris, fijne secundaire voorwaarden of een betere klik met je collega’s? Kortom, ben jij opzoek naar meer werkplezier? Vind jouw werkplezier met onderstaande vacatures!</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="vacatures-inner-containt" style="color: black">
        <div class="padding-global">
            <div class="container cc-small">
                <div class="detalies-grid">
                    <div class="text-area">
                        <div class="txt-details">Dienstverband</div>
                        <div class="details"><?php echo get_post_meta(get_the_ID(), 'dienstverband', true); ?></div>
                    </div>
                    <div class="text-area">
                        <div class="txt-details">Plaats</div>
                        <div class="details"><?php echo get_post_meta(get_the_ID(), 'plaats', true); ?></div>
                    </div>
                    <div class="text-area">
                        <div class="txt-details">Provincie</div>
                        <div class="details"><?php echo get_post_meta(get_the_ID(), 'provincie', true); ?></div>
                    </div>
                    <div class="text-area">
                        <div class="txt-details">Sector</div>
                        <div class="details"><?php echo get_post_meta(get_the_ID(), 'sector', true); ?></div>
                    </div>
                    <div class="text-area">
                        <div class="txt-details">Salarisindicatie</div>
                        <div class="details"><?php echo get_post_meta(get_the_ID(), 'salarisindicatie', true); ?></div>
                    </div>
                    <div class="text-area">
                        <div class="txt-details">Aantal uur</div>
                        <div class="details"><?php echo get_post_meta(get_the_ID(), 'aantal_uur', true); ?></div>
                    </div>
                </div>

                <div class="containt">
                    <div class="rich-text-area">
                        <h2 class="job-title"><?php echo get_the_title(); ?></h2>
                        <div class="card-image-wrapper is-job">
                            <div class="simpleParallax" style="overflow: hidden;">
                            
                            <?php if (get_field('photo')) : ?>
    <img src="<?php echo esc_url(get_field('photo')); ?>" loading="lazy" alt="<?php echo esc_attr(get_the_title()); ?>" class="similar-job-list-image">
<?php else: ?>
    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/default-image.jpg'); ?>" loading="lazy" alt="Default Image" class="similar-job-list-image">
<?php endif; ?>


                            </div>
                        </div>
                        <div class="rich-text-vacatures w-richtext">
                            <?php the_content(); ?>
                        </div>
                        <div class="button-area">
                            <a href="mailto:info@bodinewerkt.nl" class="main-button w-button">Mail bodine</a>
                            <a href="tel:+31657757947" class="main-button is-outline w-button">Bel bodine</a>
                        </div>
                    </div>

                    <div class="similar-jobs">
                        <div class="txt-details">Featured Jobs</div>
                        <div class="w-dyn-list">
                            <div role="list" class="simililar-job-list w-dyn-items">
                                <?php
                                // Fetch similar jobs (you might need to adjust this query according to your setup)
                                $similar_jobs = new WP_Query([
                                    'post_type' => 'vacatures',
                                    'posts_per_page' => 3,
                                    'post__not_in' => [get_the_ID()], // Exclude the current job
                                ]);
                                if ($similar_jobs->have_posts()) :
                                    while ($similar_jobs->have_posts()) : $similar_jobs->the_post(); ?>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="<?php the_permalink(); ?>" class="text-decoration-none w-inline-block">
                                                <div class="similar-job-item-wrapper">
                                                    <div class="similar-job-list-image-wrapper">
                                                    <?php if (get_field('photo')) : ?>
    <img src="<?php echo esc_url(get_field('photo')); ?>" loading="lazy" alt="<?php echo esc_attr(get_the_title()); ?>" class="similar-job-list-image">
<?php else: ?>
    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/default-image.jpg'); ?>" loading="lazy" alt="Default Image" class="similar-job-list-image">
<?php endif; ?>

                                                    </div>
                                                    <div class="txt-details"><?php the_title(); ?></div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                else : ?>
                                    <div>No similar jobs found.</div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer(); // Include footer
?>
