<li class="d-flex flex-column col-6 text-center mb-3">
    <a class="portrait portrait--small" href="<?php the_permalink(); ?>">
        <?= wp_get_attachment_image( get_field('artist_portrait'), 'sla_portrait_small'); ?>
    </a>
    <div>
        <a class="d-block" href="<?php the_permalink(); ?>">
            <?php the_field('artist_name'); ?>
        </a>
        <?php $terms = get_field('artist_kind'); ?>
        <small>
            <?php foreach($terms as $key => $term) : ?>
            <?= $term->name; if(count($terms) > 1 && ($key + 1) !== count($terms)):echo ','; endif;  ?>
            <?php endforeach; ?>
        </small>
    </div>
</li>