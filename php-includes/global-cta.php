<?php
 	wp_reset_postdata();
	
	
	$featureCTAs = new WP_Query([
		'post_type' => 'feature-cta',
		'post_count' => 1
	]); 
	while ($featureCTAs->have_posts()) {
	$featureCTAs->the_post() ?>
			<section id="global-cta" class="bc-feature-component bc-feature-component bc-cta-feature has-high-chroma">
			<div class="bc-elipses">
				<svg class="bc-elipses__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 280">
					<title>Elipses</title>
					<!-- fill:url(#linear-gradient) -->
					<circle class="bc-elipses__elipse" /> 
					<circle class="bc-elipses__elipse" /> 
					<circle class="bc-elipses__elipse" />
					<circle class="bc-elipses__elipse" /> 
					<circle class="bc-elipses__elipse" /> 
				</svg>
			</div>
		 <article class="bc-feature-component__content">
		 	<div class="bc-feature-component__content__text-content">
		 	<?php if (get_field('content_label_text')) { ?>	
				<p class="bc-content-label">
					<svg class="bc-svg-icon bc-svg-icon--admissions">
						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg') . get_field('content_label_icon'); ?>"></use> 
					</svg>
					<?php echo get_field('content_label_text') ?>
				</p>
			<?php }//end if 'content-label-text' ?>
				<h1 class="bc-feature-component__heading">Getting Started at ISD
					<svg class="bc-svg-icon isd-cta-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340.2 99">
						<title>Getting started at ISD</title> 
						<circle class="isd-cta-arrow__circle" cx="290.7" cy="49.5" r="48"/>
						<line class="isd-cta-arrow__line" y1="49.39" x2="265.98" y2="49.39"/>
						<path class="isd-cta-arrow__carat" d="M302,49.91,279.7,27.6l2.87-2.82L307.7,49.91,282.57,75l-2.82-2.82Z" transform="translate(0 -1.5)"/>
					</svg>
				</h1>
		 	<?php if (get_field('content-intro-leader-text')) { 
		$intro_leader = get_field('content-intro-leader-text'); ?>
				<p class="bc-feature-component__intro"><?php echo $intro_leader['content-intro-first-para']; ?></p>
				<?php if ($intro_leader['content-intro-second-para']) { ?>
		 		<p><?php echo $intro_leader['content-intro-first-para']; ?></p>	
		 		<?php }//end if content-intro-second-para  ?>	
			<?php }//end if 'content-intro-leader-text' ?>
		 	</div><!-- // .bc-feature-component__content__text-content -->
		 </article>
		 <div class="bc-feature-component__cta"> 
		 	<div class="bc-feature-component__content__text-content">
		 		
		 		<p>
		 			<b>
		 				<a class="bc-icon-link--featured" href="https://docs.google.com/forms/d/19N_bz_sMx1yy0TEWD0qamubdOROFOiqDtOSdhC9AuaY/edit">Pre-enrolment 2020 - 2021
		 					<svg class="bc-svg-icon">
		 						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
		 					</svg>
		 				</a>
		 			</b>
		 		</p>
		 		<p>
		 			<b>
		 				<a class=bc-icon-link--featured href=https://docs.google.com/a/internationalschooldublin.ie/forms/d/1vQdv9Tbh7zk2pkZXY_6PbyATVMQsahwSwmopeuO1LJ0/edit?usp=forms_home&ths=true>Pre-enrolment 2021 - 2022
		 					<svg class=bc-svg-icon>
		 						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
		 					</svg>
		 				</a>
		 			</b>
		 		</p>
		 	</div>
		 </div>
		</section><!-- // .bc-cta-component -->
			<?php 
	}//while $featureCTAs->have_posts()
wp_reset_postdata(); ?>
			