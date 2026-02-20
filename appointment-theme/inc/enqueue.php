<?php
/**
 * Enqueue Style
 * 
 * @package doctorappointment
 */
function doctorappointment_enqueue_style() {
    // print_r(filemtime( get_template_directory() . '/assets/css/style.css'));
    // wp_die('loading style css');
    // wp_enqueue_style('style.css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/assets/css/style.css'), 'all' );

        wp_register_style( 'tailwind-css',
        get_template_directory_uri() . '/assets/css/output.css',
        array(), 'all' );
        wp_enqueue_style( 'tailwind-css' );

        wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', filemtime( get_template_directory() . '/assets/js/main.js'), true );  //! in footer => true
        wp_enqueue_script( 'main-js' );
        
}
add_action( 'wp_enqueue_scripts', 'doctorappointment_enqueue_style' );
