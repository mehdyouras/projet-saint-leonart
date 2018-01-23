<?php
/*
        Template Name: Page du programme
*/
get_header();
if (!isset($_GET['filter'])) {
    $_GET['filter'] = 'null';
}
$args = array( 
    'post_type'         => 'event',
    'posts_per_page'    => -1,
    'meta_key'			=> 'event_start',
    'orderby'			=> 'meta_value',
    'order'				=> 'DESC',
    'tax_query'         => array(
        array(
            'taxonomy'  => 'type',
            'field'     => 'term_id',
            'terms'     => $_GET['filter'],
        ),
    ),
);

$loop = new WP_Query( $args );

?>

<section>
    <header class="page-header container">
        <h2 class="bg-secondary text-center p-3 text-primary">Programme</h2>
        <div>
            <ol class="list-unstyled d-flex mb-2">
                <li class="col bg-primary">
                    <a class="text-light d-block pt-2 pb-2" href="#">Ven. 28</a>
                </li>
                <li class="col bg-primary">
                    <a class="text-light d-block pt-2 pb-2" href="#">Sam. 29</a>
                </li>
                <li class="col bg-primary">
                    <a class="text-light d-block pt-2 pb-2" href="#">Dim. 30</a>
                </li>
            </ol>
            <a class="btn btn-primary w-100" data-toggle="collapse" href="#filter" role="button" aria-expanded="false" aria-controls="collapseExample">
                Filtre <i class="fas fa-angle-down ml-1" aria-hidden="true"></i>
            </a>
            <div class="collapse bg-secondary" id="filter">
                <?php 
                    $types = get_terms( array(
                        'taxonomy' => 'type',
                        'hide_empty' => true,
                    ) );
                ?>
                <ul class="list-unstyled mb-0 list-group list-group-flush text-center">
                    <?php foreach($types as $type): ?>
                    <li><a class="list-group-item bg-secondary text-uppercase" href="<?php the_permalink(); echo '&filter=' . $type->term_id ?>"><?= $type->name ?></a></li> 
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </header>
    <div>
        <div class="d-flex flex-column align-items-center mt-4">
            <a href="<?php sla_the_permalink_by_title('Artistes'); ?>" class="btn btn-primary col-7 mb-2">Voir tous les artistes</a>
            <a href="<?php sla_the_permalink_by_title('En pratique'); ?>" class="btn btn-secondary col-7">En pratique</a>
        </div>
        <ol class="list-unstyled container mt-4">
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $artists = get_field('event_artists'); ?>
            <?php get_template_part( 'part', 'event' ); ?>
            <?php endwhile; ?>
        </ol>
    </div>
</section>

<?php
get_footer();
?>