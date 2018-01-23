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
    'order'				=> 'ASC');
$loop = new WP_Query( $args );
?>

<section class="container">
    <header class="page-header">
        <h2 class="bg-secondary text-center p-3 text-primary">Artistes</h2>
    </header>
    <div class="card mt-4 mb-4">
        <div class="card-body">
            <ul class="list-unstyled d-flex flex-wrap">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php get_template_part( 'part', 'artist' ); ?>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>