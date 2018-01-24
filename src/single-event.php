<?php
get_header();
$artists = get_field('event_artists')
?>

<article class="container">
    <header class="page-header">
        <h2 class="bg-secondary text-center p-3 text-primary mb-0">
            <?php the_field('event_name') ?>
            <small class="mt-2 d-block">
                par
                <?php foreach($artists as $key => $artist): ?>
                <a href="<?php the_permalink($artist->ID) ?>"><?php the_field('artist_name', $artist->ID) ?></a><?php if(count($artists) > 1 && ($key + 1) !== count($artists)): echo ','; endif; ?>
                <?php endforeach; ?>
            </small>
        </h2>
        <div class="text-center bg-secondary mb-2 pb-4">
            <?php $terms = get_field('event_type'); ?>
            <?php foreach($terms as $key => $term) : ?>
            <span class="badge badge-primary"><?= $term->name; ?></span><?php if(count($terms) > 1 && ($key + 1) !== count($terms)):echo ','; endif; ?>
            <?php endforeach; ?>
        </div>
    </header>
    <div>
        <div class="event__times">
            <div class="bg-secondary text-primary p-2 pl-4">
                <time datetime="<?php sla_the_datetime_from_hour(get_field('event_start')); ?>"><?php sla_the_human_event_date(get_field('event_start')); ?></time>
            </div>
            <div class="bg-primary p-2 pr-4 text-light text-right">
                jusqu'au <time datetime="<?php sla_the_datetime_from_hour(get_field('event_end')); ?>"><?php sla_the_human_event_date(get_field('event_end')); ?></time>
            </div>
        </div>
        <div>
            <?php the_field('event_description'); ?>
        </div>
        <div class="text-center mb-4 mt-4">
            <a href="<?php sla_the_permalink_by_title('Programme'); ?>" class="btn btn-primary">Retour au programme</a>
        </div>
    </div>
</article>

<?php get_footer(); ?>