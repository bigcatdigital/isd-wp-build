<?php
	/* Template Name: Homepage template */
	include 'php-includes/global-functions.php';
	get_header();
?>

<body class="bc-feature-page"> 
	<?php get_site_header(); ?>
		<!-- Hero with image -->
		<?php if (get_field('hero-title') && strcmp(get_field('hero-title'), '') !== 0) { ?>
			<section class="bc-hero bc-hero--is-feature has-waves">
			<div class="bc-hero__content">
				<div class="bc-hero__body">
					<div class="bc-hero__body__text bc-fade-in-up--is-not-visible"> 
						<h1 class="bc-hero__heading"><?php the_field('hero-title') ?></h1>
						<div class="bc-hero__body__text__IB">
							<?php if (get_field('show-world-school-icon')[0] == 'Yes') { ?>
								<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour.png'); ?>" alt="ISD is an International Baccalaureate World School">
								<p>ISD is an International Baccalaureate World School</p> 
							<?php } ?>
						</div><!-- // .bc-hero__body__text__IB -->
					</div><!-- // .bc-hero__body__text -->
					<img src="<?php echo get_theme_file_uri('/media/kids-carefree--lines.svg'); ?>" alt="Feel the energy at ISD" class="is-kids-lines">		
				</div><!-- // .bc-hero__body -->
				<div class="bc-hero__video">
					<video src="<?php the_field('hero-video'); ?>" class="bc-hero__video__video" autoplay muted preload="metadata" playsinline></video>
					<a href="javascript:void(0)" class="bc-hero__video__controls">
						<span class="bc-hero__video__controls__play-icon">
							<svg class="bc-svg-icon ">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#play"></use>  
							</svg>	
							<span class="bc-hero__video__controls__text">Play video</span>
						</span>
						<span class="bc-hero__video__controls__pause-icon">
							<svg class="bc-svg-icon bc-hero__video__controls__pause-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#pause"></use>  
							</svg>	
							<span class="bc-hero__video__controls__text">Pause video</span>
						</span>
					</a>
				</div>
				<div class="media-overlay"></div><!-- // .media-overlay -->
			</div><!-- // .bc-hero__content -->
			<div class="wave-wrap">
				<?php
					echo '<?xml version="1.0" encoding="utf-8"?>'
				?>
				<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 1440 50" xml:space="preserve">
					<path style="fill: url(#isd-rainbow-grad)" id="isd-rainbow-wave" class="st1" d="M0,1v1v25.2c0,0,200.9-24.7,360-24.7S923.9,50,1080,50s360-23.5,360-23.5V2V1H0z"/>
					<path class="isd-wave" id="isd-wave" d="M0,0v1v24.7C0,25.7,200.9,1,360,1s563.9,47,720,47s360-22.5,360-22.5V1V0H0z"/>
				</svg>
			</div><!-- // .bc-wave-wrap -->
		</section><!-- // .bc-hero -->
	<?php }//end if hero_title ?>
	<?php 
		$quicknavs = new WP_Query([
			'post_type' => 'quicknav'
		]);
		while ($quicknavs->have_posts()) {
			$quicknavs->the_post(); 
			if (get_field('quick-nav-link-#1') && is_array(get_field('quick-nav-link-#1')) && ! empty(get_field('quick-nav-link-#1'))) { ?>
	<section class="bc-feature-component site-quicklinks-component has-waves has-shade-01">
		<div class="bc-feature-component__wrap">
			<div class="bc-feature-component__content">
				<div class="bc-feature-component__content__text-content">
						<nav class="site-quicklinks">
							<?php if (get_field('quick-nav-header') && strcmp(get_field('quick-nav-header'), '') !== 0) { ?>
							<h2 class="site-quicklinks__heading">
								<span class="site-quicklinks__heading__label">
									<?php echo get_field('quick-nav-header') ?>
								</span>
								<a href="javascript:void(0)" class="site-quicklinks__toggle bc-navigation-toggle">
										<?php echo '<?xml version="1.0" encoding="utf-8"?>' ?>
										<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
										<svg version="1.1" class="bc-menu-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
											 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
											<g class="bc-menu-icon__lines">
												<line class="bc-menu-icon__line bc-menu-icon__lines__line bc-menu-icon__lines__line--top" x1="1" y1="25" x2="99" y2="25"/>
												<line class="bc-menu-icon__line bc-menu-icon__lines__line bc-menu-icon__lines__line--middle" x1="1" y1="50" x2="99" y2="50"/>
												<line class="bc-menu-icon__line bc-menu-icon__lines__line bc-menu-icon__lines__line--bottom" x1="1" y1="75" x2="99" y2="75"/>						
											</g>
											<g class="bc-menu-icon__active-lines">
												<line class="bc-menu-icon__line bc-menu-icon__lines__active-line bc-menu-icon__lines__active-line--first" x1="-70" y1="-70" x2="0" y2="0"/>
												<line class="bc-menu-icon__line bc-menu-icon__lines__active-line bc-menu-icon__lines__active-line--second" x1="100" y1="0" x2="170" y2="-70"/>
											</g>
										</svg>
								</a>
							</h2>
							<?php }//end if  ?>
						
						<!-- What would you like to know links -->
						<div class="site-quicklinks__wrapper">
							<ul class="site-quicklinks__list" style="padding-bottom: 0.75rem"> 
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#1')['url'] ?>"><?php echo get_field('quick-nav-link-#1')['title'] ?></a></li>
								<?php if (get_field('quick-nav-link-#2') && is_array(get_field('quick-nav-link-#2')) && ! empty(get_field('quick-nav-link-#2'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#2')['url'] ?>"><?php echo get_field('quick-nav-link-#2')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#2 ?>
								<?php if (get_field('quick-nav-link-#3') && is_array(get_field('quick-nav-link-#3')) && ! empty(get_field('quick-nav-link-#3'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#3')['url'] ?>"><?php echo get_field('quick-nav-link-#3')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#3 ?>
								<?php if (get_field('quick-nav-link-#4') && is_array(get_field('quick-nav-link-#4')) && ! empty(get_field('quick-nav-link-#4'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#4')['url'] ?>"><?php echo get_field('quick-nav-link-#4')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#4 ?>
								<?php if (get_field('quick-nav-link-#5') && is_array(get_field('quick-nav-link-#5')) && ! empty(get_field('quick-nav-link-#5'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#5')['url'] ?>"><?php echo get_field('quick-nav-link-#5')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#5 ?>
								<?php if (get_field('quick-nav-link-#6') && is_array(get_field('quick-nav-link-#6')) && ! empty(get_field('quick-nav-link-#6'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#6')['url'] ?>"><?php echo get_field('quick-nav-link-#6')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#4 ?>
								<?php if (get_field('quick-nav-link-#7') && is_array(get_field('quick-nav-link-#7')) && ! empty(get_field('quick-nav-link-#7'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#7')['url'] ?>"><?php echo get_field('quick-nav-link-#7')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#7 ?>
								<?php if (get_field('quick-nav-link-#8') && is_array(get_field('quick-nav-link-#8')) && ! empty(get_field('quick-nav-link-#8'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#8')['url'] ?>"><?php echo get_field('quick-nav-link-#8')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#8 ?>
								<?php if (get_field('quick-nav-link-#9') && is_array(get_field('quick-nav-link-#9')) && ! empty(get_field('quick-nav-link-#9'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#9')['url'] ?>"><?php echo get_field('quick-nav-link-#9')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#9 ?>
								<?php if (get_field('quick-nav-link-#10') && is_array(get_field('quick-nav-link-#10')) && ! empty(get_field('quick-nav-link-#10'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#10')['url'] ?>"><?php echo get_field('quick-nav-link-#10')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#10 ?>
								<?php if (get_field('quick-nav-link-#11') && is_array(get_field('quick-nav-link-#11')) && ! empty(get_field('quick-nav-link-#11'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#11')['url'] ?>"><?php echo get_field('quick-nav-link-#11')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#11 ?>
								<?php if (get_field('quick-nav-link-#12') && is_array(get_field('quick-nav-link-#12')) && ! empty(get_field('quick-nav-link-#12'))) { ?>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_field('quick-nav-link-#12')['url'] ?>"><?php echo get_field('quick-nav-link-#12')['title'] ?></a></li>
								<?php }// end if quick-nav-link-#12 ?>
							</ul>		
						</div>
						<!-- //What would you like to know links -->
					</nav><!-- // .site-quicklinks --> 
				</div><!-- // .bc-feature-component__content -->
			</div><!-- // .bc-feature-component__content .site-quicklinks --> 
			<div class="media-overlay"></div><!-- // .media-overlay -->
		</div><!-- // .bc-feature-component__wrap -->
		<div class="wave-wrap">
			<?php
				echo '<?xml version="1.0" encoding="utf-8"?>'
			?>
			<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 1440 50" xml:space="preserve">
				<path style="fill: url(#isd-rainbow-grad)" id="isd-rainbow-wave" class="st1" d="M0,1v1v25.2c0,0,200.9-24.7,360-24.7S923.9,50,1080,50s360-23.5,360-23.5V2V1H0z"/>
				<path class="isd-wave" id="isd-wave" d="M0,0v1v24.7C0,25.7,200.9,1,360,1s563.9,47,720,47s360-22.5,360-22.5V1V0H0z"/>
			</svg>
		</div><!-- // .bc-wave-wrap -->
	</section><!-- // .bc-feature-component Quick Navigation -->
	<?php 
			}//end if quicklinks link #1
		}//end while $quicknavs
		wp_reset_postdata();
	?>
	<?php 
	while (have_posts()) {
		the_post();
		the_content(); 
		get_global_CTA();
		get_footer();
		get_floating_section_nav(); 	
	}//end while have_posts() ?>