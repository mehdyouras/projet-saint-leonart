<article class="mb-4">
    <time datetime="<?php sla_the_datetime(get_the_date()); ?>" class="badge badge-primary"><?php the_date(); ?></time>
    <h4><a href="<?php the_permalink(); ?>"><?php the_field('news_title'); ?></a></h4>
    <p class="mb-2">
        <?php the_field('news_excerpt'); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="readmore btn p-0"><i class="fas fa-angle-right mr-1" aria-hidden="true"></i>Lire plus</a>
</article>