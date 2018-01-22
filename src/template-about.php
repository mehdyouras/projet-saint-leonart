<?php
/*
        Template Name: Page à propos
*/
get_header();
?>

<section>
    <header>
        <h2>À propos</h2>
    </header>
    <div>
        <p>
            <?php the_field('about_intro'); ?>
        </p>
        <?php if( have_rows('about_creators') ): ?>
        <section>
            <h3>Les organisateurs</h3>
            <ul>
                <?php while ( have_rows('about_creators') ) : the_row(); ?>
                <li>
                    <?= wp_get_attachment_image( get_sub_field('creator_portrait'),  'sla_portrait_small'); ?>
                    <span><?php the_sub_field('creator_name'); ?></span>
                </li>
                <?php endwhile; ?>
            </ul>
        </section>
        <?php endif; ?>
        <?php if( have_rows('about_stats') ): ?>
        <section>
            <h3 class="sr-only">Quelques chiffres</h3>
            <ul>
                <?php while ( have_rows('about_stats') ) : the_row(); ?>
                <li>
                    <span class="d-block"><?php the_sub_field('stat_value'); ?></span>
                    <span class="d-block"><?php the_sub_field('stat_name'); ?></span>
                </li>
                <?php endwhile; ?>
            </ul>
        </section>
        <?php endif; ?>
        <a href="<?php sla_the_permalink_by_title("Programme") ?>" class="cta cta__secondary">Programme 2018</a>
        <section>
            <?php the_field('about_other'); ?>
        </section>
        <section>
            <h3>Espace presse</h3>
            <p><?php the_field('press_intro'); ?></p>
            <ul>
                <?php while ( have_rows('press_files') ) : the_row(); $file = get_sub_field('file_file');?>
                <li><a href="<?= $file['url']; ?>"><?php the_sub_field('file_name') ?></a> <?= sla_filesize_formatted($file['id']) ?></li>
                <?php endwhile; ?>
            </ul>
        </section>
        <a href="<?php sla_the_permalink_by_title("Contact") ?>" class="cta cta__secondary">Nous contacter</a>
    </div>
</section>

<?php 
    get_footer();
?>