  <?php
 /**
  * About section
  *
  * @package doctorappointment
  */

 function doctorappintment_about_section_shortcode() {
ob_start();
 ?>
 <!-- About Section -->
    <section class="w-[1366px] px-[187px] pt-[60px] pb-[68px]">
        <!-- heading -->
        <div class="heading flex flex-col items-center justify-center gap-0">
            <h2
                class="font-worksans text-[18px] font-bold leading-normal tracking-[2.88px] uppercase text-[#159EEC] text-center">
                Welcome to Meddical</h2>
            <h3 class="font-yeseva text-[32px] font-normal leading-normal text-[#1F2B6C] text-center">
                A Great Place to Receive Care
            </h3>
            <p
                class="text-[#212124] pt-2 pb-8 max-w-[658px] text-center font-worksans text-[16px] font-normal leading-[140%]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare
                ornare. Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus porttitor
                enim et.</p>

            <div class="button -ml-8 pb-4">
                <button
                    class="flex items-center gap-3 border-none text-[16px] font-normal leading-[140%] text-[#159EEC] transition-all duration-500 group-hover:text-[#1F2B6C] ">
                    Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>

        <div
            class="relative  mt-11 bg-cover bg-center w-full h-[250px] flex items-center  mx-auto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/abouthome.png');?">
            <!-- Frame -->
            <div class="absolute inset-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 2.png" alt="Frame" class="w-full h-full object-cover" />
            </div>

            <!-- Divider (bottom) -->
            <div class="absolute bottom-0 left-0 w-full">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/divider.png" alt="Divider" class="w-full object-contain">
            </div>
        </div>
</section>
<?php
return ob_get_clean();
 }
 add_shortcode( 'about-section', 'doctorappintment_about_section_shortcode' );
