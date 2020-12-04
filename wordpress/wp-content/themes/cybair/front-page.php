<?php
get_header();
?>
<section class="main-page--initial">
    <div class="main-page--initial--slider-wrapper">
        <img src="<?php echo(get_theme_file_uri('assets/slider.jpg')); ?>" />
    </div>
    <img src="<?php echo(get_theme_file_uri('assets/logo.png')); ?>" class="main-page--initial--logo" />
    <h1 class="main-page--initial--title">Koło naukowe <span class="accent-color">CybAiR</span></h1>
    <hr />
    <span class="main-page--initial--subtitle">
        Robotyka
        <span class="accent-color">&bull;</span>
        Pojazy autonomiczne
        <span class="accent-color">&bull;</span>
        Automatyka
    </span>
</section>
<section class="main-page--activities accent-fill">
    <h1>Co robimy?</h1>
    <div class="main-page--activities--wrapper">
        <div class="main-page--activities--link-grid">
            <a class="main-page--activities--activity" href="category.html">
                <img src="<?php echo(get_theme_file_uri('assets/activities1.jpg')); ?>" />
                <span class="main-page--activities--subtitle">
                    Konferencje i wydarzenia
                </span>
            </a>
            <a class="main-page--activities--activity" href="category.html">
                <img src="<?php echo(get_theme_file_uri('assets/activities2.jpg')); ?>" />
                <span class="main-page--activities--subtitle">
                    Sekcje naukowe
                </span>
            </a>
            <a class="main-page--activities--activity" href="category.html">
                <img src="<?php echo(get_theme_file_uri('assets/activities3.png')); ?>" />
                <span class="main-page--activities--subtitle">
                    Warsztaty
                </span>
            </a>
            <a class="main-page--activities--activity" href="category.html">
                <img src="<?php echo(get_theme_file_uri('assets/activities4.jpg')); ?>" />
                <span class="main-page--activities--subtitle">
                    Projekty naukowe
                </span>
            </a>
        </div>
        <div class="main-page--activities--recent-posts">
            <h2>Najnowsze wpisy</h2>
            <hr />
 
            <?php 
            $posts_query = new WP_Query('posts_per_page=5');
            while ($posts_query->have_posts()){
                $posts_query->the_post();
                ?>
                <a class="main-page--activities--recent-posts--link" href="<?php the_permalink(); ?>">
                    <span class="title"><?php the_title(); ?></span>
                    <span class="date"><?php
                    if(date('Yz') == get_the_time('Yz')){
                        the_time('H:i');
                    }else{
                        the_date('d.m.Y'); 
                    }
                    ?></span>
                </a>
                <?php
            }
            wp_reset_postdata();
            ?>
            <a class="--button main-page--activities--recent-posts--more" href="category.html">
                Więcej wpisów
            </a>
        </div>
    </div>
</section>
<section class="main-page--about">
    <h1>Kim jesteśmy?</h1>
    <div class="main-page--about--column-wrapper">
        <div class="main-page--about--column">
            Jesteśmy kołem naukowym robotyki i automatyki działającym przy Politechnice Poznańskiej,
            które promuje i chce realnie wpływać na rozwój robotyki w Polsce, a w dalszej perspektywie
            również na świecie. Naszym celem jest umożliwienie rozwoju pasji jego Członków i Członków
            Wspierających poprzez stworzenie warunków do wymiany doświadczeń i wzajemnej pomocy,
            ułatwienie dostępu do zasobów laboratoryjnych oraz pomoc w pozyskiwaniu funduszy na
            realizację projektów.
        </div>
        <div class="main-page--about--column">
            Bierzemy udział w różnych wydarzeniach związanych z robotyką i popularyzacją nauki. To
            okazja by nie tylko poznać innych pasjonatów nauki, ale też zdobyć nowe znajomości
            biznesowe. Jest to również szansa by pochwalić się naszymi nowymi pomysłami i
            konstrukcjami. Współpracujemy z różnymi organami na naszej uczelni, dzięki czemu promujemy
            symbiotyczne działania między studentami a uczelnią.
        </div>
        <div class="main-page--about--column">
            Nasi studenci biorą czynny udział w projektach badawczych realizowanych na uczelni przy
            okazji rozwijając własne konstrukcje. Bierzemy udział w hackathonach i konkursach
            robotycznych. Nie brakuje nam specjalistów druku 3D, programowania systemów wbudowanych,
            sterowników PLC czy nawet web developerów. Nie jesteśmy jednak idealni – pomimo naszych
            starań, potrzebujemy grafików i osób zajmujących się social media. Jeśli jesteś
            zainteresowany by stać się aktywną częścią marketingu naszego koła, aplikuj
            <a href="#">tutaj</a>.
        </div>
    </div>
</section>
<section class="main-page--partners">
    <h1>Nasi partnerzy</h1>
    <h2>Alma mater</h2>
    <a class="main-page--partners--logo-wide" href="https://www.put.poznan.pl/">
        <img src="<?php echo(get_theme_file_uri('assets/logo_put.png')); ?>" alt="Politechnika Poznańska" />
    </a>
    <h2>Partnerzy naukowi</h2>
    <div class="main-page--partners--logo-row">
        <a class="main-page--partners--logo-in-row" href="https://www.creef.put.poznan.pl/">
            <img src="<?php echo(get_theme_file_uri('assets/logo_warie.jpeg')); ?>" />
            <span class="main-page--partners--logo-subtitle">
                Faculty of Electrical Engineering of PUT
            </span>
        </a>
        <a class="main-page--partners--logo-in-row" href="https://www.cie.put.poznan.pl/">
            <img src="<?php echo(get_theme_file_uri('assets/logo_irim.png')); ?>" />
            <span class="main-page--partners--logo-subtitle">
                Institute of Robotics and Machine Intelligence
            </span>
        </a>
        <div class="main-page--partners--logo-in-row">
            <img src="<?php echo(get_theme_file_uri('assets/logo_ppil.png')); ?>" />
            <span class="main-page--partners--logo-subtitle">
                Perception for Physical Interaction Laboratory
            </span>
        </div>
    </div>
    <h2>Partner biznesowy</h2>
    <a class="main-page--partners--logo-wide" href="https://botland.com.pl/pl/">
        <img src="<?php echo(get_theme_file_uri('assets/logo_botland.png')); ?>" alt="Botland" />
    </a>
</section>
<?php
get_footer();
?>