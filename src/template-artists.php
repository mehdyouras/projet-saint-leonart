<?php
/*
        Template Name: Page des artistes
*/
get_header();
$args = array( 
    'post_type'         => 'artist',
    'posts_per_page'    => -1,
    'meta_key'			=> 'artist_name',
    'orderby'			=> 'meta_value',
    'order'				=> 'DESC');
$loop = new WP_Query( $args );
?>

<section>
    <header>
        <h2>Artistes</h2>
    </header>
    <div>
        <div>
            <ul>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?= wp_get_attachment_image( get_field('artist_portrait'), 'sla_portrait_small'); ?>
                        <?php the_field('artist_name'); ?>
                    </a>
                    <?php $terms = get_field('artist_kind'); ?>
                    <?php foreach($terms as $key => $term) : ?>
                    <?= $term->name; if(count($terms) > 1 && ($key + 1) !== count($terms)):echo ','; endif;  ?>
                    <?php endforeach; ?>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>