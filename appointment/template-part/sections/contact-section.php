<?php
/**
 * Contact Section
 * 
 * @package doctorappointment
 */
function doctorappintment_contact_section_shortcode(){
ob_start();
get_template_part( 'template-part/svg/contact', 'svg' );
$email_title    = get_theme_mod( 'contact_email_title' );
$email_title = ! empty( $email_title ) ? $email_title : 'Email';
$email_head_one = get_theme_mod( 'contact_email_heading_one' );
$email_head_one = ! empty( $email_head_one ) ? $email_head_one :                 'fildineeesoe@gmil.com';
$email_head_two = get_theme_mod( 'contact_email_heading_two' );
$email_head_two = ! empty( $email_head_two ) ? $email_head_two : 'myebstudios@gmail.com';

?>
<section class="w-[1366px] px-[187px] pt-[56px] pb-[66px] flex flex-col gap-14">
    <!-- heading -->
    <div class="heading flex flex-col gap-0 justify-center items-center">
        <h2 class="font-worksans text-[18px] font-bold leading-normal tracking-[2.88px] uppercase text-[#159EEC] text-center">Get in touch</h2>
        <h3 class="font-yeseva text-[32px] font-normal leading-normal text-[#1F2B6C] text-center">Contact</h3>
    </div>
    <!-- Contact card -->
    <div class="grid grid-cols-4 gap-4">
        <!-- First Card -->
        <div class="w-[233px] h-[233px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] p-[52px_0px_50px_28px] flex flex-col items-start gap-1 transition-all duration-500 hover:bg-[#1F2B6C] group font-worksans">
            <div class="svg-icon w-10 h-12">
                <!-- SVG Icon -->
                 <svg class="w-[40px] h-[40px] stroke-[#1F2B6C] group-hover:stroke-white transition-all duration-500">
                    <use href="#emergency-call" />
                 </svg>
            </div>
            <!-- Title -->
            <h3 class="font-worksans text-[18px] font-bold leading-normal uppercase text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
                Emergency
            </h3>

            <!-- Body -->
            <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
                (237) 681-812-255
            </p>
            <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
                (237) 666-331-894
            </p>
        </div>
        <!-- Second Card -->
        <div
            class="w-[233px] h-[233px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] 
  p-[52px_0px_50px_28px] flex flex-col items-start gap-1 
  transition-all duration-500 hover:bg-[#1F2B6C] group font-worksans 
  text-[#1F2B6C] hover:text-white">
            <div class="svg-icon w-10 h-12">
                <!-- SVG Icon -->
                 <svg class="w-[40px] h-[40px] fill-none transition-all duration-500 block">
                    <use href="#location-icon" />
                 </svg>
            </div>
            <!-- Title -->
            <h3 class="font-worksans text-[18px] font-bold leading-normal uppercase text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
                Location
            </h3>

            <!-- Body -->
            <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
                0123 Some place
            </p>
            <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
                9876 Some country
            </p>
        </div>

        <!-- Third Card -->
        <div
            class="w-[233px] h-[233px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] 
  p-[52px_0px_50px_28px] flex flex-col items-start gap-1 
  transition-all duration-500 hover:bg-[#1F2B6C] group font-worksans 
  text-[#1F2B6C] hover:text-white">
            <div class="svg-icon w-10 h-12">
                <!-- SVG Icon -->
                  <svg class="w-[40px] h-[40px] fill-none transition-all duration-500 block">
                    <use href="#email-icon" />
                 </svg>
               
            </div>

            <!-- Title -->
            <h3 class="font-worksans text-[18px] font-bold leading-normal uppercase transition-colors duration-500">
                Email
            </h3>

            <!-- Body -->
            <p class="text-[16px] font-normal leading-[140%] transition-colors duration-500">
                fildineeesoe@gmil.com
            </p>
            <p class="text-[16px] font-normal leading-[140%] transition-colors duration-500">
                myebstudios@gmail.com
            </p>
        </div>


        <!-- Fourth Card -->
        <div
            class="w-[233px] h-[233px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] 
  p-[52px_0px_50px_28px] flex flex-col items-start gap-1 
  transition-all duration-500 hover:bg-[#1F2B6C] group font-worksans 
  text-[#1F2B6C] hover:text-white">
            <div class="svg-icon w-10 h-12">
                <!-- SVG Icon -->
                  <svg class="w-[40px] h-[40px] fill-none transition-all duration-500 block">
                    <use href="#clock-icon" />
                 </svg>
            </div>

            <!-- Title -->
            <h3 class="font-worksans text-[18px] font-bold leading-normal uppercase text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
                Working Hours
            </h3>

            <!-- Body -->
            <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
                Mon-Sat 09:00-20:00
            </p>
            <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
                Sunday Emergency only
            </p>
        </div>

    </div>

</section>
<?php
return ob_get_clean();
}
add_shortcode( 'contact-section','doctorappintment_contact_section_shortcode' )
?>