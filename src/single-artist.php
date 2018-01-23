<?php
    get_header();
?>

<article class="container">
    <header class="page-header">
        <h2 class="bg-secondary text-center p-3 text-primary"><?php the_field('artist_name'); ?></h2>
    </header>
    <div class="row flex-wrap">
        <div class="col-12 col-md-6">
            <div class="card artist__card">
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
                <div class="bg-secondary px-4 d-flex justify-content-center">
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
            <p class="mt-4"><?php the_field('artist_description'); ?></p>
        </div>
        <?php
            $args = array( 
                'post_type'         => 'event',
                'posts_per_page'    => -1,
                'meta_key'			=> 'event_start',
                'orderby'			=> 'meta_value',
                'order'				=> 'ASC',
            );
            $events = new WP_Query( $args );
        ?>
        <section class="artist__events col-md-6">
            <h3><?php the_field('artist_name'); ?> sur le festival</h3>
            <ol class="list-unstyled">
                <?php $artistId = get_the_id(); while ( $events->have_posts() ) : $events->the_post();?>
                <?php if(sla_is_event_artist($artistId, get_field('event_artists'))): ?>
                <li class="mb-4">
                    <?php get_template_part( 'part', 'event' ); ?>
                </li>
                <?php endif; ?>
                <?php endwhile; ?>
            </ol>
        </section>
        
        <!-- <div class="text-center">
            <a href="<?php sla_the_permalink_by_title('Artistes'); ?>" class="btn btn-secondary mb-4">Voir les autres artistes</a>
            <a href="<?php sla_the_permalink_by_title('Programme'); ?>" class="btn btn-secondary mb-4">Consulter le programme</a>
        </div> -->
    </div>
</article>

<?php get_footer(); ?>