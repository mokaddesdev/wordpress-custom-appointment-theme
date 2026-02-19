<?php

/**
 * Appointment Section
 * 
 * @package doctorappointment
 */
function doctorappintment_appointment_section_shortcode()
{
    ob_start();
?>
    <!-- Appointments section -->
    <section class="relative w-[1366px] bg-cover bg-center bg-no-repeat flex gap-[94px] px-[187px] pt-[38px] pb-[66px]" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/appoinmentbg.png');">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-[#FCFEFE] opacity-80 z-0"></div>
        <!-- left text -->
        <div class="left-text w-[407px] z-10 pt-6 flex flex-col items-start justify-center gap-2 ">
            <h2 class="font-yeseva text-[32px] font-normal leading-normal text-[#159EEC] ">Book an Appointment</h2>
            <h3 class="text-base font-normal leading-[140%] font-['Work_Sans'] text-[#212124] text-[16px] text-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus porttitor enim et.
            </h3>

        </div>

        <div class="right-form w-[486px] z-10  flex flex-col items-start gap-3 -mt-7">


            <form class="bg-[#1F2B6C] text-white mt-14 rounded-[5px] w-[491px] mx-auto">
                <!-- Name and Gender -->
                <div class="grid grid-cols-2">
                    <div class="relative">
                        <input type="text" id="name" placeholder="Name" required class="w-full bg-transparent border-b border-white px-2 py-3 focus:outline-none placeholder-white placeholder:font-worksans placeholder:text-base placeholder:font-normal placeholder:leading-[140%] placeholder:pl-3   placeholder:pt-4" />
                    </div>
                    <div class="relative w-full">
                        <select id="gender" required
                            class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
                            <option value="" disabled selected class="text-white">Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>

                        <!-- Custom Dropdown Icon -->
                        <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8" />
                            </svg>
                        </div>
                    </div>


                </div>

                <!-- Email and Phone -->
                <div class="grid grid-cols-2">
                    <div class="relative ">
                        <input type="email" id="email" placeholder="Email" required class="w-full bg-transparent border-b  border-white px-2 py-3.5 focus:outline-none placeholder-white placeholder:font-worksans placeholder:text-base placeholder:font-normal placeholder:leading-[140%] placeholder:pl-3   placeholder:pt-4" />

                    </div>
                    <div class="relative">
                        <input type="text" id="phone" placeholder="Phone" required class="w-full bg-transparent border-b border-l border-white px-2 py-3.5 focus:outline-none placeholder-white placeholder:font-worksans placeholder:text-base placeholder:font-normal placeholder:leading-[140%] placeholder:pl-3   placeholder:pt-4" />
                    </div>

                </div>

                <!-- Date and time -->
                <div class="grid grid-cols-2">
                    <div class="relative w-full">
                        <select id="date" required
                            class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
                            <option value="" disabled selected class="text-white">Date</option>
                            <option value="date1">Date 1</option>
                            <option value="date2">Date 2</option>
                            <option value="date3">Date 3</option>
                        </select>

                        <!-- Custom Dropdown Icon -->
                        <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8" />
                            </svg>
                        </div>
                    </div>
                    <!-- Time -->
                    <div class="relative w-full">
                        <select id="time" required
                            class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
                            <option value="" disabled selected class="text-white">Time</option>
                            <option value="time1">Time 1</option>
                            <option value="time2">Time 2</option>
                            <option value="time3">Time 3</option>
                        </select>

                        <!-- Custom Dropdown Icon -->
                        <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8" />
                            </svg>
                        </div>
                    </div>


                </div>

                <!-- Doctor and Department -->
                <div class="grid grid-cols-2">
                    <div class="relative w-full">
                        <select id="doctor" required
                            class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3.5 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
                            <option value="" disabled selected class="text-white">Doctor</option>
                            <option value="doctor1">Doctor 1</option>
                            <option value="doctor2">Doctor 2</option>
                            <option value="doctor3">Doctor 3</option>
                        </select>

                        <!-- Custom Dropdown Icon -->
                        <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative w-full">
                        <select id="department" required
                            class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3.5 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
                            <option value="" disabled selected class="text-white">Department</option>
                            <option value="cardiology">Cardiology</option>
                            <option value="neurology">Neurology</option>
                            <option value="orthopedics">Orthopedics</option>
                        </select>

                        <!-- Custom Dropdown Icon -->
                        <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8" />
                            </svg>
                        </div>
                    </div>


                </div>



                <!-- Message -->
                <div class="relative">
                    <textarea id="message" required
                        class="peer w-full h-[185px] bg-transparent px-2 py-4 text-white focus:outline-none placeholder-white placeholder:font-worksans placeholder:text-base placeholder:font-normal placeholder:leading-[140%] placeholder:pl-3   placeholder:pt-0"
                        placeholder="Message"></textarea>

                </div>

                <!-- Submit Button -->
                <div class="flex justify-center bg-[#BFD2F8]">
                    <button type="submit"
                        class="bg-transparent w-full border-none text-[#1F2B6C] text-center font-[Work_Sans] text-[16px] font-medium uppercase leading-normal py-3 px-6 rounded-b-md hover:bg-pink-300 hover:text-[#1F2B6C] transition-colors duration-300">
                        Submit
                    </button>
                </div>
            </form>


        </div>
    </section>
<?php
    return ob_get_clean();
}
add_shortcode('appointment-section', 'doctorappintment_appointment_section_shortcode')
?>