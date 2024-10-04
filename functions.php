<?php
function bodine_werkt_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/styles/styles.css');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'bodine_werkt_enqueue_styles');
?>
