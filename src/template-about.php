<?php
/*
        Template Name: Page à propos
*/
get_header();
?>

<section>
    <header class="page-header container">
        <h2 class="bg-secondary text-center p-3 text-primary">À propos</h2>
    </header>
    <div class="container">
        <p class="mx-auto">
            <?php the_field('about_intro'); ?>
        </p>
        <?php if( have_rows('about_creators') ): ?>
        <section class="card mt-4 mb-4">
            <div class="card-header bg-secondary text-primary">
                <h3>Les organisateurs</h3>
            </div>
            <div class="card-body">
                <ul class="list-unstyled d-flex flex-wrap">
                    <?php while ( have_rows('about_creators') ) : the_row(); ?>
                    <li class="d-flex flex-column col-6 col-md-4 text-center mb-3">
                        <a class="portrait portrait--small" href="<?php the_permalink(); ?>">
                            <?= wp_get_attachment_image( get_sub_field('creator_portrait'),  'sla_portrait_small'); ?>
                        </a>
                        <div>
                            <span><?php the_sub_field('creator_name'); ?></span>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
        <?php endif; ?>
    </div>
    <div class="mb-4 text-center">
        <a href="<?php sla_the_permalink_by_title("Programme") ?>" class="btn btn-secondary">Programme 2018</a>
    </div>
    <div class="container mt-4">
        <div class="row">
            <?php if( have_rows('about_stats') ): ?>
            <section class="bg-secondary pt-4 mb-4 col-12 col-lg-6">
                <div class="container">
                    <h3 class="sr-only">Quelques chiffres</h3>
                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                        <?php while ( have_rows('about_stats') ) : the_row(); ?>
                        <li class="col-6 text-center mb-4">
                            <strong class="d-block"><?php the_sub_field('stat_value'); ?></strong>
                            <strong class="d-block"><?php the_sub_field('stat_name'); ?></strong>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </section>
            <?php endif; ?>
            <section class="col-12 col-lg-6">
                <?php the_field('about_other'); ?>
            </section>
        </div>
        <section class="row">
            <div class="col-12 col-lg-6">
                <h3>Espace presse</h3>
                <p><?php the_field('press_intro'); ?></p>
            </div>
            <ul class="list-unstyled col-12 col-lg-6 about__downloads">
                <?php while ( have_rows('press_files') ) : the_row(); $file = get_sub_field('file_file');?>
                <li class="d-flex align-items-center justify-content-between mb-2">
                    <div>
                        <i class="fas fa-download text-primary mr-2" aria-hidden="true"></i>
                        <a href="<?= $file['url']; ?>"><?php the_sub_field('file_name') ?></a>
                    </div>
                    <small>
                        <?= sla_filesize_formatted($file['id']) ?>
                    </small>
                </li>
                <?php endwhile; ?>
            </ul>
        </section>
    </div>
    <div class="text-center mb-4 mt-4">
        <a href="<?php sla_the_permalink_by_title("Contact") ?>" class="btn btn-secondary">Nous contacter</a>
    </div>
</section>

<?php 
    get_footer();
?>