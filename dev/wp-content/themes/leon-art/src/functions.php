<?php 

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

// Get theme asset URI
function get_sl_asset($resource) {
    return get_template_directory_uri().'/assets/'.trim($resource);
}
// Echo theme asset URI
function sl_asset($resource) {
    echo get_sl_asset($resource);
}

function sl_the_title() {
    $title = get_the_title();
    if(is_front_page()) {
        $title = 'Accueil';
    }
    echo $title;
}