<?php
function bodine_werkt_enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/styles/styles.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles/custom-styles.css');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'bodine_werkt_enqueue_styles');
?>
