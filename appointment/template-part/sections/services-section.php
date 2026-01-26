<?php

/**
 * Services Section
 * 
 * @package doctorappointment
 */
function doctorappintment_services_section_shortcode()
{
    ob_start();
    get_template_part('template-part/svg/services', 'svg');
?>
    <section class="w-[1366px] flex flex-col gap-2 px-[187px] -mt-2 pb-[68px]">
        <!-- heading -->
        <div class="heading flex flex-col items-center justify-center gap-0">
            <h2
                class="font-worksans text-[18px] font-bold leading-normal tracking-[2.88px] uppercase text-[#159EEC] text-center">
                Care you can believe in</h2>
            <h3 class="font-yeseva text-[32px] font-normal leading-normal text-[#1F2B6C] text-center">
                Our Services
            </h3>
        </div>

        <!-- service details wrapper -->
        <div class="flex gap-5 mt-12">
            <!-- sidebar Left -->
            <div class="w-[157px] h-[484px] border border-[#1F2B6C] rounded-[5px]">
                <ul
                    class="flex flex-col gap-0 text-[#1F2B6C] hover:text-[#BFD2F8] text-center font-worksans text-base font-normal leading-[140%]">
                    <li
                        class="flex  flex-col items-center gap-2 w-full py-6 pl-0.5 rounded group hover:bg-[#1F2B6C] cursor-pointer">
                        <!-- Icon -->
                         <svg class="w-8 h-8 fill-current text-[#159EEC] group-hover:text-white transition-colors duration-300">
                            <use href="#free-checkup" />
                         </svg>
                        <span class="text-[#212124] group-hover:text-white transition-colors duration-300">
                            Free Checkup
                        </span>
                    </li>

                    <li
                        class="flex items-center flex-col gap-2 w-full py-6 pl-0.5 rounded group hover:bg-[#1F2B6C] cursor-pointer">
                        <!-- Icon -->
                        <svg class="w-8 h-7 fill-current text-[#159EEC] group-hover:text-white transition-colors duration-300">
                            <use href="#cardiogram" />
                        </svg>
                        <span class="text-[#212124] group-hover:text-white transition-colors duration-300">
                            Cardiogram
                        </span>
                    </li>
                    <li
                        class="flex items-center flex-col gap-2 w-full py-6 pl-0.5 rounded group hover:bg-[#1F2B6C] cursor-pointer">
                        <!-- Icon -->
                        <svg class="w-8 h-8 fill-current text-[#159EEC] group-hover:text-white transition-colors duration-300">
                            <use href="#dna-test" />
                        </svg>
                        <span class="text-[#212124] group-hover:text-white transition-colors duration-300">
                            Dna Testing
                        </span>
                    </li>
                    <li
                        class="flex items-center flex-col gap-2 w-full py-6 pl-0.5 rounded group hover:bg-[#1F2B6C] cursor-pointer">
                        <!-- Icon -->
                        <svg class="w-8 h-10 fill-current text-[#159EEC] group-hover:text-white transition-colors duration-300">
                            <use href="#blood-bank" />
                        </svg>
                        <span class="text-[#212124] group-hover:text-white transition-colors duration-300">
                            Blood Bank
                        </span>
                    </li>
                    <button class="bg-[#1F2B6C] py-2">
                        <a href="#">
                            <span
                                class="text-[#BFD2F8] font-worksans text-sm font-medium leading-normal hover:text-white transition-colors duration-300">
                                View All
                            </span>
                        </a>
                    </button>

                </ul>
            </div>

            <!-- center content-->
            <div class="center py-6 w-[470px] flex flex-col">
                <h2 class="text-black font-worksans text-[26px] font-medium leading-normal">
                    A passion for putting patients first.
                </h2>

                <!-- characteristics -->
                <div class="grid grid-cols-2 w-[540px] pt-5 items-center space-y-4">

                    <div class="flex gap-2 items-center">
                        <div class="w-4 h-4 shrink-0 rounded-full bg-[#159EEC]"></div>
                        <p class="text-[18px] font-normal leading-[140%] font-worksans text-black">
                            A Passion for Healing
                        </p>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="w-4 h-4 shrink-0 rounded-full bg-[#159EEC]"></div>
                        <p class="text-[18px] font-normal leading-[140%] font-worksans text-black">
                            5-Star Care
                        </p>
                    </div>

                    <div class="flex  items-center gap-2">
                        <div class="w-4 h-4 shrink-0 rounded-full bg-[#159EEC]"></div>
                        <p class="text-[18px] font-normal leading-[140%] font-worksans text-black">
                            All our best
                        </p>
                    </div>

                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 shrink-0 rounded-full bg-[#159EEC]"></div>
                        <p class="text-[18px] font-normal leading-[140%] font-worksans text-black">
                            Believe in Us
                        </p>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="w-4 h-4 shrink-0 rounded-full bg-[#159EEC]"></div>
                        <p class="text-[18px] font-normal leading-[140%] font-worksans text-black">
                            A Legacy of Excellence
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 shrink-0 rounded-full bg-[#159EEC]"></div>
                        <p class="text-[18px] font-normal leading-[140%] font-worksans text-black">
                            Always Caring
                        </p>
                    </div>


                </div>
                <p class="pt-3.5 w-full font-worksans text-black text-[16px] font-normal leading-[140%]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare
                    ornare. Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit
                    nascetur proin massa in. Consequat faucibus porttitor enim et.
                </p>
                <p class="pt-3.5 w-full font-worksans text-black text-[16px] font-normal leading-[140%]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque. Convallis
                    felis vitae tortor augue. Velit nascetur proin massa in.
                </p>

            </div>

            <!-- right -->
            <div class="right-images flex flex-col gap-5 mt-0.5">

                <div class="first-img relative w-[324px] h-[231.339px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicehome1.png" alt="" class="w-full h-full object-cover">
                    <!-- Divider (bottom) -->
                    <div class="absolute bottom-0 left-0 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicedivider.png" alt="Divider" class="w-full object-contain">
                    </div>
                </div>
                <div class="second-img relative w-[324px] h-[231.339px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicehome2.png" alt="" class="w-full h-full object-cover">
                    <!-- Divider (bottom) -->
                    <div class="absolute bottom-0 left-0 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicedivider.png" alt="Divider" class="w-full object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean();
}
add_shortcode('services-section', 'doctorappintment_services_section_shortcode')
?>