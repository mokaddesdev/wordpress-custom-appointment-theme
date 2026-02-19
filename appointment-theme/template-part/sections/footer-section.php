<?php

/**
 * Footer Section
 * 
 * @package doctorappointment
 */
function doctorappintment_footer_section_shortcode()
{
    ob_start();
?>
    <footer class="w-[1366px] bg-[#1F2B6C]  mx-auto px-[187px] pt-[68px] pb-[74px] flex flex-col gap-0">

        <div class="w-full grid grid-cols-4 gap-4">
            <!-- first row logo and description-->
            <div class="min-w-[293px] mt-3 logo-description flex flex-col gap-6">
                <div class="w-[193px] h-[25px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerlogo.png" alt="Logo" class="w-full h-full">
                </div>
                <p class="text-[#FCFEFE] font-worksans text-[18px] not-italic font-normal leading-[140%]">Leading the Way in Medical Execellence, Trusted Care.</p>
            </div>


            <!-- Important Links -->
            <div class="quick-link ml-6 flex flex-col gap-9">
                <h2 class="text-[#FCFEFE] w-full font-worksans text-[17px] not-italic font-semibold leading-normal">Important Links</h2>
                <ul class="flex flex-col gap-2 text-[#FCFEFE] font-worksans text-[16px] not-italic font-normal leading-[140%]">
                    <li><a href="#" class="text-[#FCFEFE]">Appointment</a></li>
                    <li><a href="#" class="text-[#FCFEFE]">Doctors</a></li>
                    <li><a href="#" class="text-[#FCFEFE]">Services</a></li>
                    <li><a href="#" class="text-[#FCFEFE]">About Us</a></li>
                </ul>

            </div>
            <!-- Contact Us -->
            <div class=" -ml-13 contact-us flex flex-col gap-8">
                <h2 class="text-[#FCFEFE] font-worksans text-[18px] not-italic font-semibold leading-normal">Contact Us</h2>
                <ul class="flex flex-col gap-2 text-[#FCFEFE] font-worksans text-[16px] not-italic font-normal leading-[140%]">
                    <li><a href="#" class="text-[#FCFEFE]">Call: (237) 681-812-255</a></li>
                    <li><a href="#" class="text-[#FCFEFE]">Email: fildineesoe@gmail.com</a></li>
                    <li><a href="#" class="text-[#FCFEFE]">Address: 0123 Some place</a></li>
                    <li><a href="#" class="text-[#FCFEFE]">Some country</a></li>
                </ul>
            </div>


            <!-- Third Row -->
            <div class="-ml-9 flex flex-col gap-8">
                <h1 class="text-[#FCFEFE] font-worksans text-[18px] not-italic font-semibold leading-normal">Newsletter</h1>
                <div class="relative w-[272px] h-[50px] ">
                    <!-- Input -->
                    <input
                        type="text"
                        placeholder="Enter your email address"
                        class="w-full h-13 pl-4 pr-12 bg-[#BFD2F8] py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" />

                    <!-- Icon Button -->
                    <button
                        class="absolute inset-y-0 right-2 flex items-center pr-3 text-gray-500 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 23 23">
                            <path fill="#1f2b6c" d="m20.745.435-.007.003L1.14 8.544a1.08 1.08 0 0 0-.65.79 1.13 1.13 0 0 0 .306 1.03l3.674 3.674a1.1 1.1 0 0 0 1.398.131l8.952-6.158a.183.183 0 0 1 .255.255l-6.158 8.952a1.1 1.1 0 0 0 .13 1.397l3.675 3.675a1.08 1.08 0 0 0 .982.295 1.1 1.1 0 0 0 .805-.67L22.65 2.35l.002-.01A1.467 1.467 0 0 0 20.745.436" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- copy right text -->
        <div class="mt-10 flex justify-between items-center w-full border-t border-[#BFD2F8] pt-6 text-center text-sm">
            <p class="font-worksans text-white text-base font-normal leading-normal pt-5">© 2021 Hospital’s name All Rights Reserved by PNTEC-LTD</p>
            <div class="social-icon flex gap-5 pt-5">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path fill="#bfd2f8" d="M12 0C5.373 0 0 5.373 0 12c0 6.628 5.373 12 12 12 6.628 0 12-5.372 12-12 0-6.627-5.372-12-12-12M9.063 16.974h-2.43v-7.82h2.43zm-1.23-8.78c-.768 0-1.264-.544-1.264-1.217 0-.686.511-1.213 1.295-1.213s1.263.527 1.279 1.213c0 .673-.495 1.217-1.31 1.217m10.105 8.78h-2.43V12.64c0-1.009-.353-1.694-1.232-1.694-.671 0-1.07.464-1.246.91-.065.159-.081.384-.081.608v4.509h-2.431v-5.325c0-.977-.032-1.793-.064-2.495h2.111l.111 1.086h.049c.32-.51 1.104-1.263 2.415-1.263 1.599 0 2.797 1.071 2.797 3.374z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path fill="#bfd2f8" d="M12 0C5.373 0 0 5.373 0 12c0 6.628 5.373 12 12 12 6.628 0 12-5.372 12-12 0-6.627-5.372-12-12-12m2.842 8.293H13.04c-.214 0-.451.28-.451.655v1.302h2.256l-.341 1.858h-1.915v5.576h-2.13v-5.577h-1.93V10.25h1.93V9.158c0-1.568 1.088-2.842 2.58-2.842h1.804z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path fill="#bfd2f8" d="M16.873 8.314a2.07 2.07 0 0 0-1.188-1.186 3.5 3.5 0 0 0-1.16-.216c-.659-.03-.856-.037-2.525-.037s-1.866.008-2.525.037c-.397.005-.79.078-1.161.216a2.07 2.07 0 0 0-1.186 1.187 3.5 3.5 0 0 0-.216 1.16c-.03.659-.037.856-.037 2.525s.008 1.866.037 2.525c.005.396.078.79.216 1.161a2.07 2.07 0 0 0 1.187 1.186c.372.138.764.21 1.16.215.659.03.856.037 2.525.037s1.866-.006 2.525-.038c.396-.004.79-.076 1.161-.213a2.07 2.07 0 0 0 1.186-1.188c.138-.372.21-.764.215-1.16.03-.659.037-.856.037-2.525s-.006-1.866-.038-2.525a3.5 3.5 0 0 0-.213-1.161M12 15.21a3.21 3.21 0 1 1 0-6.42 3.21 3.21 0 0 1 0 6.42m3.336-5.796a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5M14.084 12a2.085 2.085 0 1 1-4.17 0 2.085 2.085 0 0 1 4.17 0M12 0a12 12 0 1 0 0 24 12 12 0 0 0 0-24m6.212 14.576a4.6 4.6 0 0 1-.29 1.518 3.2 3.2 0 0 1-1.828 1.827 4.6 4.6 0 0 1-1.517.291c-.667.03-.88.038-2.577.038s-1.91-.008-2.578-.038a4.6 4.6 0 0 1-1.516-.29 3.2 3.2 0 0 1-1.827-1.828 4.6 4.6 0 0 1-.292-1.517c-.03-.667-.037-.88-.037-2.577s.008-1.91.037-2.578c.01-.518.109-1.03.29-1.516a3.2 3.2 0 0 1 1.83-1.828c.485-.182.997-.28 1.515-.29.668-.03.88-.038 2.578-.038s1.91.008 2.578.037c.518.01 1.03.109 1.516.29a3.2 3.2 0 0 1 1.827 1.83c.182.485.28.997.291 1.515.03.668.038.88.038 2.578s-.008 1.91-.038 2.578z" />
                    </svg>
                </a>
            </div>
    </footer>
<?php
    return ob_get_clean();
}
add_shortcode('footer-section', 'doctorappintment_footer_section_shortcode');
?>