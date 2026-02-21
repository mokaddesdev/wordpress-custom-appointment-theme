<?php
/**
 * Register Menu
 * 
 * @package appointment
 */
namespace Appointment_Theme\Inc\Classes;

use Appointment_Theme\Inc\Traits\Singleton;

class Menus{
    use Singleton;
    protected function __construct()
    {
        $this->set_menus();
    }

    protected function set_menus() {
        add_action( 'init', [$this, 'register_menus' ] );
    }

    public function register_menus() {
    register_nav_menus( array(
    'header_menu'      => esc_html__( 'Header Menu', 'appointment' ),
    'mobile_menu'      => esc_html__( 'Mobile Header', 'appointment' ),
    'footer_link_menu' => esc_html__( 'Footer Menu','appointment' ),
    ) );
    }

    public function get_menu_id( $location ) {
        $locations = get_nav_menu_locations();
        //? get menu id
        $menu_id = $locations[ $location ];
        return ( ! empty( $menu_id ) )? $menu_id : '';
    }
}