<?php
get_header();
$artists = get_field('event_artists')
?>

<article class="container">
    <header class="page-header">
        <h2 class="bg-secondary text-center p-3 text-primary"><?php the_field('event_name') ?></h2>
    </header>
    <div>
        <header>
            <div class="bg-secondary text-primary p-2 pl-4">
                <time><?php the_field('event_start'); ?></time>
            </div>
            <div class="bg-primary p-2 pr-4 text-light text-right">
                jusqu'au <time><?php the_field('event_end'); ?></time>
            </div>
            <div class="mt-2 text-right">
                par
                <?php foreach($artists as $artist): ?>
                <a href="<?php the_permalink($artist->ID) ?>"><?php the_field('artist_name', $artist->ID) ?></a>
                <?php endforeach; ?>
            </div>
            <div class="text-right">
                <?php $terms = get_field('event_type'); ?>
                <?php foreach($terms as $key => $term) : ?>
                <span class="badge badge-secondary"><?= $term->name; ?></span><?php if(count($terms) > 1 && ($key + 1) !== count($terms)):echo ','; endif; ?>
                <?php endforeach; ?>
            </div>
        </header>
        <div>
            <?php the_field('event_description'); ?>
        </div>
        <div class="text-center mb-4 mt-4">
            <a href="<?php sla_the_permalink_by_title('Programme'); ?>" class="btn btn-primary">Retour au programme</a>
        </div>
    </div>
</article>

<?php get_footer(); ?>