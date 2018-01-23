<?php get_header(); ?>

<article class="container">
    <header class="page-header">
        <h2 class="bg-secondary text-center p-3 text-primary"><?php the_field('news_title'); ?></h2>
        <div class="bg-secondary text-center p-2 text-primary mb-4">
            <time><?= get_the_date(); ?></time>
        </div>
    </header>
    <div>
        <div class="news__content">
            <?php the_field('news_content'); ?>
        </div>
    </div>
    <div class="text-center mb-4">
        <a href="<?php sla_the_permalink_by_title('Actualités') ?>" class="btn btn-primary">Voir toute l'actu</a>
    </div>
</article>

<?php get_footer(); ?>