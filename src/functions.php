<?php

function sla_the_title() {
    $title = get_the_title();
    if(is_front_page()) {
        $title = 'Accueil';
    }
    echo $title;
}

// Get theme asset URI
function get_sla_asset($resource) {
    return get_template_directory_uri().'/assets/'.trim($resource);
}
// Echo theme asset URI
function sla_asset($resource) {
    echo get_sla_asset($resource);
}
