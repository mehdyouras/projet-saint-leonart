<?php
    get_header();
?>

<article>
    <header>
        <h2><?php the_field('artist_name'); ?></h2>
    </header>
    <div>
        <div>
            <?= wp_get_attachment_image( get_field('artist_portrait'), 'sla_portrait_large'); ?>
            <strong><?php the_field('artist_name'); ?></strong>
            <p>
                <?php $terms = get_field('artist_kind'); ?>
                <?php foreach($terms as $key => $term) : ?>
                <?= $term->name; if(count($terms) > 1 && ($key + 1) !== count($terms)):echo ','; endif;  ?>
                <?php endforeach; ?>
            </p>
            <?php if( have_rows('artist_socials') ): ?>
            <ul>
                <?php while ( have_rows('artist_socials') ) : the_row(); ?>
                <a class="fa fa-<?php $social = get_sub_field('artist_social_network'); echo $social['value']; ?>" href="<?php the_sub_field('artist_social_network_link') ?>"><span class="sr-only"><?= $social['label']; ?></span></a>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <?php if( have_rows('artist_contacts') ): ?>
            <address>
                <?php while ( have_rows('artist_contacts') ) : the_row(); ?>
                <?php $type = get_sub_field('artist_contact_type'); ?>
                <span class="fa fa-<?= $type['value']; ?>"><span class="sr-only"><?= $type['label']; ?> : </span><?php the_sub_field('artist_contact_value') ?></span>
                <?php endwhile; ?>
            </address>
            <?php endif; ?>
            <p><?php the_field('artist_description'); ?></p>
            <section>
                <h3><?php the_field('artist_name'); ?> sur le festival</h3>
                <ol>
                    <li>
                        <article>
                            <img src="http://fakeimg.pl/250x100/" alt="">
                            <div>
                                <time>Vendredi 28 à 12h</time>
                                <time>Samedi 29 à 19h</time>
                            </div>
                            <div>
                                <h3>
                                    Exposition de Jean Dujardin
                                </h3>
                            </div>
                        </article>
                    </li>
                </ol>
            </section>
            <?php if( have_rows('artist_gallery') ): ?>
            <section>
                <h3>Quelques photos de ses réalisations</h3>
                <?php while ( have_rows('artist_gallery') ) : the_row(); ?>
                <?= wp_get_attachment_image( get_sub_field('artist_gallery_photo')); ?>
                <?php endwhile; ?>
            </section>
            <?php endif; ?>
            <a href="<?php sla_the_permalink_by_title('Artistes'); ?>" class="cta cta__secondary">Voir les autres artistes</a>
            <a href="<?php sla_the_permalink_by_title('Programme'); ?>" class="cta cta__secondary">Consulter le programme</a>
        </div>
    </div>
</article>

<?php get_footer(); ?>