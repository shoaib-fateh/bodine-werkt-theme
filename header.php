<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="h-[72px]">
    <nav class="navbar">
        <a href="#over-mij" class="hover:underline">OVER MIJ</a>
        <a href="#vacatures" class="hover:underline">VACATURES</a>
        <a href="#blog" class="hover:underline">BLOG</a>
        <a href="#contact" class="contact">CONTACT OPNEMEN</a>
    </nav>
</header>


