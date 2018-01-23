<?php get_header(); ?>
<section class="mt-4">
    <h2 class="sr-only">Contenu principal</h2>
    <div class="container">
        <section class="card mb-4">
            <?php 
                $args = array( 
                    'post_type'         => 'artist',
                    'posts_per_page'    => 4,
                    'orderby'			=> 'rand');
                    $artists = new WP_Query( $args );
                    ?>
            <div class="card-header bg-secondary">
                <h3 class="text-primary">Quelques artistes présents</h3>
            </div>
            <div class="card-body">
                <ul class="list-unstyled d-flex flex-wrap">
                    <?php while ( $artists->have_posts() ) : $artists->the_post(); ?>
                    <li class="d-flex flex-column col-6 text-center mb-3">
                        <a class="portrait portrait--small" href="<?php the_permalink(); ?>">
                            <?= wp_get_attachment_image( get_field('artist_portrait'), 'sla_portrait_small'); ?>
                        </a>
                        <div>
                            <a class="d-block" href="<?php the_permalink(); ?>">
                                <?php the_field('artist_name'); ?>
                            </a>
                            <?php $terms = get_field('artist_kind'); ?>
                            <small>
                                <?php foreach($terms as $key => $term) : ?>
                                <?= $term->name; if(count($terms) > 1 && ($key + 1) !== count($terms)):echo ','; endif;  ?>
                                <?php endforeach; ?>
                            </small>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <div class="text-center">
                    <a href="<?php sla_the_permalink_by_title('Artistes'); ?>" class="btn btn-secondary">Voir tous les artistes</a>
                </div>
            </div>
        </section>
        <section class="card">
            <div class="card-header bg-secondary">
                <h3 class="text-primary">Dernières actualités</h3>
            </div>
            <?php 
                $args = array( 
                    'post_type'         => 'news',
                    'posts_per_page'    => 1);
                $news = new WP_Query( $args );
            ?>
            <div class="card-body">
            <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                <article class="mb-4">
                    <time class="badge badge-primary"><?php the_date(); ?></time>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_field('news_title'); ?></a></h4>
                    <p class="mb-2">
                        <?php the_field('news_excerpt'); ?>
                    </p>
                    <a class="btn p-0" href="<?php the_permalink(); ?>" class="readmore"><i class="fas fa-angle-right mr-1" aria-hidden="true"></i>Lire plus</a>
                </article>
                <?php endwhile; ?>
                <div class="text-center">
                    <a href="<?php sla_the_permalink_by_title('Actualités'); ?>" class="btn btn-secondary">Voir toutes les news</a>
                </div>
            </div>
        </section>
    </div>
    <section class="bg-secondary mt-4">
        <div class="container p-4">
            <h3 class="text-primary">S'inscrire à la newsletter</h3>
            <?php the_field('newsletter', 'option'); ?>
        </div>
    </section>
    <section class="bg-secondary mt-4">
        <div class="container p-4">
            <h3 class="text-primary">Nos réseaux sociaux</h3>
            <div>
                <ul class="list-unstyled d-flex display-4 justify-content-around mb-0">
                    <li>
                        <a class="fab fa-facebook" href="http://facebook.com"><span class="sr-only">Vers la page Facebook</span></a>
                    </li>
                    <li>
                        <a class="fab fa-twitter" href="http://twitter.com"><span class="sr-only">Vers la page Twitter</span></a>
                    </li>
                    <li>
                        <a class="fab fa-instagram" href="http://instagram.com"><span class="sr-only">Vers la page Instagram</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <h3>Nos photos Instagram</h3>
        <p>Widget instagram</p>
    </section>
</section>
<?php get_footer(); ?>