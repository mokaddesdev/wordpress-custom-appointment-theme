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
        // Get all the locations
        $locations = get_nav_menu_locations();
        // Get menu id
        $menu_id = $locations[ $location ];
        return ( ! empty( $menu_id ) ) ? $menu_id : '';
    }

    public function get_child_menu_items( $menu_array, $parent_id ) {
        $child_menus = [];

        if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {
            foreach( $menu_array as $menu ) {
                if ( intval( $menu->menu_item_parent ) === intval( $parent_id ) ) {
                    array_push( $child_menus, $menu );
                }
            }
        }
        return $child_menus;
    }

  public function get_grand_child_menu_items( $menus, $parent_id ) {

    $grand_childs = [];

    if ( ! empty( $menus ) && is_array( $menus ) ) {

        foreach ( $menus as $menu ) {

            if ( intval( $menu->menu_item_parent ) === intval( $parent_id ) ) {

                $grand_childs[] = $menu;

            }

        }

    }

    return $grand_childs;
}
}