<?php
/**
 * News Section Shortcode
 *
 * @package DoctorAppointment
 */

function doctorappointment_news_section_shortcode() {
	ob_start();
	?>

	<section class="w-[1366px] px-[187px] pt-[60px] pb-[68px]">
		<div class="flex flex-col gap-[55px]">

			<!-- Heading -->
			<div class="heading flex flex-col items-center">
				<h2 class="font-worksans text-[18px] font-bold tracking-[2.88px] text-[#159EEC] uppercase">
					<?php esc_html_e( 'Better information, Better health', 'doctorappointment' ); ?>
				</h2>
				<h3 class="font-yeseva text-[32px] font-normal text-[#1F2B6C]">
					<?php esc_html_e( 'News', 'doctorappointment' ); ?>
				</h3>
			</div>

			<!-- News Cards -->
			<div class="grid grid-cols-2 gap-5">
				<?php
				$args       = array(
					'post_type'      => 'post',
					'posts_per_page' => 4,
					'post_status'    => 'publish',
					'orderby'        => 'date',
					'order'          => 'DESC',
				);
				$news_query = new WP_Query( $args );

				if ( $news_query->have_posts() ) :
					while ( $news_query->have_posts() ) :
						$news_query->the_post();

						$title = get_the_title();
						if ( empty( $title ) ) {
							continue;
						}
						?>

						<article class="flex gap-5 w-[486px] h-[154px] rounded-[5px] bg-[#FCFEFE] shadow-[0_0_20px_rgba(0,0,0,0.05)]">

							<!-- Image -->
							<div class="w-[160px] h-[154px]">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<img
										src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/news.png' ); ?>"
										alt="<?php the_title_attribute(); ?>"
										class="w-full h-full object-cover"
									/>
								</a>
							</div>

							<!-- Content -->
							<div class="flex flex-col py-[18px] gap-1 w-[274px]">

								<!-- Meta -->
								<h4 class="text-[#159EEC] text-[14px] font-normal">
									<?php echo esc_html( get_the_date( 'l j, F Y' ) ); ?>
									|
									<?php esc_html_e( 'By', 'doctorappointment' ); ?>
									<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
										<?php echo esc_html( get_the_author() ); ?>
									</a>
								</h4>

								<!-- Title -->
								<p class="text-[#212124] text-[18px] leading-[140%]">
									<a href="<?php echo esc_url( get_permalink() ); ?>">
										<?php echo esc_html( wp_trim_words( $title, 6, '...' ) ); ?>
									</a>
								</p>

								<!-- Icons -->
								<div class="flex gap-3 mt-[18px]">

									<!-- Views -->
									<div class="flex items-center gap-1">
										<svg width="18" height="13" fill="none" viewBox="0 0 18 13">
											<path d="M8.99 1C6.2 1 3.35 2.61 1.1 5.83c-.13.19-.13.44 0 .63C2.82 9.17 5.64 11.29 8.99 11.29c3.32 0 6.19-2.12 7.92-4.83.12-.19.12-.44 0-.63C15.17 3.15 12.28 1 8.99 1Z" stroke="#526AE9" stroke-width="1.5"/>
											<circle cx="9" cy="6.14" r="2.86" stroke="#526AE9" stroke-width="1.5"/>
										</svg>
										<span class="text-[14px]">68</span>
									</div>

									<!-- Likes -->
									<div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="none"><path fill="#e2315c" d="M14.541 1.504a5.03 5.03 0 0 0-6.53-.512 5.017 5.017 0 0 0-6.529 7.585l4.97 4.978a2.225 2.225 0 0 0 3.12 0l4.97-4.978a5.017 5.017 0 0 0 0-7.073m-1.128 5.97-4.97 4.968a.61.61 0 0 1-.863 0L2.61 7.45a3.433 3.433 0 0 1 0-4.801 3.417 3.417 0 0 1 4.801 0 .8.8 0 0 0 1.137 0 3.417 3.417 0 0 1 4.801 0 3.433 3.433 0 0 1 .064 4.801z"/></svg>
										<span class="text-[14px]">86</span>
									</div>

									<!-- Category -->
									<div class="flex items-center gap-1">
										<svg class="w-5 h-5 text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
											<path stroke-linecap="round" stroke-linejoin="round" d="M9.57 3H5.25A2.25 2.25 0 0 0 3 5.25v4.32c0 .6.24 1.17.66 1.59l9.58 9.58a2.25 2.25 0 0 0 2.61.33 18.1 18.1 0 0 0 5.22-5.22 2.25 2.25 0 0 0-.33-2.61L11.16 3.66A2.25 2.25 0 0 0 9.57 3Z"/>
										</svg>
										<span class="text-[14px]">
											<?php
											$terms = get_the_terms( get_the_ID(), 'category' );
											if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
												$term = reset( $terms );
												echo esc_html( $term->name );
											}
											?>
										</span>
									</div>

								</div>
							</div>
						</article>

						<?php
					endwhile;
					wp_reset_postdata();
				else :
					?>
					<p><?php esc_html_e( 'No posts available right now.', 'doctorappointment' ); ?></p>
					<?php
				endif;
				?>
			</div>

		</div>
	</section>

<?php
return ob_get_clean();
}
add_shortcode( 'news-section', 'doctorappointment_news_section_shortcode' );
