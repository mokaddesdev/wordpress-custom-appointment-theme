<?php

use Appointment_Theme\Inc\Classes\Menus;
/**
 * Nav header
 * 
 * @package appointment
 */
$menu_class = Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('header_menu');
$header_menus = wp_get_nav_menu_items( $header_menu_id );
?>
<nav class="appointment-nav flex gap-5 items-center text-[18px] not-italic font-normal leading-normal text-[#FCFEFE] font-worksans">
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'header_menu',
                 'menu_class'     => 'appontment-menus',
                 'container'      => false,
            ) );
            ?>
        </nav>


        <!-- search and button -->
        <div class="flex items-center gap-7 pt-[2px]">
            <div class="relative">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22">
                        <path stroke="#fcfefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.889 18.778A8.889 8.889 0 1 0 9.889 1a8.889 8.889 0 0 0 0 17.778M21 21l-4.833-4.833" />
                    </svg>
                </button>
            </div>
            <button
                class="w-[173px] h-[44px] bg-[#BFD2F8] rounded-[50px] px-[35px] py-[8px] font-worksans text-[#1F2B6C] text-base not-italic font-medium leading-normal">Appointment</button>
        </div>