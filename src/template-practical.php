<?php 
/*
        Template Name: Page en pratique
*/
    get_header();
?>

<section class="container">
    <header class="page-header">
        <h2 class="bg-secondary text-center p-3 text-primary">En pratique</h2>
    </header>
    <div>
        <?php the_field('practical_content'); ?>
        <div class="text-center m-4">
            <a href="<?php sla_the_permalink_by_title('Programme') ?>" class="btn btn-secondary">Consulter le programme</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>