<?php
/**
 * Header Section
 * 
 * @package doctorappointment
 */
function doctorappintment_header_section_shortcode() {
    ob_start();
?>

<header class=" bg-[#1F2B6C] flex  items-center justify-between gap-6 w-[1366px]  mx-auto px-[187px] py-[17px]">

    <nav class="flex gap-5 items-center text-[18px] not-italic font-normal leading-normal text-[#FCFEFE] font-worksans">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header_menu',
                 'menu_class'     => 'custom-nav flex gap-5 items-center','container'      => false, // avoid extra div
            ) );
            ?>
    </nav>

    <!-- search and button -->
    <div class="flex items-center gap-7 pt-[2px]">
        <div class="relative">
            <button class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                    <path d="M10.3889 18.7779C15.2982 18.7779 19.2779 14.7982 19.2779 9.88894C19.2779 4.97971 15.2982 1 10.3889 1C5.47971 1 1.5 4.97971 1.5 9.88894C1.5 14.7982 5.47971 18.7779 10.3889 18.7779Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M21.5002 21.0001L16.6669 16.1667" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <button class="w-[173px] h-[44px] bg-[#BFD2F8] rounded-[50px] px-[35px] py-[8px] font-worksans text-[#1F2B6C] text-base not-italic font-medium leading-normal">Appointment</button>
    </div>

</header>
<?php
return ob_get_clean();
}
add_shortcode( 'header-section', 'doctorappintment_header_section_shortcode' );
?>