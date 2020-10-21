<?php
	/* Template Name: About - Contact */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Contact', '', '', $bcs = array('Homepage' => home_url(), 'About ISD' => get_permalink(13), 'Contact' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content">
				<h1 class="bc-inner-page-content__heading">Contact US</h1>
				<?php while (have_posts()) {
					the_post(); ?>
					<?php the_content() ?>
				<?php } ?>
			</div>
			<div class="bc-feature-component__content">
				<p><strong>Phone:</strong> (+353) 087 – 329 – 1417</p>
				<p><strong>Mailing Address:</strong></p>
				<p>International School of Dublin<br>
					Synge Street<br>
					Dublin 8<br>
					D08 PW64<br>
					Ireland
				</p>
				<div class="bc-responsive-embed">
					<iframe width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.5543593338793!2d-6.269379184406062!3d53.33333207997631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486708c05eaffa17:0xc7b2066b72310475!2sInternational%20School%20of%20Dublin!5e0!3m2!1sen!2sie!4v1509995829865"></iframe>
				</div>	
			</div>
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>