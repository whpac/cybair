<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title><?php bloginfo('name'); ?></title>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Slab:wght@700&display=swap" />
        <script src="https://kit.fontawesome.com/d5eb7e2e08.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo(get_stylesheet_uri()); ?>" />
        <script src="<?php echo(get_template_directory_uri().'/assets/script.js'); ?>"></script>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <nav class="main-navbar" id="main-navbar">
            <a href="<?php echo(home_url()); ?>" class="main-navbar--logo-wrapper">
                <img src="<?php echo(get_theme_file_uri('assets/logo.png')); ?>" class="main-navbar--logo" />
            </a>
            <button class="main-navbar--toggle" onclick="document.getElementById('main-navbar').classList.toggle('open');">
                <i class="fas fa-fw fa-bars"></i>
            </button>
            <ul class="main-navbar--links">
                <?php
                if(has_nav_menu( 'primary')){
                    wp_nav_menu(
                        array(
                            'container'  => '',
                            'items_wrap' => '%3$s',
                            'theme_location' => 'primary',
                            'depth' => 2
                        )
                    );
                }
                ?>
            </ul>
        </nav>