<?php
	/* Template Name: Student Experience */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Student Experience', '', 'More About Student Experience', array('End of Unit Sharing' => '' . get_permalink(112) . '', 'Field Trips and Guest Speakers' => '' . get_permalink(136) . ''), ['Homepage' => home_url(), 'Student Experience' => '' ], 'pupil-experience-reverse.svg#experience--rev'); ?> 
	<?php echo do_shortcode('[onecoltextslider id="251"]'); ?>
	
	
	<?php 
		/** End of Unit sharing and Field trips **/
		echo do_shortcode('[twocolfeature id="562"]'); 
		echo do_shortcode('[twocolfeature id="563"]'); 
	?>
		
	<!-- Student committes -->
	<section class="bc-feature-component has-colored-text">
		<header class="bc-feature-component__header">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Student Committes</h1>
				<p class="bc-inner-page-content__intro">Education for us is centred around learner voice, choice &amp; ownership, we call this <em>agency</em>. By promoting agency, we aim for students to be active in their development, to take initiative, express interest, voice opinions and ultimately feel ownership in their learning, both in and outside of school.</p>	
				<p>One way of encouraging students to work collaboratively and exercise agency is through student committees.</p>
			</div>
		</header>
		
		<div class="bc-feature-component__content"> 
			<article class="bc-3-columns ">
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/student-council.jpg'); ?>" alt="The Student Council">
					</picture>
					<h2 class="bc-card__heading">Student Council</h2> 
					<p>The Student Council is an opportunity to learn leadership skills and voice ideas to support the running and development of the school</p>
					
				</div><!-- // The Student Council -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/librarian-committee.jpg'); ?>" alt="The ISD Librarian Committee">
					</picture>
					<h2 class="bc-card__heading">Libraran Committee</h2>
					<p>The Librarian Committee keeps the school library a welcoming hub for learning. All of our students have ownership and responsibility for this learning space.</p>
					
				</div><!-- // Libraran Committee -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/yearbook-committee.jpg'); ?>" alt="The Yearbook Committee">
					</picture>
					<h2 class="bc-card__heading">Yearbook Committee</h2>
					<p>Our yearbook is completely created by the students each year during “Yearbook Week”. </p>
					
				</div><!-- // Yearbook Committe -->
			</article><!-- // .bc-3-columns -->
		</div><!-- // .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Student Committees -->
	<section class="bc-feature-component has-shade-01">   
		<header class="bc-feature-component__header">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-feature-component__heading">Global Connections</h1>
			</div>
		</header><!-- // .bc-feature-component__header -->
		<div class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content"> 
				<article class="bc-1-columns bc-expandible-block">
					<div class="bc-column"> 
						<p class="bc-feature-component__intro">ISD is a proud member of the International Baccalaureate (IB) World Schools network. ISD students have the opportunity to connect and collaborate with other IB schools around the globe.</p> 
						<p>Grade 6 students have inspired others classes with their virtual Exhibition event. Grade 1,2 students have compared and contrasted learning communities with an IB school in the USA. Likewise, ISD staff have personal and professional relationships with IB colleagues.</p>
						
						<div class="bc-expandible-block__body">
							<div class="bc-expandible-block__body__text">
						<p>These relationships arise from previous teaching experience, attending professional development workshops, and being part of professional learning communities. Curriculum development, evaluation process, differentiation, and assessments are some of the areas in which the school has engaged in meaningful discussions to promote best practice.</p>  
						<p>ISD alumni are making their mark around the world. After graduation, students move on to secondary schools in Ireland, in their home countries, or in new locations all over the globe. ISD alumni keep in close contact with ISD. Those who are abroad often pay us a visit when they come back to Dublin. And local students continue to collaborate with Exhibition as guest speakers.</p>
								
							</div>
						</div><!-- // .bc-expandible-block__body -->
						<div class="bc-expandible-block__expander">
							<a href="javascript:void(0)" class="bc-expandible-block__expander__button">
								<span class="bc-expandible-block__expander__button__text">
									<span class="inactive-text">Show more</span> 
									<span class="active-text">Show less</span>
								</span>
								<span class="bc-expandible-block__expander__button__icon">
									<svg class="bc-svg-icon">
										<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#close-x"></use> 	
									</svg>	
								</span>
							</a>
						</div><!-- // .bc-expandible-block__expander -->
					</div>

				</article><!-- // .bc-feature-component__content -->
			</div>	
		</div>
		
	</section><!-- // .bc-inner-page-content -->
	
	<?php  
		get_inner_section_nav('More About Student Experience', array('End of Unit Sharing' => '' . get_permalink(112) . '', 'Field Trips and Guest Speakers' => '' . get_permalink(136) . ''));
		get_global_CTA();
	
		get_floating_section_nav(); 
		get_footer();
		
	?>