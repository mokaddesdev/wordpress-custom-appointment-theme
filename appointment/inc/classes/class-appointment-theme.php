<?php
namespace Appointment_Theme\Inc\Classes;

use Appointment_Theme\Inc\Traits\Singleton;

class Appointment_Theme {
    use Singleton;

    protected function __construct() {
        $this->setup_classes();
    }

    protected function setup_classes() {
        /**
         * Classes
         */
        Enqueue::get_instance();
        Theme_Support::get_instance();
        Menus::get_instance();
    }
}