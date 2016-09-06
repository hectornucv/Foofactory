<?php 
//ACF Accordion
include_once( 'acf-accordion/acf-accordion.php' );

add_filter( 'acf/accordion/dir', 'acf_accordion_dir' );
function acf_accordion_dir( $dir ) {
    $dir = get_template_directory_uri() . '/includes/acf-accordion/';

    return $dir;
}

//Ninja Form Acf Field
function my_ninjaform_fields() {
    include_once('acf-ninja-forms.php');
}
add_action('acf/register_fields', 'my_ninjaform_fields');



?>

