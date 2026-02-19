<?php
/**
 * Header Section
 * 
 * @package doctorappointment
 */
function doctorappintment_header_section_shortcode() {
    ob_start();
?>
<header class=" bg-[#1F2B6C] flex  items-center justify-between gap-6 w-[1366px] mx-auto px-[187px] py-[17px]">
    
    <nav class="flex gap-5 items-center text-[18px] not-italic font-normal leading-normal text-[#FCFEFE] font-worksans">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header_menu',
                 'menu_class'     => 'custom-nav flex gap-5 items-center','container'      => false,
            ) );
            ?>
    </nav>

    <!-- search and button -->
    <div class="flex items-center gap-7 pt-[2px]">
        <div class="relative">
            <button class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22"><path stroke="#fcfefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.889 18.778A8.889 8.889 0 1 0 9.889 1a8.889 8.889 0 0 0 0 17.778M21 21l-4.833-4.833"/></svg>
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