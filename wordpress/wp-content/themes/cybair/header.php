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
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <nav class="main-navbar" id="main-navbar">
            <a href="<?php echo(home_url()); ?>" class="main-navbar--logo-wrapper">
                <img src="<?php echo(get_theme_file_uri('assets/logo.png')); ?>" class="main-navbar--logo" />
            </a>
            <ul class="main-navbar--links">
                <li><a href="index.html" class="current">Strona główna</a></li>
                <li><a href="index_b.html">Strona główna 2</a></li>
                <li><a href="post.html">Artykuł</a></li>
                <li><a href="category.html">Kategoria</a></li>
            </ul>
        </nav>