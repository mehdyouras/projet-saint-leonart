<?php 
/*
        Template Name: Page des actus
*/
    get_header();
    $args = array( 
        'post_type'         => 'news',
        'posts_per_page'    => -1);
    $loop = new WP_Query( $args );
?>

<section>
    <h2>Actualité</h2>
    <!-- <div>
        <div>
            <div id="headingOne">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Catégories
                </button>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div>
                    <ul>
                        <li>Test</li>
                        <li>Test</li>
                        <li>Test</li>
                    </ul>
                </div>
            </div>
            <div id="headingTwo">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Année de publication
                </button>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div>
                    <ul>
                        <li>Test</li>
                        <li>Test</li>
                        <li>Test</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <div>
        <div>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <article>
                <time><?php the_date(); ?></time>
                <h3><?php the_field('news_title'); ?></h3>
                <p><?php the_field('news_excerpt'); ?></p>
                <a href="<?php the_permalink(); ?>" class="readmore">En savoir plus</a>
            </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>