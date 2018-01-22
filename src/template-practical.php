<?php 
/*
        Template Name: Page en pratique
*/
    get_header();
?>

<section>
    <header>
        <h2>En pratique</h2>
    </header>
    <div>
        <?php the_field('practical_content'); ?>
        <a href="<?php sla_the_permalink_by_title('Programme') ?>" class="cta cta__secondary">Consulter le programme</a>
    </div>
</section>

<?php get_footer(); ?>