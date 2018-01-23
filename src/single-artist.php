<?php
    get_header();
?>

<article class="container">
    <header class="page-header">
        <h2 class="bg-secondary text-center p-3 text-primary"><?php the_field('artist_name'); ?></h2>
    </header>
    <div>
        <div class="card artist">
            <span class="portrait--large text-center">
                <?= wp_get_attachment_image( get_field('artist_portrait'), 'sla_portrait_large'); ?>
            </span>
            <div class="text-center">
                <strong><?php the_field('artist_name'); ?></strong>
                <p>
                    <?php $terms = get_field('artist_kind'); ?>
                    <?php foreach($terms as $key => $term) : ?>
                    <?= $term->name; if(count($terms) > 1 && ($key + 1) !== count($terms)):echo ','; endif;  ?>
                    <?php endforeach; ?>
                </p>
            </div>
            <?php if( have_rows('artist_socials') ): ?>
            <div class="bg-secondary px-4">
                <ul class="list-unstyled d-flex justify-content-around mb-0">
                    <?php while ( have_rows('artist_socials') ) : the_row(); ?>
                    <li>
                        <a class="p-3 socials--small fab fa-<?php $social = get_sub_field('artist_social_network'); echo $social['value']; ?>" href="<?php the_sub_field('artist_social_network_link') ?>"><span class="sr-only"><?= $social['label']; ?></span></a>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php if( have_rows('artist_contacts') ): ?>
            <address class="mx-auto mt-3">
                <?php while ( have_rows('artist_contacts') ) : the_row(); ?>
                <?php $type = get_sub_field('artist_contact_type'); ?>
                <span class="d-flex align-items-center">
                    <div class="text-primary col-2 mr-2">
                        <i class="fa fa-<?= $type['value']; ?>" aria-hidden="true"></i>
                    </div>
                    <span class="sr-only"><?= $type['label']; ?> : </span>
                    <div>
                        <?php the_sub_field('artist_contact_value') ?>
                    </div>
                </span>
                <?php endwhile; ?>
            </address>
            <?php endif; ?>
        </div>
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
</article>

<?php get_footer(); ?>