<?php
/**
 Template Name: Homepage
 */
get_header();
?>

<main class="c-home">
    <section class="o-wrapper u-margin-bottom-large">
        <h2>Quelques artistes présents</h2>
        <div class="c-card c-home__artists o-box">
            <ul class="c-artists">
                <?php get_template_part('part', 'artist-excerpt'); ?>
            </ul>
            <a href="#" class="c-cta c-cta--second">Voir tous les artistes</a>
        </div>
    </section>

    <section class="o-wrapper u-margin-bottom-large">
        <h2>Prochain événement</h2>
        <div class="c-card c-home__event o-box o-box--small c-event">
            <?php get_template_part('part', 'event-excerpt'); ?>
            <a href="#" class="c-cta c-cta--second">Consulter l'agenda</a>
        </div>
    </section>

    <section class="o-wrapper u-margin-bottom-large">
        <h2>Dernières actualités</h2>
        <div class="c-card c-home__news o-box o-box--small c-news">
            <?php get_template_part('part', 'news-excerpt'); ?>
        </div>
    </section>
    <section class="o-box c-colorblock">
        <h2 class="c-colorblock__title">S'inscrire à la newsletter</h2>
        <?php get_template_part('part', 'newsletter'); ?>
    </section>
    <section class="o-box c-colorblock">
        <h2>Nos réseaux sociaux</h2>
        <ul>
            <li><a href="#"><img src="#" alt="Logo de facebook">Facebook</a></li>
            <li><a href="#"><img src="#" alt="Logo de twitter">Twitter</a></li>
            <li><a href="#"><img src="#" alt="Logo d'instagram">Instagram</a></li>
        </ul>
    </section>
    <section class="o-box c-instagramfeed">
        <h2>Nos photos Instagram</h2>
        <ol>
            <li><img src="#" alt="Photo"></li>
            <li><img src="#" alt="Photo"></li>
            <li><img src="#" alt="Photo"></li>
            <li><img src="#" alt="Photo"></li>
        </ol>
    </section>
</main>

<?php get_footer(); ?>