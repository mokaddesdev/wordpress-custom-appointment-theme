<?php
/**
 * Header Top
 * 
 * @package appointment
 */
?>
<section class="flex items-center justify-between gap-6 w-[1366px] mx-auto h-[80px] px-[187px] pt-[12px] pb-[8px]">
    <!-- logo -->
    <div class="w-[210px] h-[30px]">
        <a href="#">
        <?php
        if ( function_exists( 'the_custom_logo') ) {
            the_custom_logo();
        }
        ?>
        </a>
    </div>
    <!-- contact info -->
    <div class="flex items-center gap-[11px]">
        <!-- contact number -->
        <div class="flex items-center gap-[5px]">
            <!-- //icon -->
            <div class="icon pt-1">
                <svg width="41" height="39">
                    <use href="#contact-number" />
                </svg>
            </div>
            <div class="flex flex-col gap-0 font-worksans text-base not-italic font-medium leading-normal uppercase">
                <p class="text-[#1F2B6C]">Emergency</p>
                <p class="text-[#159EEC]">(237) 681-812-255</p>
            </div>
        </div>

        <!-- Work Hour-->
        <div class="flex items-center gap-1">
            <!-- icon -->
            <svg width="33" height="32">
                <use href="#clock" />
            </svg>

            <div class="font-worksans text-base not-italic font-medium leading-normal uppercase">
                <p class="text-[#1F2B6C]">Work Hour</p>
                <p class="text-[#159EEC]">09:00 - 20:00 Everyday</p>
            </div>
        </div>

        <!-- Location-->
        <div class="flex items-center gap-1">
            <!-- icon -->
            <svg width="33" height="39">
                <use href="#location" />
            </svg>
            <div class="font-worksans text-base not-italic font-medium leading-normal uppercase">
                <p class="text-[#1F2B6C]">Location</p>
                <p class="text-[#159EEC]">0123 Some Place</p>
            </div>
        </div>
    </div>
</section>