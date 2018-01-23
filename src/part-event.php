<li class="card">
    <article>
        <div class="bg-secondary text-primary p-2 pl-4">
            <time><?php the_field('event_start'); ?></time>
        </div>
        <div class="card-body">
            <?php $terms = get_field('event_type'); ?>
            <div>
                <?php foreach($terms as $key => $term) : ?>
                <span class="badge badge-secondary"><?= $term->name; ?></span><?php if(count($terms) > 1 && ($key + 1) !== count($terms)): echo ','; endif; ?>
                <?php endforeach; ?>
            </div>
            <h3>
                <a href="<?php the_permalink() ?>"><?php the_field('event_name'); ?></a>
            </h3>
            <div>
                par
                <?php $artists = get_field('event_artists'); foreach($artists as $key => $artist): ?>
                <a href="<?php the_permalink($artist->ID) ?>"><?php the_field('artist_name', $artist->ID) ?></a><?php if(count($artists) > 1 && ($key + 1) !== count($artists)): echo ','; endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="bg-primary p-2 pr-4 text-light text-right">
            jusqu'au <time><?php the_field('event_end'); ?></time>
        </div>
    </article>
</li>