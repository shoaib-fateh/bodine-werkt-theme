<?php get_header();
// Query for all job posts
$args = array(
    'post_type' => 'vacatures',
    'posts_per_page' => -1, // Show all posts
);
$vacatures_query = new WP_Query($args);
?>

<!-- <div class="vacatures-container">
    <h1>Job Vacancies</h1>

    <?php if (have_posts()) : ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="vacature-details">
                        <?php
                        // Display custom fields here (use ACF function)
                        $employment_type = get_field('dienstverband'); // Change to your actual field name
                        $location = get_field('plaats'); // Change to your actual field name
                        $salary = get_field('salarisindicatie'); // Change to your actual field name
                        $hours = get_field('aantal_uur'); // Change to your actual field name

                        echo '<p>Type: ' . esc_html($employment_type) . '</p>';
                        echo '<p>Location: ' . esc_html($location) . '</p>';
                        echo '<p>Salary: ' . esc_html($salary) . '</p>';
                        echo '<p>Hours: ' . esc_html($hours) . '</p>';
                        ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>No job vacancies found.</p>
    <?php endif; ?>

</div> -->


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
                <div class="containt cc-margin-top">
                    <div class="blog-area w-dyn-list">
                        <div fs-cmsfilter-element="list" role="list" class="jobs-list w-dyn-items">



                            <!-- HERE -->

                            <?php
                            if ($vacatures_query->have_posts()) :
                                while ($vacatures_query->have_posts()) : $vacatures_query->the_post(); ?>

                                    <div role="listitem" class="w-dyn-item">
                                        <a href="<?php the_permalink(); ?>" class="vacatures-iteams w-inline-block">
                                            <div class="blog-image-wrap is-vacanture">
                                                <div class="simpleParallax" style="overflow: hidden;">
                                                    <?php
                                                    // Display the custom photo field if available
                                                    $photo_url = get_field('photo'); // Adjust this if the field name is different
                                                    if ($photo_url) : ?>
                                                        <img width="380" alt="<?php the_title(); ?>" src="<?php echo esc_url($photo_url); ?>" class="blog-image" style="transform: translate3d(0px, 15px, 0px) scale(1.1); will-change: transform; transition: transform 0.4s cubic-bezier(0, 0, 0, 1) 0s, scale 0.3s ease 0s;">
                                                    <?php else : ?>
                                                        <img width="380" alt="Default Image" src="https://via.placeholder.com/380" class="blog-image" style="transform: translate3d(0px, 15px, 0px) scale(1.1); will-change: transform; transition: transform 0.4s cubic-bezier(0, 0, 0, 1) 0s, scale 0.3s ease 0s;">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <h2 class="job-headding"><?php the_title(); ?></h2>
                                                <div class="inner-field">
                                                    <div class="inner-text"><?php echo esc_html(get_field('plaats')); ?></div>
                                                    <div class="inner-text"><?php echo esc_html(get_field('dienstverband')); ?></div>
                                                </div>
                                                <div class="div-block-3">
                                                    <div class="inner-text"><?php echo esc_html(get_field('aantal_uur')); ?></div>
                                                    <div class="inner-text">uur</div>
                                                </div>
                                                <p class="paragraph-detials-medium cc-vacatures">
                                                <p class="paragraph-detials-medium cc-vacatures">
                                                    <?php
                                                    // Get the post content
                                                    $post_content = get_the_content();

                                                    // Display a trimmed version of the content with a limit of, for example, 20 words
                                                    echo esc_html(wp_trim_words($post_content, 30, '...'));
                                                    ?>
                                                </p>

                                                </p>
                                                <div class="button-pink">
                                                    <div class="arrow w-embed">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4 11V13H16L10.5 18.5L11.92 19.92L19.84 12L11.92 4.07996L10.5 5.49996L16 11H4Z" fill="currentcolor"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                <?php endwhile;
                                wp_reset_postdata(); // Reset post data
                            else : ?>
                                <p><?php _e('No job vacancies found.'); ?></p>
                            <?php endif; ?>



                            <!-- HERE -->



                        </div>
                    </div>
                    <div class="similar-jobs">
                        <div class="head-form">Featured Jobs</div>
                        <div class="w-dyn-list">
                            <div role="list" class="featured-blog-list w-dyn-items">
                                <!-- listitem -->


                                <?php
                                if ($vacatures_query->have_posts()) :
                                    $job_posts = []; // Array to hold job posts

                                    // Collect job posts into an array
                                    while ($vacatures_query->have_posts()) :
                                        $vacatures_query->the_post();
                                        $job_posts[] = [
                                            'link' => get_permalink(),
                                            'title' => get_the_title(),
                                            'photo' => get_field('photo') ? esc_url(get_field('photo')) : 'https://via.placeholder.com/380'
                                        ];
                                    endwhile;

                                    // Shuffle job posts to randomize their order
                                    shuffle($job_posts);

                                    // Limit to the first 3 posts
                                    $job_posts = array_slice($job_posts, 0, 3);

                                    // Display the job posts
                                    foreach ($job_posts as $job) : ?>
                                        <div role="listitem" class="w-dyn-item">
                                            <a href="<?php echo $job['link']; ?>" class="featured-blog-item-link w-inline-block">
                                                <div class="featured-blog-item-wrapper">
                                                    <div class="similar-job-list-image-wrapper">
                                                        <img src="<?php echo $job['photo']; ?>" loading="lazy" alt="<?php echo $job['title']; ?>" class="similar-job-list-image">
                                                    </div>
                                                    <div class="head-form cc-margin"><?php echo $job['title']; ?></div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                    endforeach;

                                    wp_reset_postdata(); // Reset post data 
                                else :
                                    ?>
                                    <p><?php _e('No job vacancies found.'); ?></p>
                                <?php endif; ?>


                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

<?php get_footer(); ?>