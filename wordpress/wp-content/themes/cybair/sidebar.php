<aside>
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