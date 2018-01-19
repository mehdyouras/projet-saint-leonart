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

register_nav_menu('header', 'Menu principale affiché dans le header');

function sla_get_nav_items($location) {
    // récupérer les items du menu $location et les transformer en un objet contenant $link et $label
    $id = sla_get_nav_id($location);
    if(!$id) {
        return [];
    }
    $nav = [];
    $children = [];
    foreach(wp_get_nav_menu_items($id) as $object) {
        $item = new stdClass();
        $item->link = $object->url;
        $item->label = $object->title;
        $item->children = [];
        if($object->menu_item_parent) {
            $item->parent = $object->menu_item_parent;
            $children[] = $item;
        } else {
            $nav[$object->ID] = $item;
        }
    }
    foreach($children as $item) {
        $nav[$item->parent]->children[] = $item;
    }
    return $nav;
}

// Get menu ID from location
function sla_get_nav_id($location) {
    $id = false;
    foreach(get_nav_menu_locations() as $navLocation => $id) {
        if($navLocation == $location) {
            return $id;
        }
    }
    return false;
}


/**
 * Returns if nav item is active (bool)
 */
function sla_is_active($link, $current_url) {
    // turns $link into regex
    $urlRegex = '/^'.str_replace('/','\/', $link).'/';
    // checks if $link is in $current_url and if it is not site root
    $is_active = (preg_match($urlRegex, $current_url) && $link != get_site_url().'/');
    // if $link is root AND $current_url is root then it is active
    if(($link === get_site_url().'/') && ($current_url === get_site_url().'/')) {
        $is_active = true;
    }
    return $is_active;
}