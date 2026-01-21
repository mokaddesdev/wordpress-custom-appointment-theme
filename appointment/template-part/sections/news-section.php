 <?php
    /**
     * Hero section
     *
     * @package doctorappointment
     */

    function doctorappintment_news_section_shortcode()
    {
        ob_start();
    ?>
     <section class="w-[1366px] px-[187px] pt-[60px] pb-[68px]">
         <div class=" flex flex-col gap-[55px]">
             <!-- heading -->
             <div class="heading flex flex-col items-center ">
                 <h2 class="font-worksans text-[18px] font-bold leading-normal tracking-[2.88px] text-[#159EEC] text-center uppercase">Better information, Better health</h2>
                 <h3 class="font-yeseva text-[32px] font-normal leading-normal text-[#1F2B6C] text-center">
                     News
                 </h3>
             </div>
             <!-- News Card -->
             <div class="team-card grid grid-cols-2 gap-5 mt-[2px]">
                 <!-- news card 1 -->
                 <div class=" flex gap-5 w-[486px] h-[154px] flex-shrink-0 rounded-[5px] bg-[#FCFEFE] shadow-[0_0_20px_0_rgba(0,0,0,0.05)]">
                     <!-- image -->
                     <div class="card-img w-[160px] h-[154px]">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.png" alt="Team Member 1" class="team-member-photo w-full h-full object-center">
                     </div>
                     <div class="card-content-wrapper w-[274px] flex flex-col py-[18px] gap-1 ">
                         <h4 class="text-[#159EEC] font-worksans text-[14px] not-italic font-normal leading-normal">Monday 05, September 2021 | By Author</h4>
                         <p class="text-[#212124] w-full font-worksans text-[18px] not-italic font-normal leading-[140%]">This Article’s Title goes Here, but not too long.</p>
                         <!-- icon and number -->
                         <div class="flex gap-3 mt-[18px]">
                             <div class="flex items-center gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
                                     <path d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z" stroke="#526AE9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                     <path d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z" stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10" />
                                 </svg>
                                 <span class="text-[#212124] font-['Work_Sans'] text-[14px] not-italic font-normal leading-normal">68</span>
                             </div>
                             <div class="flex items-center gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                     <path d="M14.5413 1.50364C13.6931 0.653189 12.5686 0.134124 11.3712 0.0402036C10.1737 -0.0537164 8.98209 0.283702 8.01163 0.99151C6.9935 0.234227 5.72624 -0.109161 4.46507 0.030495C3.20389 0.170151 2.04247 0.782479 1.21468 1.74417C0.386899 2.70586 -0.0457584 3.94548 0.0038373 5.21339C0.053433 6.48131 0.581598 7.68335 1.48197 8.57744L6.45124 13.5547C6.86736 13.9642 7.42779 14.1938 8.01163 14.1938C8.59547 14.1938 9.15591 13.9642 9.57203 13.5547L14.5413 8.57744C15.4756 7.63741 16 6.36589 16 5.04054C16 3.71518 15.4756 2.44367 14.5413 1.50364ZM13.413 7.47316L8.44374 12.4424C8.38719 12.4995 8.31989 12.5448 8.24572 12.5758C8.17156 12.6067 8.09199 12.6226 8.01163 12.6226C7.93127 12.6226 7.85171 12.6067 7.77754 12.5758C7.70337 12.5448 7.63607 12.4995 7.57952 12.4424L2.61026 7.44915C1.98271 6.80766 1.6313 5.94594 1.6313 5.04854C1.6313 4.15114 1.98271 3.28942 2.61026 2.64793C3.24975 2.01656 4.11222 1.66254 5.01087 1.66254C5.90952 1.66254 6.77199 2.01656 7.41148 2.64793C7.48587 2.72293 7.57437 2.78246 7.67188 2.82309C7.7694 2.86371 7.87399 2.88463 7.97962 2.88463C8.08526 2.88463 8.18985 2.86371 8.28736 2.82309C8.38488 2.78246 8.47338 2.72293 8.54777 2.64793C9.18726 2.01656 10.0497 1.66254 10.9484 1.66254C11.847 1.66254 12.7095 2.01656 13.349 2.64793C13.9852 3.28101 14.3481 4.13806 14.3601 5.03549C14.372 5.93291 14.0321 6.79933 13.413 7.44915V7.47316Z" fill="#E2315C" />
                                 </svg>
                                 <span class="text-[#212124] font-['Work_Sans'] text-[14px] not-italic font-normal leading-normal">86</span>
                             </div>
                         </div>
                     </div>



                 </div>

                 <!-- news card 2-->
                 <div class=" flex gap-5 w-[486px] h-[154px] flex-shrink-0 rounded-[5px] bg-[#FCFEFE] shadow-[0_0_20px_0_rgba(0,0,0,0.05)]">
                     <!-- image -->
                     <div class="card-img w-[160px] h-[154px]">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.png" alt="Team Member 1" class="team-member-photo w-full h-full object-center">
                     </div>
                     <div class="card-content-wrapper w-[274px] flex flex-col py-[18px] gap-1 ">
                         <h4 class="text-[#159EEC] font-worksans text-[14px] not-italic font-normal leading-normal">Monday 05, September 2021 | By Author</h4>
                         <p class="text-[#212124] w-full font-worksans text-[18px] not-italic font-normal leading-[140%]">This Article’s Title goes Here, but not too long.</p>
                         <!-- icon and number -->
                         <div class="flex gap-3 mt-[18px]">
                             <div class="flex items-center gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
                                     <path d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z" stroke="#526AE9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                     <path d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z" stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10" />
                                 </svg>
                                 <span class="text-[#212124] font-['Work_Sans'] text-[14px] not-italic font-normal leading-normal">68</span>
                             </div>
                             <div class="flex items-center gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                     <path d="M14.5413 1.50364C13.6931 0.653189 12.5686 0.134124 11.3712 0.0402036C10.1737 -0.0537164 8.98209 0.283702 8.01163 0.99151C6.9935 0.234227 5.72624 -0.109161 4.46507 0.030495C3.20389 0.170151 2.04247 0.782479 1.21468 1.74417C0.386899 2.70586 -0.0457584 3.94548 0.0038373 5.21339C0.053433 6.48131 0.581598 7.68335 1.48197 8.57744L6.45124 13.5547C6.86736 13.9642 7.42779 14.1938 8.01163 14.1938C8.59547 14.1938 9.15591 13.9642 9.57203 13.5547L14.5413 8.57744C15.4756 7.63741 16 6.36589 16 5.04054C16 3.71518 15.4756 2.44367 14.5413 1.50364ZM13.413 7.47316L8.44374 12.4424C8.38719 12.4995 8.31989 12.5448 8.24572 12.5758C8.17156 12.6067 8.09199 12.6226 8.01163 12.6226C7.93127 12.6226 7.85171 12.6067 7.77754 12.5758C7.70337 12.5448 7.63607 12.4995 7.57952 12.4424L2.61026 7.44915C1.98271 6.80766 1.6313 5.94594 1.6313 5.04854C1.6313 4.15114 1.98271 3.28942 2.61026 2.64793C3.24975 2.01656 4.11222 1.66254 5.01087 1.66254C5.90952 1.66254 6.77199 2.01656 7.41148 2.64793C7.48587 2.72293 7.57437 2.78246 7.67188 2.82309C7.7694 2.86371 7.87399 2.88463 7.97962 2.88463C8.08526 2.88463 8.18985 2.86371 8.28736 2.82309C8.38488 2.78246 8.47338 2.72293 8.54777 2.64793C9.18726 2.01656 10.0497 1.66254 10.9484 1.66254C11.847 1.66254 12.7095 2.01656 13.349 2.64793C13.9852 3.28101 14.3481 4.13806 14.3601 5.03549C14.372 5.93291 14.0321 6.79933 13.413 7.44915V7.47316Z" fill="#E2315C" />
                                 </svg>
                                 <span class="text-[#212124] font-['Work_Sans'] text-[14px] not-italic font-normal leading-normal">86</span>
                             </div>
                         </div>
                     </div>



                 </div>
                 <!-- news card 3 -->
                 <div class=" flex gap-5 w-[486px] h-[154px] flex-shrink-0 rounded-[5px] bg-[#FCFEFE] shadow-[0_0_20px_0_rgba(0,0,0,0.05)]">
                     <!-- image -->
                     <div class="card-img w-[160px] h-[154px]">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.png" alt="Team Member 1" class="team-member-photo w-full h-full object-center">
                     </div>
                     <div class="card-content-wrapper w-[274px] flex flex-col py-[18px] gap-1 ">
                         <h4 class="text-[#159EEC] font-worksans text-[14px] not-italic font-normal leading-normal">Monday 05, September 2021 | By Author</h4>
                         <p class="text-[#212124] w-full font-worksans text-[18px] not-italic font-normal leading-[140%]">This Article’s Title goes Here, but not too long.</p>
                         <!-- icon and number -->
                         <div class="flex gap-3 mt-[18px]">
                             <div class="flex items-center gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
                                     <path d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z" stroke="#526AE9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                     <path d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z" stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10" />
                                 </svg>
                                 <span class="text-[#212124] font-['Work_Sans'] text-[14px] not-italic font-normal leading-normal">68</span>
                             </div>
                             <div class="flex items-center gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                     <path d="M14.5413 1.50364C13.6931 0.653189 12.5686 0.134124 11.3712 0.0402036C10.1737 -0.0537164 8.98209 0.283702 8.01163 0.99151C6.9935 0.234227 5.72624 -0.109161 4.46507 0.030495C3.20389 0.170151 2.04247 0.782479 1.21468 1.74417C0.386899 2.70586 -0.0457584 3.94548 0.0038373 5.21339C0.053433 6.48131 0.581598 7.68335 1.48197 8.57744L6.45124 13.5547C6.86736 13.9642 7.42779 14.1938 8.01163 14.1938C8.59547 14.1938 9.15591 13.9642 9.57203 13.5547L14.5413 8.57744C15.4756 7.63741 16 6.36589 16 5.04054C16 3.71518 15.4756 2.44367 14.5413 1.50364ZM13.413 7.47316L8.44374 12.4424C8.38719 12.4995 8.31989 12.5448 8.24572 12.5758C8.17156 12.6067 8.09199 12.6226 8.01163 12.6226C7.93127 12.6226 7.85171 12.6067 7.77754 12.5758C7.70337 12.5448 7.63607 12.4995 7.57952 12.4424L2.61026 7.44915C1.98271 6.80766 1.6313 5.94594 1.6313 5.04854C1.6313 4.15114 1.98271 3.28942 2.61026 2.64793C3.24975 2.01656 4.11222 1.66254 5.01087 1.66254C5.90952 1.66254 6.77199 2.01656 7.41148 2.64793C7.48587 2.72293 7.57437 2.78246 7.67188 2.82309C7.7694 2.86371 7.87399 2.88463 7.97962 2.88463C8.08526 2.88463 8.18985 2.86371 8.28736 2.82309C8.38488 2.78246 8.47338 2.72293 8.54777 2.64793C9.18726 2.01656 10.0497 1.66254 10.9484 1.66254C11.847 1.66254 12.7095 2.01656 13.349 2.64793C13.9852 3.28101 14.3481 4.13806 14.3601 5.03549C14.372 5.93291 14.0321 6.79933 13.413 7.44915V7.47316Z" fill="#E2315C" />
                                 </svg>
                                 <span class="text-[#212124] font-['Work_Sans'] text-[14px] not-italic font-normal leading-normal">86</span>
                             </div>
                         </div>
                     </div>



                 </div>
                 <!-- news card 4 -->
                 <div class=" flex gap-5 w-[486px] h-[154px] flex-shrink-0 rounded-[5px] bg-[#FCFEFE] shadow-[0_0_20px_0_rgba(0,0,0,0.05)]">
                     <!-- image -->
                     <div class="card-img w-[160px] h-[154px]">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.png" alt="Team Member 1" class="team-member-photo w-full h-full object-center">
                     </div>
                     <div class="card-content-wrapper w-[274px] flex flex-col py-[18px] gap-1 ">
                         <h4 class="text-[#159EEC] font-worksans text-[14px] not-italic font-normal leading-normal">Monday 05, September 2021 | By Author</h4>
                         <p class="text-[#212124] w-full font-worksans text-[18px] not-italic font-normal leading-[140%]">This Article’s Title goes Here, but not too long.</p>
                         <!-- icon and number -->
                         <div class="flex gap-3 mt-[18px]">
                             <div class="flex items-center gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
                                     <path d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z" stroke="#526AE9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                     <path d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z" stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10" />
                                 </svg>
                                 <span class="text-[#212124] font-['Work_Sans'] text-[14px] not-italic font-normal leading-normal">68</span>
                             </div>
                             <div class="flex items-center gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                     <path d="M14.5413 1.50364C13.6931 0.653189 12.5686 0.134124 11.3712 0.0402036C10.1737 -0.0537164 8.98209 0.283702 8.01163 0.99151C6.9935 0.234227 5.72624 -0.109161 4.46507 0.030495C3.20389 0.170151 2.04247 0.782479 1.21468 1.74417C0.386899 2.70586 -0.0457584 3.94548 0.0038373 5.21339C0.053433 6.48131 0.581598 7.68335 1.48197 8.57744L6.45124 13.5547C6.86736 13.9642 7.42779 14.1938 8.01163 14.1938C8.59547 14.1938 9.15591 13.9642 9.57203 13.5547L14.5413 8.57744C15.4756 7.63741 16 6.36589 16 5.04054C16 3.71518 15.4756 2.44367 14.5413 1.50364ZM13.413 7.47316L8.44374 12.4424C8.38719 12.4995 8.31989 12.5448 8.24572 12.5758C8.17156 12.6067 8.09199 12.6226 8.01163 12.6226C7.93127 12.6226 7.85171 12.6067 7.77754 12.5758C7.70337 12.5448 7.63607 12.4995 7.57952 12.4424L2.61026 7.44915C1.98271 6.80766 1.6313 5.94594 1.6313 5.04854C1.6313 4.15114 1.98271 3.28942 2.61026 2.64793C3.24975 2.01656 4.11222 1.66254 5.01087 1.66254C5.90952 1.66254 6.77199 2.01656 7.41148 2.64793C7.48587 2.72293 7.57437 2.78246 7.67188 2.82309C7.7694 2.86371 7.87399 2.88463 7.97962 2.88463C8.08526 2.88463 8.18985 2.86371 8.28736 2.82309C8.38488 2.78246 8.47338 2.72293 8.54777 2.64793C9.18726 2.01656 10.0497 1.66254 10.9484 1.66254C11.847 1.66254 12.7095 2.01656 13.349 2.64793C13.9852 3.28101 14.3481 4.13806 14.3601 5.03549C14.372 5.93291 14.0321 6.79933 13.413 7.44915V7.47316Z" fill="#E2315C" />
                                 </svg>
                                 <span class="text-[#212124] font-['Work_Sans'] text-[14px] not-italic font-normal leading-normal">86</span>
                             </div>
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
    add_shortcode('news-section', 'doctorappintment_news_section_shortcode')
    ?>