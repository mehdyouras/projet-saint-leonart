<?php 
/*
        Template Name: Page des partenaires
*/
    get_header();
?>

<section>
    <h2>Partenaires</h2>
    <?php if( have_rows('partners', 'option') ): ?>
    <div>
        <ul>
            <?php while ( have_rows('partners', 'option') ) : the_row(); ?>
            <li>
                <article>
                    <h3><?php the_sub_field('partner_name'); ?></h3>
                    <a href="<?php the_sub_field('partner_link'); ?>">
                        <?= wp_get_attachment_image( get_sub_field('partner_logo'),  'sla_portrait_large'); ?>
                    </a>
                    <p><?php the_sub_field('partner_description'); ?></p>
                </article>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>