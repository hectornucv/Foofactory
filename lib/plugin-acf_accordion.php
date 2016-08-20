<?php

include_once( 'plugins/acf-accordion/acf-accordion.php' );

add_filter( 'acf/accordion/dir', 'acf_accordion_dir' );
function acf_accordion_dir( $dir ) {
    $dir = get_template_directory_uri() . '/lib/plugins/acf-accordion/';

    return $dir;
}

?>
