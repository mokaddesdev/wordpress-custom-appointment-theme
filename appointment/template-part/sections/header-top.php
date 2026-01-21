<?php
/**
 * Header Section
 * 
 * @package doctorappointment
 */
function doctorappintment_header_top_shortcode() {
    ob_start();
?>
<section class="flex items-center justify-between gap-6 w-[1366px] mx-auto h-[80px] px-[187px] pt-[12px] pb-[8px]">
    <!-- logo -->
    <div class="w-[210px] h-[30px]">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Meddical.png" alt="Logo" class="">
    </div>
    <!-- contact info -->
     <div class="flex items-center gap-[11px]">
        <!-- contact number -->
     <div class="flex items-center gap-[5px]">
        <div class="icon pt-1">
             <svg xmlns="http://www.w3.org/2000/svg" width="41" height="39" viewBox="0 0 41 39" fill="none">
  <path d="M24.1459 33.1262C24.7274 32.7905 25.1502 32.2347 25.3211 31.5811C25.492 30.9275 25.3972 30.2296 25.0574 29.6411L23.7761 27.4219C23.4363 26.8333 22.8794 26.4022 22.2279 26.2235C21.5764 26.0447 20.8837 26.1329 20.3021 26.4687C15.9167 29.0006 13.3542 24.5622 12.0729 22.343C10.7917 20.1238 8.22919 15.6854 12.6146 13.1535C13.1962 12.8178 13.6189 12.2619 13.7899 11.6084C13.9608 10.9548 13.8659 10.2569 13.5261 9.66835L12.2449 7.44916C11.905 6.8606 11.3481 6.42952 10.6966 6.25075C10.0451 6.07199 9.35243 6.16019 8.77089 6.49594C3.28908 9.66086 1.28125 13.779 7.6875 24.875C14.0938 35.9709 18.6641 36.2911 24.1459 33.1262Z" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M35.8156 23.9621C36.9804 19.4989 36.3314 14.7346 34.0113 10.716C31.6911 6.69743 27.8896 3.75324 23.442 2.53032M29.1022 22.12C29.4492 20.7945 29.5325 19.4104 29.3472 18.0469C29.162 16.6835 28.712 15.3672 28.0227 14.1735C27.3335 12.9798 26.4187 11.9319 25.3305 11.0897C24.2423 10.2476 23.002 9.62766 21.6806 9.26539M22.4248 20.2645C22.6577 19.3714 22.5278 18.4181 22.0635 17.6141C21.5993 16.81 20.8387 16.2208 19.9488 15.9759" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

        </div>
        <div class="flex flex-col gap-0 font-worksans text-base not-italic font-medium leading-normal uppercase">
            <p class="text-[#1F2B6C]">Emergency</p>
            <p class="text-[#159EEC]">(237) 681-812-255</p>
        </div>
     </div>

      <!-- Work Hour-->
     <div class="flex items-center gap-1">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
  <path d="M16.6777 31C24.962 31 31.6777 24.2843 31.6777 16C31.6777 7.71573 24.962 1 16.6777 1C8.39346 1 1.67773 7.71573 1.67773 16C1.67773 24.2843 8.39346 31 16.6777 31Z" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round"/>
  <path d="M21.6777 23.5L16.6777 16V6" stroke="#159EEC" stroke-width="2" stroke-linecap="round"/>
</svg>
        </div>
        <div class="font-worksans text-base not-italic font-medium leading-normal uppercase">
            <p class="text-[#1F2B6C]">Work Hour</p>
            <p class="text-[#159EEC]">09:00 - 20:00 Everyday</p>
        </div>
     </div>

        <!-- Location-->
     <div class="flex items-center gap-1">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="33" height="39" viewBox="0 0 33 39" fill="none">
  <path d="M1.35547 15.4C1.35547 29.8 16.3555 37 16.3555 37C16.3555 37 31.3555 29.8 31.3555 15.4C31.3555 7.45 24.643 1 16.3555 1C8.06797 1 1.35547 7.45 1.35547 15.4Z" stroke="#1F2B6C" stroke-width="2"/>
  <path d="M16.3556 20.32C19.2053 20.32 21.5156 18.0098 21.5156 15.16C21.5156 12.3102 19.2053 10 16.3556 10C13.5058 10 11.1956 12.3102 11.1956 15.16C11.1956 18.0098 13.5058 20.32 16.3556 20.32Z" stroke="#159EEC" stroke-width="2"/>
</svg>
        </div>
        <div class="font-worksans text-base not-italic font-medium leading-normal uppercase">
            <p class="text-[#1F2B6C]">Location</p>
            <p class="text-[#159EEC]">0123 Some Place</p>
        </div>
     </div>
     </div>
</section>
<?php
return ob_get_clean();
}
add_shortcode( 'header-top', 'doctorappintment_header_top_shortcode' );
?>