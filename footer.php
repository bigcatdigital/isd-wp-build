<?php
 	wp_reset_postdata();
	$site_footer = new WP_Query([
		'post_type' => 'site-footer',
		'post_count' => 1
	]);  
 	while ($site_footer->have_posts()) {
		$site_footer->the_post(); ?>
			<footer class="bc-feature-component has-brand-darker-background " id="site-footer">
				<div class="bc-feature-component__content">
					<div class="bc-2-columns">
						<div class="bc-column">
							
							<h2><?php echo get_field('footer-address-heading'); ?></h2>
							<p>
								<?php 
										echo get_field('footer-address') . '<br />'; 
										$phone = (get_field('footer-phone-number') && get_field('footer-phone-number') !== '') ? get_field('footer-phone-number') : null;
										$phone_clean = null;
										if ($phone) {
											$phone_clean = preg_replace('/\s/', '', $phone);
											$phone_clean = preg_replace('/-/', '', $phone_clean); ?>
											
								Phone: <a href="tel:<?php echo $phone_clean ?>"><?php echo $phone ?></a><br />			
								
											<?php } //end if $phone ?>
								Email: <a href="mailto:<?php echo get_field('footer-email') ?>"><?php echo get_field('footer-email') ?></a><br>
							</p>
							<div class="bc-social">
								<h3 class="bc-social__heading">Follow us:</h3>
								<ul class="bc-social__links">
									<li>
										<a target="_blank" href="<?php echo get_field('footer-soc-media-link-#1')['url'] ?>" title="<?php echo get_field('footer-soc-media-link-#1')['title'] ?>">
											<svg class="bc-svg-icon">
												<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#<?php echo get_field('footer-soc-media-icon-#1') ?>"></use>  
											</svg>
										</a>		
									</li>
									<?php if (get_field('footer-soc-media-link-#2') && !empty(get_field('footer-soc-media-link-#2'))) { ?>
									<li>
										<a target="_blank" href="<?php echo get_field('footer-soc-media-link-#2')['url'] ?>" title="<?php echo get_field('footer-soc-media-link-#2')['title'] ?>">
											<svg class="bc-svg-icon">
												<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#<?php echo get_field('footer-soc-media-icon-#2') ?>"></use>  
											</svg>
										</a>		
									</li>		
									<?php	}//end if social media link #2 ?>
									<?php if (get_field('footer-soc-media-link-#3') && !empty(get_field('footer-soc-media-link-#3'))) { ?>
									<li>
										<a target="_blank" href="<?php echo get_field('footer-soc-media-link-#3')['url'] ?>" title="<?php echo get_field('footer-soc-media-link-#3')['title'] ?>">
											<svg class="bc-svg-icon">
												<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#<?php echo get_field('footer-soc-media-icon-#3') ?>"></use>  
											</svg>
										</a>		
									</li>		
									<?php	}//end if social media link #3 ?>
									<?php if (get_field('footer-soc-media-link-#4') && !empty(get_field('footer-soc-media-link-#4'))) { ?>
									<li>
										<a target="_blank" href="<?php echo get_field('footer-soc-media-link-#4')['url'] ?>" title="<?php echo get_field('footer-soc-media-link-#4')['title'] ?>">
											<svg class="bc-svg-icon">
												<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#<?php echo get_field('footer-soc-media-icon-#4') ?>"></use>  
											</svg>
										</a>		
									</li>		
									<?php	}//end if social media link #4 ?>
									<?php if (get_field('footer-soc-media-link-#5') && !empty(get_field('footer-soc-media-link-#5'))) { ?>
									<li>
										<a target="_blank" href="<?php echo get_field('footer-soc-media-link-#5')['url'] ?>" title="<?php echo get_field('footer-soc-media-link-#5')['title'] ?>">
											<svg class="bc-svg-icon">
												<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#<?php echo get_field('footer-soc-media-icon-#5') ?>"></use>  
											</svg>
										</a>		
									</li>		
									<?php	}//end if social media link #5 ?>
								</ul>
							</div>
						</div>
						<div class="bc-column bc-media-embed">
							<div class="bc-media-embed__media" style="">
								<?php echo get_field('footer-map-embed'); ?>
							</div>
						</div>
					</div>
				</div>
			</footer>
<?php }// end while $site_footer
	wp_reset_postdata(); 		
	wp_footer() ; ?>
	</body>
</html> 
	