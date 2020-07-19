<?php
	/* Template Name: L&T School Calendar */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Learning and Teaching', 'Academic Calendar', 'More about Learning and Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)), $bcs = array('Homepage' => home_url(), 'Learning & Teaching' => get_permalink(86), 'School Calendar' => ''), 'learning-icon-reverse.svg#learning-icon'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">2020-2021 Calendar</h1>
				<p>You can view or download the School Academic Calendar here:</p>
				<div class="bc-responsive-embed">
					<iframe src="<?php echo get_theme_file_uri('media/PDF/ISD-2020--2021-Academic-Calendar.pdf'); ?>" width="640" height="480"></iframe>
				</div><!-- // .bc-responsive-embed -->
				
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
		
	
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_inner_section_nav('More about Learning & Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)));
		get_global_CTA();
		get_footer();
	?>