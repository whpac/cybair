<?php
get_header();
?>
<main class="category-root">
    <div class="category--main">
        <header class="category--header">
            <h1><?php the_archive_title(); ?></h1>
            <span class="subtitle">kategoria ∙ <?php cybair_echo_fnumber($wp_the_query->post_count, 'wpis', '', 'y', 'ów'); ?></span>
        </header>
        <?php
        while(have_posts()){
            the_post();
            $has_image = has_post_thumbnail();
            ?>
            <a href="post.html" class="category--link <?php if(!$has_image) echo('no-image') ?>">
                <?php if($has_image) the_post_thumbnail('thumbnail'); ?>
                <span class="title"><?php the_title(); ?></span>
                <span class="text"><?php the_excerpt(); ?></span>
                <span class="date"><?php cybair_date_list_format(); ?></span>
            </a>
            <?php
        }

        $posts_pagination = paginate_links(
            array(
                'type' => 'array',
                'prev_text' => 'Poprzednia',
                'next_text' => 'Następna',
            )
        );
        echo('<pre>');
        print_r($posts_pagination);
        echo('</pre>');
        ?>
        <div class="category--page-selector">
            <span class="category--page-selector--prev">
                <a href="#" class="page-text-button">Poprzednia</a>
                <a href="#" class="page-number-button">1</a>
            </span>
            <span class="category--page-selector--curr">
                <span class="current-page-presenter">2</span>
            </span>
            <span class="category--page-selector--next">
                <a href="#" class="page-number-button">3</a>
                <a href="#" class="page-number-button">4</a>
                <a href="#" class="page-text-button">Następna</a>
            </span>
        </div>
    </div>
    <div class="category--side-panel">
        <aside class="category--side-panel--recent">
            <h2>Najnowsze</h2>
            <ul>
                <?php 
                $posts_query = new WP_Query('posts_per_page=5');
                while ($posts_query->have_posts()){
                    $posts_query->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </ul>
        </aside>
    </div>
</main>
<?php
get_footer();
?>