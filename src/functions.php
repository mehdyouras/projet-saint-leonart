<?php

add_action('init', 'sla_init_types');

add_image_size( 'sla_portrait_small', 80, 80);
add_image_size( 'sla_portrait_large', 150, 150);

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }
    $filetype = wp_check_filetype( $filename, $mimes );
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4 );

function sla_init_types()
{
    register_post_type('event', [
        'label' => 'Événements',
        'labels' => [
            'all_items' => 'Tous les événments',
            'singular_name' => 'événement',
            'add_new' => 'Ajouter un événement',
        ],
        'description' => 'Type d\'article permettant d\'ajouter de nouveaux événements au site',
        'menu_position' => 20,
        'menu_icon' => 'dashicons-screenoptions',
        'public' => true,
    ]);
    register_post_type('artist', [
        'label' => 'Artistes',
        'labels' => [
            'all_items' => 'Tous les artistes',
            'singular_name' => 'artiste',
            'add_new' => 'Ajouter un artiste',
        ],
        'description' => 'Type d\'article permettant d\'ajouter de nouveaux artistes au site',
        'menu_position' => 20,
        'menu_icon' => 'dashicons-art',
        'public' => true,
    ]);
    register_post_type('news', [
        'label' => 'Actualités',
        'labels' => [
            'all_items' => 'Toutes les actualités',
            'singular_name' => 'actualité',
            'add_new' => 'Ajouter une actualité',
        ],
        'description' => 'Type d\'article permettant d\'ajouter de nouvelles actualités au site',
        'menu_position' => 20,
        'menu_icon' => 'dashicons-feedback',
        'public' => true,
    ]);
    register_taxonomy('subject', 'news', [
        'label' => 'Sujet de l\'actualité',
        'labels' => [
            'singular_name' => 'subject',
            'edit_item' => 'Éditer le sujet de l\'actualité',
            'add_new_item' => 'Ajouter une nouveau Sujet d\'actualité',
        ],
        'description' => 'Sujet de l\'actualité proposé par saint-léon\'art',
        'public' => true,
        'hierarchical' => true,
    ]);
    // si plusieur type de post code de cette manière -> ['trip','event']
    register_taxonomy('type', 'event', [
        'label' => 'Type d\'événement',
        'labels' => [
        'singular_name' => 'type',
        'edit_item' => 'Éditer le type d\'événement',
        'add_new_item' => 'Ajouter une nouveau type d\'événement',
        ],
        'description' => 'Type d\'événement proposé par saint-léon\'art',
        'public' => true,
        'hierarchical' => true,
    ]);
    register_taxonomy('kind', 'artist', [
        'label' => 'Genre d\'artiste',
        'labels' => [
        'singular_name' => 'genre',
        'edit_item' => 'Éditer le genre d\'artiste',
        'add_new_item' => 'Ajouter une nouveau genre d\'artiste',
        ],
        'description' => 'Genre d\'artiste proposé par saint-léon\'art',
        'public' => true,
        'hierarchical' => true,
    ]);
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page([
        /* (string) The title displayed on the options page. Required. */
	'page_title' => 'Partenaires',
	
	/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
    'menu_title' => 'Partenaires',
    
    'position' => 6
	
    ]);

    acf_add_options_page([
            /* (string) The title displayed on the options page. Required. */
        'page_title' => 'Informations générales',
        
        /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
        'menu_title' => 'Informations',
        
        'position' => 5
	
    ]);
	
}

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