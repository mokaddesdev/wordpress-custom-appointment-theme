 <?php
    /**
     * Hero section
     *
     * @package doctorappointment
     */

    function doctorappintment_hero_section_shortcode()
    {
        ob_start();
    ?>
     <section
         class="relative bg-cover bg-center bg-no-repeat w-[1366px] h-[550px] flex items-center mx-auto"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/herobg.png');">
         <!-- Frame -->
         <div class="absolute inset-0 ">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 1.png" alt="Frame" class="w-full h-full object-cover" />
         </div>
         <!-- right image -->
         <div class="absolute inset-0 ">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="" class="w-full h-full object-cover">
         </div>
         <!-- Content -->
         <div class="relative  flex flex-col gap-0 pl-[187px] pt-[58px] pb-[60px] text-start text-[#1F2B6C]">
             <h2 class="font-worksans text-[18px] font-bold leading-normal tracking-[2.88px] uppercase text-[#159EEC] ">
                 Caring for Life</h2>
             <h3 class="font-yeseva text-[#1F2B6C] text-[48px] font-normal leading-normal max-w-[610px] ">
                 Leading the Way <br>in Medical Excellence
             </h3>
             <button
                 class="w-44 px-5 py-3 rounded-[50px] bg-[#BFD2F8] text-[#1F2B6C] font-worksans text-base font-medium leading-normal">
                 Our Services
             </button>
         </div>
         </div>
     </section>
 <?php
        return ob_get_clean();
    }
    add_shortcode('hero-section', 'doctorappintment_hero_section_shortcode');
    ?>