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
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="h-[72px]" style="width: unset;">
    
    <!-- Desktop Navbar -->
    <nav class="navbar">
        <a href="#about" class="hover">OVER MIJ</a>
        <a href="<?php echo site_url('/vacatures'); ?>" class="hover">VACATURES</a>
        <a href="<?php echo site_url('/blog'); ?>" class="hover">BLOG</a>
        <a href="#contact" class="contact">CONTACT OPNEMEN</a>
    </nav>

    <!-- Hamburger Menu Icon for Mobile -->
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Mobile Navbar -->

    <div class="w-nav-overlay mobile-navbar">
        <div>
        <nav role="navigation " class="navbar__menu w-nav-menu" style="transition: all, transform 400ms; transform: translateY(0px) translateX(0px);"><div class="full-height-mobile-menu"><div class="menu-links-group"><div class="link-block-area"><div class="menu-link_div"><a href="/#about" class="navbar__link navbar_link_template w-nav-link w--nav-link-open">Over mij</a></div><div class="hover-line" style="width: 0px;"></div></div><div class="link-block-area"><div class="menu-link_div"><a href="<?php echo site_url('/vacatures'); ?>" aria-current="page" class="navbar__link w-nav-link w--current w--nav-link-open"><div class="text-block-5">Vacatures</div></a></div><div class="hover-line" style="width: 0%; height: 3px;"></div></div><div class="link-block-area"><div class="menu-link_div"><a href="<?php echo site_url('/blog'); ?>" class="navbar__link w-nav-link w--nav-link-open"><div class="text-block-4">Blog</div></a></div><div class="hover-line" style="width: 0%; height: 3px;"></div></div></div><div class="connect-buttons connection-buttons_mobile"><a href="mailto:info@bodinewerkt.nl" class="main-button footer-button connect-mobile w-button">info@bodinewerkt.nl</a><a href="tel:+31657757947" class="main-button footer-button connect-mobile w-button">Bel bodine</a><a href="http://linkedin.com/in/★-bodine-buijserd-★-ba179a132" class="connect-mobile w-inline-block"><img src="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/66d884f3f7bdd1ee8e861888_linkedinicon.png" loading="lazy" width="55" height="55" alt="" srcset="https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/66d884f3f7bdd1ee8e861888_linkedinicon-p-500.png 500w, https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/66d884f3f7bdd1ee8e861888_linkedinicon-p-800.png 800w, https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/66d884f3f7bdd1ee8e861888_linkedinicon-p-1080.png 1080w, https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/66d884f3f7bdd1ee8e861888_linkedinicon-p-1600.png 1600w, https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/66d884f3f7bdd1ee8e861888_linkedinicon-p-2000.png 2000w, https://cdn.prod.website-files.com/664f1b4e7fe82d407f4bd3a1/66d884f3f7bdd1ee8e861888_linkedinicon.png 2550w" sizes="100vw" class="vectors-wrapper-3 footer-social"></a></div></div><div class="div-block-7"><div class="menu-link_div"><a href="#Footer" class="navbar__btn-primary w-nav-link w--nav-link-open"><div class="navbar__btn-primary-text">Contact opnemen</div></a></div></div></nav>
    </div>
</header>
