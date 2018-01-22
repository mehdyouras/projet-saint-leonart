<?php
/*
        Template Name: Page du programme
*/
get_header();
$args = array( 
    'post_type'         => 'event',
    'posts_per_page'    => -1,
    'meta_key'			=> 'event_start',
    'orderby'			=> 'meta_value',
    'order'				=> 'DESC');
$loop = new WP_Query( $args );
?>

<section>
    <header>
        <h2>Programme</h2>
        <div>
            <ol>
                <li>
                    <a href="#">Ven. 28</a>
                </li>
                <li>
                    <a href="#">Sam. 29</a>
                </li>
                <li>
                    <a href="#">Dim. 30</a>
                </li>
            </ol>
            <a class="btn btn-primary" data-toggle="collapse" href="#filter" role="button" aria-expanded="false" aria-controls="collapseExample">
                Filtre
            </a>
            <div class="collapse" id="filter">
                <ul>
                   <li>Artiste</li> 
                   <li>Yo</li> 
                </ul>
            </div>
        </div>
    </header>
    <div>
        <a href="<?php sla_the_permalink_by_title('Artistes'); ?>" class="cta cta__primary">Voir tous les artistes</a>
        <a href="<?php sla_the_permalink_by_title('En pratique'); ?>" class="cta cta__secondary">En pratique</a>
        <ol>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li>
                <article>
                    <!-- <img src="http://fakeimg.pl/250x100/" alt=""> -->
                    <div>
                        <time><?php the_field('event_start'); ?></time>
                        <time><?php the_field('event_end'); ?></time>
                    </div>
                    <div>
                        <h3>
                            <?php the_field('event_name'); ?>
                        </h3>
                        <?php $terms = get_field('event_type'); ?>
                        <?php foreach($terms as $key => $term) : ?>
                        <?= $term->name; if(count($terms) > 1 && ($key + 1) !== count($terms)):echo ','; endif;  ?>
                        <?php endforeach; ?>
                    </div>
                </article>
            </li>
            <?php endwhile; ?>
        </ol>
    </div>
</section>

<?php
get_footer();
?>