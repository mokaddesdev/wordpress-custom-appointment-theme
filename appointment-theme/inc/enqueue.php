<?php
/**
 * Enqueue Style
 * 
 * @package doctorappointment
 */
function doctorappointment_enqueue_style() {
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri() . '/assets/css/output.css',
        array(), time());
}
add_action( 'wp_enqueue_scripts', 'doctorappointment_enqueue_style' );
