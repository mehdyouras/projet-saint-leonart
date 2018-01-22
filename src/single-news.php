<?php get_header(); ?>

<section>
    <header>
        <h2>Actualité</h2>
    </header>
    <article>
        <header>
            <time><?php the_date(); ?></time>
            <h3><?php the_field('news_title'); ?></h3>
        </header>
        <?php the_field('news_content'); ?>
    </article>
    <a href="<?php sla_the_permalink_by_title('Actualités') ?>" class="cta cta__primary">Voir toute l'actu</a>
</section>

<?php get_footer(); ?>