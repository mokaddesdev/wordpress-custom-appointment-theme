<?php
namespace Appointment_Theme\Inc\Classes;

use Appointment_Theme\Inc\Traits\Singleton;

class Enqueue {
    use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

    public function register_styles() {
        wp_register_style(
            'tailwind-css',
            APPOINTMENT_DIR_URI . '/assets/css/output.css',
            [],
            filemtime( APPOINTMENT_DIR_PATH . '/assets/css/output.css' ),
            'all'
        );

        wp_enqueue_style( 'tailwind-css' );
    }

    public function register_scripts() {
        wp_register_script(
            'main-js',
            APPOINTMENT_DIR_URI . '/assets/js/main.js',
            [],
            filemtime( APPOINTMENT_DIR_PATH . '/assets/js/main.js' ),
            true
        );

        wp_enqueue_script( 'main-js' );
    }
}