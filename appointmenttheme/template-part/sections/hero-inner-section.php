<?php

/**
 * Hero inner section
 * 
 * @package doctorappointment
 */
function doctorappintment_hero_inner_section_shortcode()
{
    ob_start();
    get_template_part('template-part/svg/hero-inner', 'svg');
?>
    <!-- hero inner card -->
    <section class="relative w-[1366px] px-[187px] flex gap-5 items-center -mt-12 z-40">

        <!-- first card -->
        <div class="inline-flex h-[100px] px-[20px] py-[25px] justify-center items-center gap-[56px] flex-shrink-0 rounded-[5px] bg-[#1F2B6C] p-[20px]">
            <!-- Text -->
            <p class="text-white font-worksans text-[16px] font-normal leading-[140%]">
                Book an Appointment
            </p>
            <!-- Icon -->
            <svg width="52" height="52">
                <use href="#hero-inner-svg1" />
            </svg>
        </div>

        <!-- second card -->
        <div class="inline-flex h-[100px] px-[20px] py-[25px] justify-center items-center gap-[56px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] p-[20px]">
            <!-- Text -->
            <p class="text-[#1F2B6C] font-worksans text-[16px] font-normal leading-[140%]">
                Book an Appointment
            </p>
            <!-- Icon -->
            <svg width="52" height="46">
                <use href="#hero-inner-svg2" />
            </svg>
        </div>

        <!-- Third card -->
        <div class="inline-flex h-[100px] px-[20px] py-[25px] justify-center items-center gap-[56px] flex-shrink-0 rounded-[5px] bg-[#159EEC] p-[20px]">
            <!-- Text -->
            <p class="text-white font-worksans text-[16px] font-normal leading-[140%]">
                Book an Appointment
            </p>
            <!-- Icon -->
            <svg width="52" height="40">
                <use href="#hero-inner-svg3" />
            </svg>
        </div>
        
    </section>
<?php
    return ob_get_clean();
}
add_shortcode('hero-inner-section', 'doctorappintment_hero_inner_section_shortcode');
?>