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
                <li class="c-artists__item">
                    <a href="#">
                        <img src="#" alt="Portrait de l'artiste">
                        <p class="c-artists__name">Jean Dujardin</p>
                        <p class="c-artistes__type">Peintre</p>
                    </a>
                </li>
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
        <form action="post">
            <label for="email">Adresse email</label>
            <input type="email">
            <input type="submit" value="S'inscrire">
        </form>
    </section>
</main>

<?php get_footer(); ?>