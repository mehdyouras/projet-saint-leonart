<nav>
    <h2 class="show-for-sr">Navigation principale</h2>
    <div class="title-bar" data-responsive-toggle="menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
    </div>
    <div class="top-bar" id="menu" data-animate="hinge-in-from-top hinge-out-from-top">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
            <?php foreach(sla_get_nav_items('header') as $item):
                $is_active = sla_is_active($item->link, $current_url);
            ?>
                <li class="<?php if($is_active) : ?>active<?php endif; ?>">
                    <a href="<?= $item->link ?>"><?= $item->label ?></a>
                </li>
            <?php endforeach; ?>
        </div>
    </div>
</nav>