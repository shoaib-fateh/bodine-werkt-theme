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
                        <h1 class="h1 vacatures"><?php echo esc_html($blog_title); ?></h1>
                        <p class="hero-subtitle--vacatures">Hier deel ik mijn ideeën, ervaringen en andere persoonlijke insights in mijn werk en leven. Bij vragen of reacties mag je altijd contact opnemen!</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="vacatures-inner-containt">
            <div class="padding-global">
                <div class="container cc-small">
                    <div class="detalies-grid">
                        <div class="text-area">
                            <div class="txt-details">Dienstverband</div>
                            <div class="details w-dyn-bind-empty">

                            </div>
                        </div>
                        <div class="text-area">
                            <div class="txt-details">Plaats</div>
                            <div class="details">Landelijk</div>
                        </div>
                        <div class="text-area">
                            <div class="txt-details">Provincie</div>
                            <div class="w-dyn-list">
                                <div role="list" class="w-dyn-items">
                                    <div role="listitem" class="w-dyn-item">
                                        <div class="text-block-3">Landelijk</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-area">
                            <div class="txt-details">Sector</div>
                            <div class="details w-dyn-bind-empty"></div>
                        </div>
                        <div class="text-area">
                            <div class="txt-details">Salarisindicatie</div>
                            <div class="details">-</div>
                        </div>
                        <div class="text-area">
                            <div class="txt-details">Aantal uur</div>
                            <div class="details">36 - 40</div>
                        </div>
                    </div>
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
                            <div class="txt-details">Featured Jobs</div>
                            <div class="w-dyn-list">
                                <div role="list" class="simililar-job-list w-dyn-items">
                                    <div role="listitem" class="w-dyn-item"><a href="/vacatures/medewerker-contactcenter" class="text-decoration-none w-inline-block">
                                            <div class="similar-job-item-wrapper">
                                                <div class="similar-job-list-image-wrapper"><img src="https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c60652af563308863a16a5_Austin%20Distel%20Unsplash.webp" loading="lazy" alt="" sizes="(max-width: 479px) 87vw, (max-width: 767px) 23vw, (max-width: 991px) 18vw, 11vw" srcset="https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c60652af563308863a16a5_Austin%20Distel%20Unsplash-p-500.webp 500w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c60652af563308863a16a5_Austin%20Distel%20Unsplash-p-800.webp 800w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c60652af563308863a16a5_Austin%20Distel%20Unsplash-p-1080.webp 1080w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c60652af563308863a16a5_Austin%20Distel%20Unsplash-p-1600.webp 1600w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c60652af563308863a16a5_Austin%20Distel%20Unsplash-p-2000.webp 2000w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c60652af563308863a16a5_Austin%20Distel%20Unsplash-p-2600.webp 2600w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c60652af563308863a16a5_Austin%20Distel%20Unsplash-p-3200.webp 3200w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c60652af563308863a16a5_Austin%20Distel%20Unsplash.webp 4876w" class="similar-job-list-image"></div>
                                                <div class="txt-details">Medewerker Contactcenter</div>
                                            </div>
                                        </a></div>
                                    <div role="listitem" class="w-dyn-item"><a href="/vacatures/financieel-administratief-medewerker" class="text-decoration-none w-inline-block">
                                            <div class="similar-job-item-wrapper">
                                                <div class="similar-job-list-image-wrapper"><img src="https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c605d0c7da6a7cd407a61b_Emma%20dau%20unsplash.webp" loading="lazy" alt="" sizes="(max-width: 479px) 87vw, (max-width: 767px) 23vw, (max-width: 991px) 18vw, 11vw" srcset="https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c605d0c7da6a7cd407a61b_Emma%20dau%20unsplash-p-500.webp 500w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c605d0c7da6a7cd407a61b_Emma%20dau%20unsplash-p-800.webp 800w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c605d0c7da6a7cd407a61b_Emma%20dau%20unsplash-p-1080.webp 1080w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c605d0c7da6a7cd407a61b_Emma%20dau%20unsplash-p-1600.webp 1600w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c605d0c7da6a7cd407a61b_Emma%20dau%20unsplash-p-2000.webp 2000w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c605d0c7da6a7cd407a61b_Emma%20dau%20unsplash-p-2600.webp 2600w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c605d0c7da6a7cd407a61b_Emma%20dau%20unsplash-p-3200.webp 3200w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c605d0c7da6a7cd407a61b_Emma%20dau%20unsplash.webp 6720w" class="similar-job-list-image"></div>
                                                <div class="txt-details">Financieel Administratief Medewerker</div>
                                            </div>
                                        </a></div>
                                    <div role="listitem" class="w-dyn-item"><a href="/vacatures/commercieel-medewerker-binnendienst-ict" class="text-decoration-none w-inline-block">
                                            <div class="similar-job-item-wrapper">
                                                <div class="similar-job-list-image-wrapper"><img src="https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c6025bff06b5f000b5da9d_Brooke%20Cagle%20Unsplash.webp" loading="lazy" alt="" sizes="(max-width: 479px) 87vw, (max-width: 767px) 23vw, (max-width: 991px) 18vw, 11vw" srcset="https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c6025bff06b5f000b5da9d_Brooke%20Cagle%20Unsplash-p-500.webp 500w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c6025bff06b5f000b5da9d_Brooke%20Cagle%20Unsplash-p-800.webp 800w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c6025bff06b5f000b5da9d_Brooke%20Cagle%20Unsplash-p-1080.webp 1080w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c6025bff06b5f000b5da9d_Brooke%20Cagle%20Unsplash-p-1600.webp 1600w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c6025bff06b5f000b5da9d_Brooke%20Cagle%20Unsplash-p-2000.webp 2000w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c6025bff06b5f000b5da9d_Brooke%20Cagle%20Unsplash-p-2600.webp 2600w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c6025bff06b5f000b5da9d_Brooke%20Cagle%20Unsplash-p-3200.webp 3200w, https://cdn.prod.website-files.com/66756e96daf5ec4e9f4d9425/66c6025bff06b5f000b5da9d_Brooke%20Cagle%20Unsplash.webp 6547w" class="similar-job-list-image"></div>
                                                <div class="txt-details">Commercieel medewerker binnendienst ICT</div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="button-area block"><a href="mailto:info@bodinewerkt.nl" class="main-button w-button">MAIL&nbsp;BODINE</a><a href="tel:+31657757947" class="main-button is-outline w-button">Bel bodine</a></div>
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