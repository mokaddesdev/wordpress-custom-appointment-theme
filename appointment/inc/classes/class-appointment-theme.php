<?php
namespace Appointment_Theme\Inc\Classes;

use Appointment_Theme\Inc\Traits\Singleton;

class Appointment_Theme {
    use Singleton;

    protected function __construct() {
        $this->set_hooks();
    }

    protected function set_hooks() {
        // actions and filters
    }
}