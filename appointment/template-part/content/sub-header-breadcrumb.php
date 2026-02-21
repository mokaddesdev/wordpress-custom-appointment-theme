<?php

/**
 * Sub header breadcrumb
 * 
 * @package doctorappointment
 */
function doctorappointment_sub_header_breadcrumb_shortcode()
{
    ob_start();
?>
    <section class="relative bg-cover bg-center w-[1366px] h-[250px] flex items-center  mx-auto" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bloghead.png');">
        <!-- Frame -->
        <div class="absolute inset-0">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/Frame 2.png" alt="Frame" class="w-full h-full object-cover" />
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-white/50"></div>

        <!-- Content -->
        <div class="relative  flex flex-col gap-0 px-[187px] pt-[85px] pb-[98px] text-start text-[#1F2B6C]">
            <p class="text-[#1F2B6C] font-['Work_Sans'] text-[18px] not-italic font-normal leading-[140%] flex items-center gap-0">
                <!-- Home link -->
                <a href="./home/home.php" class="hover:text-red-600 flex items-center gap-1">
                    Home
                </a>

                <!-- SVG Separator -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mx-1" fill="none" viewBox="0 0 24 24"
                    stroke="#1F2B6C">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 0v24"
                        transform="rotate(25 12 12)" />
                </svg>

                <!-- Current page -->
                <span>
                    <a href="../services/services.php">News</a>
                </span>
            </p>

            <h2 class="text-[#1F2B6C] -mt-3 font-yeseva text-[48px] not-italic font-normal leading-normal">Blog Posts
            </h2>
        </div>

        <!-- Divider (bottom) -->
        <div class="absolute bottom-0 left-0 w-full">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/divider.png" alt="Divider" class="w-full object-contain">
        </div>
    </section>
<?php
    return ob_get_clean();
}
add_shortcode('breadcrumb', 'doctorappointment_sub_header_breadcrumb_shortcode');
?>