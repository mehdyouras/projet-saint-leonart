<?php 
/*
        Template Name: Page des actus
*/
    get_header();
    if (!isset($_GET['filter'])) {
        $_GET['filter'] = null;
    }
    $args = array( 
        'post_type'         => 'news',
        'posts_per_page'    => -1);
    $loop = new WP_Query( $args );
?>

<section class="container">
    <header class="page-header">
        <h2 class="bg-secondary text-center p-3 text-primary">Actualité</h2>
    </header>
    <div>
        <div>
            <div id="filter">
                <button class="btn btn-primary w-100" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                    Année de publication <i class="fas fa-angle-down ml-1" aria-hidden="true"></i>
                </button>
            </div>

            <div id="collapse" class="collapse" aria-labelledby="filter" data-parent="#accordion">
                <div>
                    <ol class="list-unstyled mb-0 list-group list-group-flush text-center">
                        <?php $years = get_posts_years_array(); foreach($years as $year): ?>
                        <li><a class="list-group-item bg-secondary text-uppercase" href="<?php the_permalink(); echo '&filter=' . $year ?>"><?= $year ?></a></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div>
        <ol class="list-unstyled">
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php if($_GET['filter'] === get_the_date('Y') || $_GET['filter'] === null): ?>
            <li class="card mt-4">
                <div class="card-body">
                    <?php get_template_part( 'part', 'news' ); ?>
                </div>
            </li>
            <?php endif; ?>
            <?php endwhile; ?>
        </ol>
    </div>
</section>

<?php get_footer(); ?>