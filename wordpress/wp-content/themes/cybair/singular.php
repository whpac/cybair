<?php
get_header();
the_post();
?>
<main class="article-root">
    <?php
    if(has_post_thumbnail()) {
        ?>
        <header>
            <?php the_post_thumbnail(); ?>
        </header>
        <?php
    }
    ?>
    <article>
        <h1>
            <?php the_title(); ?>
        </h1>
        <div class="article--subtitle">
            <span class="article--subtitle--author">Autor:
                <a href="<?php echo(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                    <?php the_author(); ?>
                </a>
            </span>
            <span class="article--subtitle--published">Opublikowano: <?php the_date(); ?> <?php the_time(); ?></span>
        </div>
        <?php
            the_content();
        ?>
    </article>
    <div class="article--side-panel">
        <aside class="article--side-panel--recent">
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