<?php
get_header();
$artists = get_field('event_artists')
?>

<section>
    <header>
        <h2><?php the_field('event_name') ?></h2>
    </header>
    <article>
        <header>
            <time><?php the_field('event_start'); ?> à <?php the_field('event_end'); ?></time>
            <h3><?php the_field('envet_name'); ?></h3>
            <div>
                <?php foreach($artists as $artist): ?>
                <a href="<?php the_permalink($artist->ID) ?>"><?php the_field('artist_name', $artist->ID) ?></a>
                <?php endforeach; ?>
            </div>
            <?php $terms = get_field('event_type'); ?>
            <?php foreach($terms as $key => $term) : ?>
            <?= $term->name; if(count($terms) > 1 && ($key + 1) !== count($terms)):echo ','; endif;  ?>
            <?php endforeach; ?>
        </header>
        <div>
            <?php the_field('event_description'); ?>
        </div>
        <a href="<?php sla_the_permalink_by_title('Programme'); ?>" class="cta cta__primary">Retour au programme</a>
    </article>
</section>

<?php get_footer(); ?>