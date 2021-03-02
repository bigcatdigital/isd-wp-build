<?php
 	wp_reset_postdata();
	
	
	$site_headers = new WP_Query([
		'post_type' => 'site-header',
		'post_count' => 1
	]);  
 while ($site_headers->have_posts()) {
	 $site_headers->the_post(); ?>
	 
	 <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 0 0" class="bc-svg-defs" xml:space="preserve">
	 	<defs>
	 		<linearGradient id="isd-rainbow-grad" gradientUnits="userSpaceOnUse" x1="0" y1="25.5" x2="1440" y2="25.5">
	 			<stop  offset="0" style="stop-color:#05D1D1"/>
	 			<stop  offset="0.25" style="stop-color:#6881DB"/>
	 			<stop  offset="0.5" style="stop-color:#D02CE5"/>
	 			<stop  offset="0.75" style="stop-color:#F2EF11"/>
	 			<stop  offset="1" style="stop-color:#3B857E"/>
	 		</linearGradient>
	 		<linearGradient id="linear-gradient" class="bc-svg-defs__linear-gradient" viewBox="0 0 100 100" gradientTransform="rotate(135)">
	 			<stop offset="0%" stop-opacity="1"  class="bc-svg-defs__linear-gradient__col-stop1"/>"
	 			<stop offset="72%" stop-opacity="1" class="bc-svg-defs__linear-gradient__col-stop2"/>
	 		</linearGradient>
	 		<linearGradient id="linear-gradient--orange" class="bc-svg-defs__linear-gradient--orange" viewBox="0 0 100 100" gradientTransform="rotate(135)">
	 			<stop offset="0%" stop-opacity="1"  class="bc-svg-defs__linear-gradient__col-stop1"/>"
	 			<stop offset="72%" stop-opacity="1" class="bc-svg-defs__linear-gradient__col-stop2"/>
	 		</linearGradient>
	 	</defs>
	 </svg>
	 <header class="bc-site-header is-overlay">
	 	<div class="bc-site-header__content">
	 		<div class="bc-site-header__logo">
	 				<a href="<?php echo home_url() ?>" class="bc-site-header__logo__link">
	 					<img src="<?php echo get_field('school-logo')['url']; ?> " alt=" <?php get_field('school-logo')['alt']; ?>" class="\">
	 				</a>
	 		</div>
	 		<div class="bc-site-header__welcome">
	 			<h1 class="bc-site-header__heading"><?php echo get_field('main-nav-welcome-message'); ?> </h1>
	 		</div>
	 		<div class="bc-main-navigation-toggle">
	 			<a class="menu-icon-wrap bc-navigation-toggle" href="javascript:void(0)">
	 				<?php echo '<?xml version="1.0" encoding="utf-8"?>' ?>
	 					<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	 					<svg version="1.1" class="bc-menu-icon " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 100 100" xml:space="preserve">
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
	 		</div><!-- // .bc-main-navigation-toggle -->
	 	</div><!-- // .bc-site-header__content -->
	 	<nav class="bc-main-navigation">
	 		<div class="bc-main-navigation__navs">
	 			<div class="bc-main-navigation__main-nav">
	 				<ul class="bc-main-navigation__links">
	 					<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('main-nav-link-#1')['url'] ?>"><?php echo  get_field('main-nav-link-#1')['title'] ?></a></li>
	 					<?php if (get_field('main-nav-link-#2') && !empty(get_field('main-nav-link-#2'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('main-nav-link-#2')['url'] ?>"><?php echo  get_field('main-nav-link-#2')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('main-nav-link-#3') && !empty(get_field('main-nav-link-#3'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('main-nav-link-#3')['url'] ?>"><?php echo  get_field('main-nav-link-#3')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('main-nav-link-#4') && !empty(get_field('main-nav-link-#4'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('main-nav-link-#4')['url'] ?>"><?php echo  get_field('main-nav-link-#4')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('main-nav-link-#5') && !empty(get_field('main-nav-link-#5'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('main-nav-link-#5')['url'] ?>"><?php echo  get_field('main-nav-link-#5')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('main-nav-link-#6') && !empty(get_field('main-nav-link-#6'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('main-nav-link-#6')['url'] ?>"><?php echo  get_field('main-nav-link-#5')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('main-nav-link-#7') && !empty(get_field('main-nav-link-#7'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('main-nav-link-#7')['url'] ?>"><?php echo  get_field('main-nav-link-#5')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('main-nav-link-#8') && !empty(get_field('main-nav-link-#8'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('main-nav-link-#8')['url'] ?>"><?php echo  get_field('main-nav-link-#5')['title'] ?></a></li>
	 					<?php } ?>
	 				</ul>
	 			</div>
	 			<div class="bc-main-navigation__sub-navigation">
					<h3 class="bc-site-header__sub-sub-heading"><?php echo get_field('quicklinks-header'); ?> </h3>
					<ul class="bc-main-navigation__links">
						<?php if (get_field('quick-link-#1') && !empty(get_field('quick-link-#1'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('quick-link-#1')['url'] ?>"><?php echo  get_field('quick-link-#1')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('quick-link-#2') && !empty(get_field('quick-link-#2'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('quick-link-#2')['url'] ?>"><?php echo  get_field('quick-link-#2')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('quick-link-#3') && !empty(get_field('quick-link-#3'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('quick-link-#3')['url'] ?>"><?php echo  get_field('quick-link-#3')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('quick-link-#4') && !empty(get_field('quick-link-#4'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('quick-link-#4')['url'] ?>"><?php echo  get_field('quick-link-#4')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('quick-link-#5') && !empty(get_field('quick-link-#5'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('quick-link-#5')['url'] ?>"><?php echo  get_field('quick-link-#5')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('quick-link-#6') && !empty(get_field('quick-link-#6'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('quick-link-#6')['url'] ?>"><?php echo  get_field('quick-link-#6')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('quick-link-#7') && !empty(get_field('quick-link-#7'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('quick-link-#7')['url'] ?>"><?php echo  get_field('quick-link-#7')['title'] ?></a></li>
	 					<?php } ?>
	 					<?php if (get_field('quick-link-#8') && !empty(get_field('quick-link-#8'))) { ?>
	 						<li class="bc-main-navigation__item"><a class="bc-main-navigation__item__link" href="<?php echo  get_field('quick-link-#8')['url'] ?>"><?php echo  get_field('quick-link-#8')['title'] ?></a></li>
	 					<?php } ?>
					</ul>
				</div>
	 		</div>
	 	</nav>
	 	<div class="bc-main-navigation__underlay"></div>
	 </header>
 <?php } //end while site headers
 wp_reset_postdata();
?>