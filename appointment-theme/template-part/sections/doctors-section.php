<?php

/**
 * Doctors Section
 * 
 * @package doctorappointment
 */
function doctorappintment_doctors_section_shortcode()
{
    ob_start();
?>
    <section class="w-[1366px] px-[187px] pt-[60px] pb-[68px]">
        <div class=" flex flex-col gap-[58px]">
            <!-- heading -->
            <div class="heading flex flex-col items-center ">
                <h2 class="font-worksans text-[18px] font-bold leading-normal tracking-[2.88px] uppercase text-[#159EEC] text-center">Trusted Care</h2>
                <h3 class="font-yeseva text-[32px] font-normal leading-normal text-[#1F2B6C] text-center">
                    Our Doctors
                </h3>
            </div>
            <!-- Team Card -->
            <div class="team-card grid grid-cols-3 gap-5">
                <!-- team member 1 -->
                <div class="team-member w-[317px] h-[537px] bg-[#BFD2F8]">
                    <!-- image -->
                    <div class="card-img w-full h-[350px]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team1.png" alt="Team Member 1" class="team-member-photo w-full h-full object-center">
                    </div>
                    <div class="card-content-wrapper flex flex-col items-center justify-center gap-1 mt-6">
                        <h4 class="text-[#1F2B6C)] font-worksans text-lg font-normal leading-[1.4]">Doctor’s Name</h4>
                        <p class="text-[#1F2B6C)] font-worksans text-lg font-bold leading-normal tracking-[2.88px] uppercase">Neurology</p>

                        <div class="socila-icon flex gap-5 py-2">
                            <!-- linkedin -->
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path fill="#1f2b6c" d="M12 0C5.373 0 0 5.373 0 12c0 6.628 5.373 12 12 12 6.628 0 12-5.372 12-12 0-6.627-5.372-12-12-12M9.063 16.974h-2.43v-7.82h2.43zm-1.23-8.78c-.768 0-1.264-.544-1.264-1.217 0-.686.511-1.213 1.295-1.213s1.263.527 1.279 1.213c0 .673-.495 1.217-1.31 1.217m10.105 8.78h-2.43V12.64c0-1.009-.353-1.694-1.232-1.694-.671 0-1.07.464-1.246.91-.065.159-.081.384-.081.608v4.509h-2.431v-5.325c0-.977-.032-1.793-.064-2.495h2.111l.111 1.086h.049c.32-.51 1.104-1.263 2.415-1.263 1.599 0 2.797 1.071 2.797 3.374z" />
                                </svg>
                            </a>
                            <!-- Facebook -->
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path fill="#1f2b6c" d="M12 0C5.373 0 0 5.373 0 12c0 6.628 5.373 12 12 12 6.628 0 12-5.372 12-12 0-6.627-5.372-12-12-12m2.842 8.293H13.04c-.214 0-.451.28-.451.655v1.302h2.256l-.341 1.858h-1.915v5.576h-2.13v-5.577h-1.93V10.25h1.93V9.158c0-1.568 1.088-2.842 2.58-2.842h1.804z" />
                                </svg>
                            </a>
                            <!-- instragram -->
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path fill="#1f2b6c" d="M16.873 8.314a2.07 2.07 0 0 0-1.188-1.186 3.5 3.5 0 0 0-1.16-.216c-.659-.03-.856-.037-2.525-.037s-1.866.008-2.525.037c-.397.005-.79.078-1.161.216a2.07 2.07 0 0 0-1.186 1.187 3.5 3.5 0 0 0-.216 1.16c-.03.659-.037.856-.037 2.525s.008 1.866.037 2.525c.005.396.078.79.216 1.161a2.07 2.07 0 0 0 1.187 1.186c.372.138.764.21 1.16.215.659.03.856.037 2.525.037s1.866-.006 2.525-.038c.396-.004.79-.076 1.161-.213a2.07 2.07 0 0 0 1.186-1.188c.138-.372.21-.764.215-1.16.03-.659.037-.856.037-2.525s-.006-1.866-.038-2.525a3.5 3.5 0 0 0-.213-1.161M12 15.21a3.21 3.21 0 1 1 0-6.42 3.21 3.21 0 0 1 0 6.42m3.336-5.796a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5M14.084 12a2.085 2.085 0 1 1-4.17 0 2.085 2.085 0 0 1 4.17 0M12 0a12 12 0 1 0 0 24 12 12 0 0 0 0-24m6.212 14.576a4.6 4.6 0 0 1-.29 1.518 3.2 3.2 0 0 1-1.828 1.827 4.6 4.6 0 0 1-1.517.291c-.667.03-.88.038-2.577.038s-1.91-.008-2.578-.038a4.6 4.6 0 0 1-1.516-.29 3.2 3.2 0 0 1-1.827-1.828 4.6 4.6 0 0 1-.292-1.517c-.03-.667-.037-.88-.037-2.577s.008-1.91.037-2.578c.01-.518.109-1.03.29-1.516a3.2 3.2 0 0 1 1.83-1.828c.485-.182.997-.28 1.515-.29.668-.03.88-.038 2.578-.038s1.91.008 2.578.037c.518.01 1.03.109 1.516.29a3.2 3.2 0 0 1 1.827 1.83c.182.485.28.997.291 1.515.03.668.038.88.038 2.578s-.008 1.91-.038 2.578z" />
                                </svg>
                            </a>

                        </div>
                        <!-- view profile button -->
                        <div class="view-profile-button mt-3 w-full">
                            <button href="#" class="bg-[#1F2B6C] text-[#BFD2F8] text-center font-worksans text-[16px] not-italic font-normal leading-[140%] w-full py-3 rounded">View Profile</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- handle card dot button -->
            <div class="flex justify-center gap-0.5 -mt-6">
                <button class="dot-button w-4.5 h-4.5 rounded-full bg-[#BFD2F8] mx-1"></button>
                <button class="dot-button w-4.5 h-4.5 rounded-full bg-[#1F2B6C] mx-1"></button>
                <button class="dot-button w-4.5 h-4.5 rounded-full bg-[#BFD2F8] mx-1"></button>
            </div>
    </section>
<?php
    return ob_get_clean();
}
add_shortcode('doctors-section', 'doctorappintment_doctors_section_shortcode')
?>