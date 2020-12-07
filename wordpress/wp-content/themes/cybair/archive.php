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
        if(have_posts()){
            while(have_posts()){
                the_post();
                $has_image = has_post_thumbnail();
                ?>
                <a href="<?php the_permalink(); ?>" class="category--link <?php if(!$has_image) echo('no-image') ?>">
                    <?php if($has_image) the_post_thumbnail('thumbnail'); ?>
                    <span class="title"><?php the_title(); ?></span>
                    <span class="text"><?php the_excerpt(); ?></span>
                    <span class="date"><?php cybair_date_list_format(); ?></span>
                </a>
                <?php
            }
        }else{
            echo('<i class="empty-category">Ta kategoria jest pusta</i>');
        }

        $posts_pagination = paginate_links(
            array(
                'type' => 'array',
                'prev_text' => 'Poprzednia',
                'next_text' => 'Następna',
            )
        );

        if(count($posts_pagination) > 0){
            ?>
            <div class="category--page-selector">
                <span class="category--page-selector--prev">
                    <?php
                    $i = 0;
                    while(substr($posts_pagination[$i], 0, 2) != '<s' && $i < count($posts_pagination)){
                        echo($posts_pagination[$i]);
                        $i++;
                    }
                    ?>
                </span>
                <span class="category--page-selector--curr">
                    <?php echo($posts_pagination[$i++]); ?>
                </span>
                <span class="category--page-selector--next">
                    <?php
                    while($i < count($posts_pagination)){
                        echo($posts_pagination[$i]);
                        $i++;
                    }
                    ?>
                </span>
            </div>
            <?php
        }
        ?>
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