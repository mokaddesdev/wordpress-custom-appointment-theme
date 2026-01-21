<?php
/**
 * Contact Section
 * 
 * @package doctorappointment
 */
function doctorappintment_contact_section_shortcode(){
ob_start();
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
                <svg class="w-[40px] h-[40px] stroke-[#1F2B6C] group-hover:stroke-white transition-all duration-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 39" fill="none">
                    <path d="M24.1459 33.1261C24.7274 32.7903 25.1502 32.2345 25.3211 31.5809C25.492 30.9273 25.3972 30.2295 25.0574 29.6409L23.7761 27.4218C23.4363 26.8332 22.8794 26.4021 22.2279 26.2233C21.5764 26.0446 20.8837 26.1328 20.3021 26.4685C15.9167 29.0005 13.3542 24.5621 12.0729 22.3429C10.7917 20.1237 8.22919 15.6853 12.6146 13.1534C13.1962 12.8176 13.6189 12.2618 13.7899 11.6082C13.9608 10.9546 13.8659 10.2568 13.5261 9.66823L12.2449 7.44904C11.905 6.86048 11.3481 6.42939 10.6966 6.25063C10.0451 6.07187 9.35243 6.16006 8.77089 6.49582C3.28908 9.66074 1.28125 13.7789 7.6875 24.8748C14.0938 35.9708 18.6641 36.291 24.1459 33.1261Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M35.8156 23.962C36.9804 19.4988 36.3314 14.7345 34.0113 10.7159C31.6911 6.6973 27.8896 3.75312 23.442 2.5302M29.1022 22.1199C29.4492 20.7944 29.5325 19.4103 29.3472 18.0468C29.162 16.6833 28.712 15.3671 28.0227 14.1734C27.3335 12.9796 26.4187 11.9318 25.3305 11.0896C24.2423 10.2475 23.002 9.62754 21.6806 9.26527M22.4248 20.2644C22.6577 19.3713 22.5278 18.418 22.0635 17.6139C21.5993 16.8099 20.8387 16.2207 19.9488 15.9758" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                <svg
                    class="w-[40px] h-[40px] fill-none transition-all duration-500 block"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 39">
                    <path
                        d="M1 15.4C1 29.8 16 37 16 37C16 37 31 29.8 31 15.4C31 7.45 24.2875 1 16 1C7.7125 1 1 7.45 1 15.4Z"
                        stroke="currentColor"
                        stroke-width="2" />
                    <path
                        d="M16.0001 20.32C18.8499 20.32 21.1601 18.0098 21.1601 15.16C21.1601 12.3102 18.8499 10 16.0001 10C13.1503 10 10.8401 12.3102 10.8401 15.16C10.8401 18.0098 13.1503 20.32 16.0001 20.32Z"
                        stroke="currentColor"
                        stroke-width="2" />
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
                <svg
                    class="w-[40px] h-[40px] fill-none transition-all duration-500 block"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 39 32">
                    <path
                        d="M1.7998 1H37.1998V30.5H1.7998V1Z"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M37.1998 6.8999L19.4998 18.6999L1.7998 6.8999"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round" />
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
                <svg
                    class="w-[40px] h-[40px] fill-none transition-all duration-500 block"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 33 32">
                    <path
                        d="M16.6777 31C24.962 31 31.6777 24.2843 31.6777 16C31.6777 7.71573 24.962 1 16.6777 1C8.39346 1 1.67773 7.71573 1.67773 16C1.67773 24.2843 8.39346 31 16.6777 31Z"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round" />
                    <path
                        d="M21.6777 23.5L16.6777 16V6"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round" />
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