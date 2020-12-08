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
        <div class="article-subtitle">
            <span class="author">Autor:
                <a href="<?php echo(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                    <?php the_author(); ?>
                </a>
            </span>
            <span class="date">Opublikowano: <?php the_date(); ?> <?php the_time(); ?></span>
        </div>
        <?php
            the_content();
        ?>
    </article>
    <div class="side-panel">
        <?php include('sidebar.php'); ?>
    </div>
</main>
<?php
get_footer();
?>