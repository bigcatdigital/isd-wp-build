<?php
	/* Template Name: Level 1 page template -- Student Experience */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php 
		while (have_posts()) {
			the_post();
			$parent_id = $post->post_parent;
			$parent_title = get_the_title($parent_id);
			
			$sub_nav_links_field;
			$sub_nav_links = [];
			if (get_field('sub-navigation-links')) {
				$sub_nav_links_field = get_field('sub-navigation-links');
				foreach ($sub_nav_links_field as $linkfield) {
					if ($linkfield !== null && is_array($linkfield)) {
						array_push($sub_nav_links, $linkfield);	
					}	
				}
			}
			if (the_title !== null) {
				$this_title =  get_the_title() ;
			}
			$breadcrumbs = [
				'Homepage' => home_url()
			];
			$ancestor_ids = get_post_ancestors($post);
			foreach ($ancestor_ids as $ancestor_id) {
				$breadcrumbs[get_the_title($ancestor_id)] = get_the_permalink($ancestor_id);
			}
			$breadcrumbs[$this_title] = '';
			
			$section_nav_title = (empty($sub_nav_links)) ? '' : 'More about ' . $this_title ; 
			
			$header_icon = get_field('header-icon');
			
			get_inner_site_header($this_title, '', $section_nav_title, $sub_nav_links, $breadcrumbs, $header_icon); ?>
			<?php echo do_shortcode('[onecoltextslider id="251"]'); ?>
			<!-- Community Events -->
			<section class="bc-feature-component bc-feature-component--slider has-shade-01">   
				<header class="bc-feature-component__header">
					<div class="bc-feature-component__content__text-content">
						<h1>Community Events</h1>
						<p class="bc-intro-paragraph">We run a series of Community Events throughout the School year which allow parents, teachers and students to meet and find out what&apos;s happening at the School.</p> 
						<p>For parents this is an excellent opportunity build their network in Dublin and to be involved with academic progess at the School.</p>
					</div>
				</header><!-- // .bc-feature-component__header -->
				<div class="bc-feature-component__content ">
					<div class="bc-flickty-slider bc-card-slider has-colored-text">
							<div class="bc-flickty-slider__slider">
								<div class="bc-card has-image bc-flickty-slider__slide">	
									<picture class="bc-card__media is-4x3">
										<img src="<?php echo get_theme_file_uri('/media/parent-workshop.jpg'); ?>" alt="A parent and teacher meeting">
									</picture>
									<h2 class="bc-card__heading">Parent Workshop</h2>
									<p>ISD parents have the opportunity to become more familiar with the IBPYP curriculum through interactive workshops provided by the ISD teaching team. </p>

								</div><!-- // Parent Workshop -->
								<div class="bc-card has-image bc-flickty-slider__slide">	
									<picture class="bc-card__media  is-4x3">
										<img src="<?php echo get_theme_file_uri('/media/exhibition-night.jpg'); ?>" alt="A final year student presenting at Exhibition Night">
									</picture>
									<h2 class="bc-card__heading">Exhibition Night</h2>
									<p>In final year of the Primary Years Programme students have the opportunity to lead their own final inquiry project and present this at The Exhibition.</p>
								</div><!-- // Parent Workshop -->
								<div class="bc-card has-image bc-flickty-slider__slide">	
									<picture class="bc-card__media  is-4x3">
										<img src="<?php echo get_theme_file_uri('/media/holiday-celebrations.jpg'); ?>" alt="A parent and teacher meeting">
									</picture>
									<h2 class="bc-card__heading">Holiday Celebrations</h2>
									<p>We celebrate a variety of holiday celebrations to help our students become more internationally minded. </p>
								</div><!-- // Parent Workshop -->
								<div class="bc-card has-image bc-flickty-slider__slide">	
									<picture class="bc-card__media  is-4x3">
										<img src="<?php echo get_theme_file_uri('/media/sports-day.jpg'); ?>" alt="Children during sports day">
									</picture>
									<h2 class="bc-card__heading">Sports Day</h2>
									<p>The annual sports day allows Students take part in activities to showcase athletic abilities, skills gained throughout the year and to have fun!</p>
								</div><!-- // Parent Workshop -->
								<div class="bc-card has-image bc-flickty-slider__slide">	
									<picture class="bc-card__media  is-4x3">
										<img src="<?php echo get_theme_file_uri('/media/100th-day-of-school.jpg'); ?>" alt="Children together creating the shape of the number 100">
									</picture>
									<h2 class="bc-card__heading">100th Day of School</h2>
									<p>The 100th day of the School year is celebrated by exploring math concepts that can be taught using the number 100.</p>
								</div><!-- // 100th day of School -->
								<div class="bc-card has-image bc-flickty-slider__slide">
									<picture class="bc-card__media  is-4x3">
										<img src="<?php echo get_theme_file_uri('/media/peace-proms.jpg'); ?>" alt="Children at the annual Peace Proms in Dublin">
									</picture>
									<h2 class="bc-card__heading">Peace Proms</h2>
									<p>Peace Proms is an project for primary schools that gives students the opportunity to sing with a choir of 3,000 children and a full symphony orchestra.</p>
								</div><!-- // Peace Proms -->
							</div><!-- // .bc-flickty-slider__slider -->
							<div class="bc-flickty-slider__controls"> 
								<a href="javascript:void(0)" class="bc-flickty-slider__prev is-inactive">
									<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
									</svg>
								</a>
								<a href="javascript:void(0)" class="bc-flickty-slider__next">
									<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
									</svg>
								</a>
							</div><!-- // .bc-flickty-slider__controls -->
					</div><!-- // .bc-flickty-slider -->
				</div><!-- // ..bc-feature-component__content -->
			</section><!-- // .bc-feature-component Student Experience -->

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
		<?php }//end while have_posts()  
		get_inner_section_nav($section_nav_title, $sub_nav_links);	
		wp_reset_postdata();
		if (get_field('show-feature-cta') && get_field('show-feature-cta') !== 'no') {
			get_global_CTA();	
		}
		get_footer();
		if (get_field('show-show-to-top') && get_field('show-show-to-top') === 'yes') {
			
			get_floating_section_nav(); 	
		}
	?>