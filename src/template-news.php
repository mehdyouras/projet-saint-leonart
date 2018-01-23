<?php 
/*
        Template Name: Page des actus
*/
    get_header();
    if (!isset($_GET['filter'])) {
        $_GET['filter'] = 'null';
    }
    $args = array( 
        'post_type'         => 'news',
        'posts_per_page'    => -1);
    $loop = new WP_Query( $args );
    var_dump(get_posts_years_array());
?>

<section>
    <h2>Actualité</h2>
    <div>
        <div>
            <div id="filter">
                <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                    Année de publication
                </button>
            </div>

            <div id="collapse" class="collapse" aria-labelledby="filter" data-parent="#accordion">
                <div>
                    <ul>
                        <?php $years = get_posts_years_array(); foreach($years as $year): ?>
                        <li><a href="<?php the_permalink(); echo '&filter=' . $year ?>"><?= $year ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <ol>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php if($_GET['filter'] === null || $_GET['filter'] === get_the_date('Y')): ?>
            <li>
                <article>
                    <time><?php the_date(); ?></time>
                    <h3><?php the_field('news_title'); ?></h3>
                    <p><?php the_field('news_excerpt'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="readmore">En savoir plus</a>
                </article>
            </li>
            <?php endif; ?>
            <?php endwhile; ?>
        </ol>
    </div>
</section>

<?php get_footer(); ?>