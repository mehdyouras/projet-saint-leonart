<?php

function sla_the_title() {
    $title = get_the_title();
    if(is_front_page()) {
        $title = 'Accueil';
    }
    echo $title;
}
