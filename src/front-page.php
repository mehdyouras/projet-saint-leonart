<?php get_header(); ?>
<section>
    <h2 class="sr-only">Contenu principal</h2>
    <section>
        <h3>Quelques artistes présents</h3>
        <?php 
            $args = array( 
                'post_type'         => 'artist',
                'posts_per_page'    => 4,
                'orderby'			=> 'rand');
            $artists = new WP_Query( $args );
        ?>
        <div>
            <ul>
                <?php while ( $artists->have_posts() ) : $artists->the_post(); ?>
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
            <a href="<?php sla_the_permalink_by_title('Artistes'); ?>" class="cta cta__secondary">Voir tous les artistes</a>
        </div>
    </section>
    <section>
        <h3>Dernières actualités</h3>
        <?php 
            $args = array( 
                'post_type'         => 'news',
                'posts_per_page'    => 1);
            $news = new WP_Query( $args );
        ?>
        <div>
        <?php while ( $news->have_posts() ) : $news->the_post(); ?>
            <article>
                <time><?php the_date(); ?></time>
                <h4><?php the_field('news_title'); ?></h4>
                <p><?php the_field('news_excerpt'); ?></p>
                <a href="<?php the_permalink(); ?>" class="readmore">En savoir plus</a>
            </article>
            <?php endwhile; ?>
            <a href="<?php sla_the_permalink_by_title('Actualités'); ?>" class="cta cta__secondary">Voir toutes les news</a>
        </div>
    </section>
    <section>
        <h3>S'inscrire à la newsletter</h3>
        <div>
            
        </div>
    </section>
    <section>
        <h3>Nos réseaux sociaux</h3>
        <div>
            <ul>
            </ul>
        </div>
    </section>
    <section>
        <h3>Nos photos Instagram</h3>
        <p>Widget instagram</p>
    </section>
</section>
<?php get_footer(); ?>