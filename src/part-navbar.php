
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <a class="navbar-brand" href="#">Saint Léon'art</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php foreach(sla_get_nav_items('header') as $item):
                $is_active = sla_is_active($item->link, $current_url);
            ?>
                <li class="nav-item<?php if($is_active) : ?>active<?php endif; ?>">
                    <a class="nav-link" href="<?= $item->link ?>"><?= $item->label ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>