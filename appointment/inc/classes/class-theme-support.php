<?php
namespace Appointment_Theme\Inc\Classes;

use Appointment_Theme\Inc\Traits\Singleton;
/**
 * Theme default add theme support
 * 
 * @package appointment
 */
class Theme_Support{
    use Singleton;
    protected function __construct()
    {
        $this->setup_support();
    }

    protected function setup_support() {
        add_action( 'after_setup_theme', [$this, 'theme_supports'] );
    }

    public function theme_supports() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
// add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
    add_theme_support( 'custom-logo', array(
        'header_text'  => array( 'site_title', 'site_description' ),
        'height'       => 30,
        'width'        => 210,
        'flex_width'   => true,
        'flex_height'  => true,
    ) );
    
    $defaults = array(
    'default-image'          => '',
    'default-preset'         => 'default',
    'default-position-x'     => 'left',   
    'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
    'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
    'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
    'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
    'default-color'          => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-background', $defaults );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    //! gutenburg support

    //? add css from website
    add_theme_support('');
    //? gutenburg block support
    add_theme_support( 'wp-block-styles' );
    //? image full width support
    add_theme_support( 'align-wide' );

    global $content_width;
    if ( ! isset( $content_width ) ) {
        $content_width = 140;
    }
    }
}