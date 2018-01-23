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
                    <?php get_template_part( 'part', 'artist' ); ?>
                    <?php endwhile; ?>
                </ul>
                <div class="text-center">
                    <a href="<?php sla_the_permalink_by_title('Artistes'); ?>" class="btn btn-secondary">Voir tous les artistes</a>
                </div>
            </div>
        </section>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
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
                        <?php get_template_part( 'part', 'news' ); ?>
                        <?php endwhile; ?>
                        <div class="text-center">
                            <a href="<?php sla_the_permalink_by_title('Actualités'); ?>" class="btn btn-secondary">Voir toutes les news</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-4">
        <div class="container row align-items-stretch mx-md-auto front__double">
            <div class="col-12 col-md-6 bg-secondary mb-4 mb-md-0">
                <section class="row no-gutters justify-content-center align-items-center">
                    <div class="pt-4 pb-4">
                        <h3 class="text-primary text-center">S'inscrire à la newsletter</h3>
                        <?php the_field('newsletter', 'option'); ?>
                    </div>
                </section>
            </div>
            <div class="bg-secondary col-12 col-md-6">
                <section>
                    <div class="container p-4">
                        <h3 class="text-primary mb-3 text-center">Nos réseaux sociaux</h3>
                        <div>
                            <ul class="list-unstyled d-flex justify-content-around mb-0">
                                <li>
                                    <a class="fab fa-facebook socials--large" href="http://facebook.com"><span class="sr-only">Vers la page Facebook</span></a>
                                </li>
                                <li>
                                    <a class="fab fa-twitter socials--large" href="http://twitter.com"><span class="sr-only">Vers la page Twitter</span></a>
                                </li>
                                <li>
                                    <a class="fab fa-instagram socials--large" href="http://instagram.com"><span class="sr-only">Vers la page Instagram</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>