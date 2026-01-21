<?php
/**
 * Hero inner section
 * 
 * @package doctorappointment
 */
function doctorappintment_hero_inner_section_shortcode() {
    ob_start();
?>
<!-- hero inner card -->
    <section class="relative w-[1366px] px-[187px] flex gap-5 items-center -mt-12 z-40">

        <!-- first card -->
        <div
            class="inline-flex h-[100px] px-[20px] py-[25px] justify-center items-center gap-[56px] flex-shrink-0 rounded-[5px] bg-[#1F2B6C] p-[20px]">

            <!-- Text -->
            <p class="text-white font-worksans text-[16px] font-normal leading-[140%]">
                Book an Appointment
            </p>

            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                <path
                    d="M49.4375 1H2.5625C1.69956 1 1 1.69956 1 2.5625V49.4375C1 50.3004 1.69956 51 2.5625 51H49.4375C50.3004 51 51 50.3004 51 49.4375V2.5625C51 1.69956 50.3004 1 49.4375 1Z"
                    stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16 16H6V26H16V16Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M25.9995 16H15.9995V26H25.9995V16Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M36 16H26V26H36V16Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M46.0005 16H36.0005V26H46.0005V16Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M46.0005 26H36.0005V36H46.0005V26Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M36 26H26V36H36V26Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M25.9995 26H15.9995V36H25.9995V26Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M16 26H6V36H16V26Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M16 36H6V46H16V36Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M25.9995 36H15.9995V46H25.9995V36Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M36 36H26V46H36V36Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.0005 1H16.0005V3.5C16.0005 4.88071 14.8784 6 13.5005 6C12.1198 6 11.0005 4.8779 11.0005 3.5V1Z"
                    stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M36.0005 1H41.0005V3.5C41.0005 4.88071 39.8784 6 38.5005 6C37.1198 6 36.0005 4.8779 36.0005 3.5V1Z"
                    stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <!-- second card -->
        <div
            class="inline-flex h-[100px] px-[20px] py-[25px] justify-center items-center gap-[56px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] p-[20px]">

            <!-- Text -->
            <p class="text-[#1F2B6C] font-worksans text-[16px] font-normal leading-[140%]">
                Book an Appointment
            </p>

            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="46" viewBox="0 0 52 46" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.7485 15.4739C17.384 15.6983 16.6974 17.1071 17.008 18.3431C17.47 20.1813 19.1133 20.8987 19.1133 20.8987C19.1133 20.8987 21.6841 24.2932 21.6841 26.2672C21.6841 28.2413 21.6841 29.0082 20.9952 30.6551C20.3062 32.3019 6.78262 34.2761 6.2085 43.9848H25.8921L45.7918 43.9869C45.2177 34.2782 31.6941 32.304 31.0052 30.6572C30.3162 29.0103 30.3162 28.2434 30.3162 26.2693C30.3162 24.2953 32.887 20.9009 32.887 20.9009C32.887 20.9009 34.5303 20.1834 34.9923 18.3452C35.303 17.1092 34.6163 15.7004 34.2518 15.476C35.2261 12.5032 37.172 2.25444 26.1082 1.88506C26.059 1.87807 26.0101 1.87932 25.9614 1.88076C14.8283 2.25232 16.7742 12.5011 17.7485 15.4739Z"
                    stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1 37.5162C4.24791 35.2388 8.29741 34.3552 8.6274 33.5664C9.17278 32.2627 9.17278 31.6555 9.17278 30.0928C9.17278 28.5301 7.13764 25.843 7.13764 25.843C7.13764 25.843 5.83677 25.2751 5.47104 23.8199C5.22513 22.8414 5.7687 21.7262 6.05724 21.5485C5.28596 19.1952 3.74557 11.082 12.5588 10.7878C12.5974 10.7867 12.6361 10.7857 12.675 10.7912C14.5757 10.8547 15.9914 11.2865 17.0352 11.9478C17.1712 13.4169 17.4931 14.695 17.7483 15.4738C17.3838 15.6983 16.6972 17.107 17.0078 18.3431C17.4698 20.1813 19.1131 20.8987 19.1131 20.8987C19.1131 20.8987 19.1667 20.9695 19.2584 21.0965C19.2117 21.2646 19.1655 21.4167 19.1218 21.5502C19.4103 21.7279 19.9539 22.8431 19.7079 23.8216C19.3422 25.2767 18.0413 25.8447 18.0413 25.8447C18.0413 25.8447 16.0062 28.5318 16.0062 30.0945C16.0062 31.3973 16.0062 32.036 16.3222 32.9678C12.1215 34.794 6.57168 37.8405 6.20833 43.9848H25.8919L45.7917 43.9869C45.4215 37.7278 39.6693 34.6833 35.4437 32.8688C35.7353 31.9762 35.7353 31.3373 35.7353 30.0691C35.7353 28.5064 33.7001 25.8192 33.7001 25.8192C33.7001 25.8192 32.3993 25.2513 32.0335 23.7961C31.7876 22.8177 32.3312 21.7024 32.6197 21.5248C32.6015 21.4692 32.5829 21.4105 32.564 21.3487C32.7606 21.0676 32.8869 20.9008 32.8869 20.9008C32.8869 20.9008 34.5302 20.1834 34.9922 18.3452C35.3028 17.1092 34.6162 15.7004 34.2517 15.476C34.5171 14.6661 34.8546 13.3162 34.9816 11.7732C36.0056 11.1958 37.3557 10.823 39.1213 10.7641C39.1599 10.7629 39.1986 10.7619 39.2375 10.7675C47.9959 11.0599 46.4555 19.1731 45.6842 21.5264C45.9728 21.7041 46.5164 22.8193 46.2704 23.7978C45.9047 25.253 44.6038 25.8209 44.6038 25.8209C44.6038 25.8209 42.5687 28.508 42.5687 30.0708C42.5687 31.6335 42.5687 32.2406 43.1141 33.5443C43.4529 34.3542 47.7126 35.264 51 37.6796V44.0961L39.0665 44.0948H28.2556C28.2561 44.1033 28.2566 44.1118 28.2571 44.1203L12.504 44.1186H1V37.5162Z"
                    stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <!-- Third card -->
        <div
            class="inline-flex h-[100px] px-[20px] py-[25px] justify-center items-center gap-[56px] flex-shrink-0 rounded-[5px] bg-[#159EEC] p-[20px]">

            <!-- Text -->
            <p class="text-white font-worksans text-[16px] font-normal leading-[140%]">
                Book an Appointment
            </p>

            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="40" viewBox="0 0 52 40" fill="none">
                <path d="M51 1.77075H1V31.7708H51V1.77075Z" stroke="#FCFEFE" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M48.9168 31.979H3.0835V35.104H48.9168V31.979Z" stroke="#FCFEFE" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M46.8332 35.104H5.1665V38.229H46.8332V35.104Z" stroke="#FCFEFE" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M25.7487 28.0594C30.1886 28.0594 33.7879 23.1072 33.7879 16.9984C33.7879 10.8897 30.1886 5.9375 25.7487 5.9375C21.3088 5.9375 17.7095 10.8897 17.7095 16.9984C17.7095 23.1072 21.3088 28.0594 25.7487 28.0594Z"
                    stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M9.98454 28.0594H42.0158C42.0158 25.005 44.4059 22.5289 47.3543 22.5289V11.468C44.4059 11.468 42.0158 8.9919 42.0158 5.9375H9.98454C9.98454 8.9919 7.59439 11.468 4.646 11.468V22.5289C7.59439 22.5289 9.98454 25.005 9.98454 28.0594Z"
                    stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M12.1826 18.5785C13.0151 18.5785 13.69 17.871 13.69 16.9983C13.69 16.1257 13.0151 15.4182 12.1826 15.4182C11.3502 15.4182 10.6753 16.1257 10.6753 16.9983C10.6753 17.871 11.3502 18.5785 12.1826 18.5785Z"
                    stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M38.8125 18.5785C39.645 18.5785 40.3199 17.871 40.3199 16.9983C40.3199 16.1257 39.645 15.4182 38.8125 15.4182C37.98 15.4182 37.3052 16.1257 37.3052 16.9983C37.3052 17.871 37.98 18.5785 38.8125 18.5785Z"
                    stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

    </section>
<?php
return ob_get_clean();
}
add_shortcode( 'hero-inner-section', 'doctorappintment_hero_inner_section_shortcode' );
?>