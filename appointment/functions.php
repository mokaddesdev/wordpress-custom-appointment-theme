<?php
// use Appointment_Theme\Inc\Classes\Appointment_Theme;
/**
 * Theme Functions
 * 
 * @package appointment
 */
if ( ! defined('APPOINTMENT_DIR_PATH') ) {
    define('APPOINTMENT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

require_once APPOINTMENT_DIR_PATH . '/inc/helpers/autoloader.php';
// var_dump( spl_autoload_functions() );
// die();
function appointment_get_theme_instance() {
    Appointment_Theme\Inc\Classes\Appointment_Theme::get_instance();
}
appointment_get_theme_instance();

require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/set-up.php';
require_once get_template_directory() . '/template-part/sections/hero-section.php';
require_once get_template_directory() . '/template-part/sections/about-section.php';
get_template_part('');
require_once get_template_directory() . '/template-part/sections/hero-inner-section.php';
require_once get_template_directory() . '/template-part/sections/services-section.php';
require_once get_template_directory() . '/template-part/sections/specialist-section.php';
require_once get_template_directory() . '/template-part/sections/appointment-section.php';
require_once get_template_directory() . '/template-part/sections/doctors-section.php';
require_once get_template_directory() . '/template-part/sections/news-section.php';
require_once get_template_directory() . '/template-part/sections/contact-section.php';

require_once get_template_directory() . '/template-part/content/sub-header-breadcrumb.php';

require_once get_template_directory() . '/inc/cpt/services.php';
require_once get_template_directory() . '/inc/cpt/doctors.php';
require_once get_template_directory() . '/inc/cpt/testimonials.php';
require_once get_template_directory() . '/inc/taxonomy/services-category.php';
require_once get_template_directory() . '/inc/taxonomy/doctors-category.php';

require_once get_template_directory() . '/inc/customizer/contact-info.php';