<?php
get_header();
?>
<section class="main-page--initial">
    <div class="image-wrapper">
        <img src="<?php echo(get_theme_file_uri('assets/slider.jpg')); ?>" />
    </div>
    <img class="big-logo" src="<?php echo(get_theme_file_uri('assets/logo.png')); ?>" />
    <h1 class="title long">Koło naukowe <span class="accent-color">CybAiR</span></h1>
    <h1 class="title short">KN <span class="accent-color">CybAiR</span></h1>
    <hr />
    <span class="subtitle">
        <span class="area-of-interest">Robotyka</span>
        <span class="accent-color separator">&bull;</span>
        <span class="area-of-interest">Pojazy autonomiczne</span>
        <span class="accent-color separator">&bull;</span>
        <span class="area-of-interest">Automatyka</span>
    </span>
</section>
<section class="main-page--activities accent-fill">
    <h1>Co robimy?</h1>
    <div class="column-wrapper">
        <div class="link-grid-wrapper">
            <div class="link-grid">
                <a class="activity" href="category.html">
                    <img src="<?php echo(get_theme_file_uri('assets/activities1.jpg')); ?>" />
                    <span class="subtitle">
                        Konferencje i wydarzenia
                    </span>
                </a>
                <a class="activity" href="category.html">
                    <img src="<?php echo(get_theme_file_uri('assets/activities2.jpg')); ?>" />
                    <span class="subtitle">
                        Sekcje naukowe
                    </span>
                </a>
                <a class="activity" href="category.html">
                    <img src="<?php echo(get_theme_file_uri('assets/activities3.png')); ?>" />
                    <span class="subtitle">
                        Warsztaty
                    </span>
                </a>
                <a class="activity" href="category.html">
                    <img src="<?php echo(get_theme_file_uri('assets/activities4.jpg')); ?>" />
                    <span class="subtitle">
                        Projekty naukowe
                    </span>
                </a>
            </div>
        </div>
        <div class="recent-posts">
            <h2>Najnowsze wpisy</h2>
            <hr />
 
            <?php 
            $posts_query = new WP_Query('posts_per_page=5');
            while ($posts_query->have_posts()){
                $posts_query->the_post();
                ?>
                <a class="recent-post-link" href="<?php the_permalink(); ?>">
                    <span class="title"><?php the_title(); ?></span>
                    <span class="date"><?php cybair_date_list_format(); ?></span>
                </a>
                <?php
            }
            wp_reset_postdata();
            ?>
            <a class="recent-posts-more" href="<?php echo(get_permalink(get_option('page_for_posts'))); ?>">
                Więcej wpisów
            </a>
        </div>
    </div>
</section>
<section class="main-page--about">
    <h1>Kim jesteśmy?</h1>
    <div class="column-wrapper">
        <div class="column">
            Jesteśmy kołem naukowym robotyki i automatyki działającym przy Politechnice Poznańskiej,
            które promuje i chce realnie wpływać na rozwój robotyki w Polsce, a w dalszej perspektywie
            również na świecie. Naszym celem jest umożliwienie rozwoju pasji jego Członków i Członków
            Wspierających poprzez stworzenie warunków do wymiany doświadczeń i wzajemnej pomocy,
            ułatwienie dostępu do zasobów laboratoryjnych oraz pomoc w pozyskiwaniu funduszy na
            realizację projektów.
        </div>
        <div class="column">
            Bierzemy udział w różnych wydarzeniach związanych z robotyką i popularyzacją nauki. To
            okazja by nie tylko poznać innych pasjonatów nauki, ale też zdobyć nowe znajomości
            biznesowe. Jest to również szansa by pochwalić się naszymi nowymi pomysłami i
            konstrukcjami. Współpracujemy z różnymi organami na naszej uczelni, dzięki czemu promujemy
            symbiotyczne działania między studentami a uczelnią.
        </div>
        <div class="column">
            Nasi studenci biorą czynny udział w projektach badawczych realizowanych na uczelni przy
            okazji rozwijając własne konstrukcje. Bierzemy udział w hackathonach i konkursach
            robotycznych. Nie brakuje nam specjalistów druku 3D, programowania systemów wbudowanych,
            sterowników PLC czy nawet web developerów. Nie jesteśmy jednak idealni – pomimo naszych
            starań, potrzebujemy grafików i osób zajmujących się social media. Jeśli jesteś
            zainteresowany by stać się aktywną częścią marketingu naszego koła, aplikuj
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeOErJnxDaGFhWNnj1HDzu6l8ZJ2L0EaO4nq9MmlqPU-SXiyQ/viewform">tutaj</a>.
        </div>
    </div>
</section>
<section class="main-page--partners accent-fill">
    <h1>Nasi partnerzy</h1>
    <h2>Alma mater</h2>
    <a class="logo-wide" href="https://www.put.poznan.pl/">
        <img src="<?php echo(get_theme_file_uri('assets/logo_put.png')); ?>" alt="Politechnika Poznańska" />
    </a>
    <h2>Partnerzy naukowi</h2>
    <div class="logo-row">
        <a class="logo" href="https://www.creef.put.poznan.pl/">
            <img src="<?php echo(get_theme_file_uri('assets/logo_warie.jpeg')); ?>" />
            <span class="separator"></span>
            <span class="subtitle">
                Faculty of&nbsp;Electrical Engineering&nbsp;of&nbsp;PUT
            </span>
        </a>
        <a class="logo" href="https://www.cie.put.poznan.pl/">
            <img src="<?php echo(get_theme_file_uri('assets/logo_irim.png')); ?>" />
            <span class="separator"></span>
            <span class="subtitle">
                Institute of&nbsp;Robotics and&nbsp;Machine&nbsp;Intelligence
            </span>
        </a>
        <div class="logo">
            <img src="<?php echo(get_theme_file_uri('assets/logo_ppil.png')); ?>" />
            <span class="separator"></span>
            <span class="subtitle">
                Perception for&nbsp;Physical Interaction&nbsp;Laboratory
            </span>
        </div>
    </div>
    <h2>Partner biznesowy</h2>
    <a class="logo-wide" href="https://botland.com.pl/pl/">
        <img src="<?php echo(get_theme_file_uri('assets/logo_botland.png')); ?>" alt="Botland" />
    </a>
</section>
<?php
get_footer();
?>