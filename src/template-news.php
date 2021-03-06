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
        <div id="filter">
            <button class="btn btn-primary w-100" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                Année de publication <i class="fas fa-angle-down ml-1" aria-hidden="true"></i>
            </button>
        </div>
    
        <div id="collapse" class="collapse" aria-labelledby="filter" data-parent="#accordion">
            <div>
                <ol class="list-unstyled mb-0 list-group list-group-flush text-center">
                    <li><a class="list-group-item bg-secondary text-uppercase" href="<?php the_permalink(); ?>">Tout afficher</a></li>
                    <?php $years = get_posts_years_array(); foreach($years as $year): ?>
                    <li><a class="list-group-item bg-secondary text-uppercase <?php if($year == $_GET['filter']){echo 'active';};?>" href="<?= add_query_arg( 'filter', $year ); ?>"><?= $year ?></a></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </header>
    <div>
        <ol class="list-unstyled">
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php if($_GET['filter'] === get_the_date('Y') || $_GET['filter'] === null): ?>
            <li class="row mt-4 justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <?php get_template_part( 'part', 'news' ); ?>
                        </div>
                    </div>
                </div>
            </li>
            <?php endif; ?>
            <?php endwhile; ?>
        </ol>
    </div>
</section>

<?php get_footer(); ?>