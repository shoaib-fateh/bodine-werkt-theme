<?php
function bodine_werkt_enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/styles/styles.css');
    wp_enqueue_style('responsive-styles', get_template_directory_uri() . '/styles/responsive.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles/custom-styles.css');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'bodine_werkt_enqueue_styles');

function create_custom_post_type() {
    register_post_type('blogs',
        array(
            'labels' => array(
                'name' => __('Blogs'),
                'singular_name' => __('Blog')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'blogs'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-format-aside',
        )
    );
}
add_action('init', 'create_custom_post_type');

