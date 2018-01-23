
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler pl-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="<?php sla_the_permalink_by_title('Page d\'accueil'); ?>">
            <img width="30" class="<?php if(is_front_page()){echo 'd-none';}; ?>" src="<?php sla_asset('img/logo.svg'); ?>" alt="Logo Saint Léon'art">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mr-lg-0 ml-lg-auto">
                <?php foreach(sla_get_nav_items('header') as $item):
                    $is_active = sla_is_active($item->link, $current_url);
                ?>
                    <li class="nav-item<?php if($is_active) : ?>active<?php endif; ?>">
                        <a class="nav-link" href="<?= $item->link ?>"><?= $item->label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>