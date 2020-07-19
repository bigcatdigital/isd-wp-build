<?php
	/* Template Name: L&T After School */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Learning and Teaching', 'After School Programme', 'More about Learning and Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)), $bcs = array('Homepage' => home_url(), 'Learning & Teaching' => get_permalink(86), 'After School Programme' => ''), 'learning-icon-reverse.svg#learning-icon'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">After School Programme</h1>
				<p class="bc-inner-page-content__intro">At ISD, we recognise the value of offering a range of extra curricular activities that appeal to our diverse community of learners and both supplement and enhance the curriculum.</p> 
				<p>We also understand additional childcare is a valued option for many families. Our school offers two different services after school daily from 3:00-5:00pm. Both of these services complement one another.</p>
				<ul>
					<li>After School Care - General after school supervision provided through full time, part time or ad hoc services. Students enjoy games, crafts, indoor and outdoor play.</li>
					<li>Extra Curricular Activities - A range of activities spread across the week, example activities include: piano, guitar, yoga, football, capoeira, Japanese, Portuguese, French, dancing, cooking and sewing.</li>
				</ul>
				<p>Please see an example After School Programme below:</p>
				<div class="bc-responsive-embed">
					<iframe src="https://drive.google.com/file/d/1AnN3YaTEBvBVlxShiPiV_szUksLfwP4f/preview" width="640" height="480"></iframe>
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