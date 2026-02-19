<?php
/**
 * Set up theme
 * 
 * @package doctorappointment
 */
function doctorappointment_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-log', array(
        'height' => 40,
        'weight' => 80,
    ) );
    register_nav_menus( array(
        'header_menu'      => __( 'Header Menu', 'doctorappointment' ),
        'mobile_menu'      => __( 'Mobile Header Menu', 'doctorappointment' ),
        'footer_link_menu' => __( 'Footer Important Link Menu','doctorappointment' ),
    ) );
}
add_action( 'after_setup_theme', 'doctorappointment_setup_theme' );