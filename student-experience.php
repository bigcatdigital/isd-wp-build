<?php
	/* Template Name: Student Experience */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
		
	<?php get_inner_site_header('Student Experience', '', 'More About Student Experience', array('End of Unit Sharing' => '' . get_permalink(112) . '', 'Field Trips and Guest Speakers' => '' . get_permalink(136) . ''), ['Homepage' => home_url(), 'Student Experience' => '' ], 'pupil-experience-reverse.svg#experience--rev'); ?> 
	<section class="bc-feature-component">   
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content"> 
				<p class="bc-content-label ib-world-school">
					<svg class="bc-svg-icon"> 
						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>'); ?>#pupil-experience-reverse"></use>  
					</svg>
					Student Experience
				</p>
				<h1 class="bc-feature-component__heading">ISD Students</h1>
				<p class="bc-feature-component__intro">The student experience at the International School of Dublin (ISD) cannot be simply summarised into one  statement. There are so many factors which contribute to our students having distinctive, varied and eclectic experiences.</p> 
				<p>Families attending ISD continually remark on how much their “children love coming to school” and we pride ourselves on our ability to truly listen to our students, individualise their educational journey and provide opportunities that keep learning fun and engaging.</p>  
				<p>You don’t have to take our word for it, see what our students have to say:</p>
				<div class="bc-flickty-slider bc-text-slider">
					<a href="" class="bc-flickty-slider__prev is-inactive">
						<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
						</svg>
					</a><!-- // .bc-flickty-slider__prev -->
					<a href="" class="bc-flickty-slider__next">
						<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
						</svg>
					</a><!-- // .bc-flickty-slider__next -->
					<div class="bc-flickty-slider__slide has-mark-right--red">
						<p class="bc-quote-text">&quot;I love ISD because everyone is international, there is an interesting mix of people and everyone understands when we have to come and go.&quot;</p>
						<p>
							<strong>Alexandra – age 9</strong>
						</p>
					</div><!-- // .bc-flickty-slider__slide -->
					<div class="bc-flickty-slider__slide has-mark-right--orange">
						<p class="bc-quote-text">&quot;ISD is an excellent school that is always striving to better itself, even the teachers talk about how they are learners just like us. I’m proud to be one of its students.&quot;</p>
						<p>
							<strong>Noah – age 12</strong>
						</p>
					</div><!-- // .bc-flickty-slider__slide -->
					<div class="bc-flickty-slider__slide has-mark-right--purple">
						<p class="bc-quote-text">&quot;At ISD you have the chance to give your own opinion and learn to give reasons for your
Thoughts. You have a chance to help and participate in the school community.&quot;</p>						
						<p>
							<strong>Suzanne - age 11</strong>
						</p>
					</div><!-- // .bc-flickty-slider__slide -->
				</div><!-- // .bc-flickty-slider -->
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- // .bc-feature-component__content -->
	</section><!-- // .bc-inner-page-content -->
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
				<a href="" class="bc-flickty-slider__prev is-inactive">
						<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
						</svg>
					</a>
					<a href="" class="bc-flickty-slider__next">
						<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
						</svg>
					</a>
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
			</div><!-- // .bc-flickty-slider -->
		</div><!-- // ..bc-feature-component__content -->
	</section><!-- // .bc-feature-component Student Experience -->
	<!-- End of unit sharing & Field Trips -->
	<section class="bc-feature-component bc-2-col-full-features" aria-label="An IB Word School and Student Experience"> 
		<article class="bc-2-col-full-feature is-brand-primary">
			<div class="bc-feature-component__content">
				<div class="bc-2-col-full-feature__image">
					<picture>
						<source srcset="<?php echo get_theme_file_uri('/media/children-together.jpg'); ?>" media="(max-width: 859px)">
						<img src="<?php echo get_theme_file_uri('/media/children-together.jpg'); ?>" alt="Children together">
					</picture>
				</div>
				<div class="bc-2-col-full-feature__text">
					
					<h1 class="bc-2-col-full-feature__heading">End of Unit Sharing</h1>
					<p class="bc-feature-component__intro">Every 6 weeks the school community comes together to celebrate student learning through End of Unit Sharing.</p>
					<p>Over the course of an afternoon, each class gives a 20-minute presentation to articulate their learning over the unit of inquiry.  Parents become the students and students become the teachers as work is presented.</p> 

					<a class="bc-button" href="<?php echo get_permalink(112) ?>">
						See some previous events
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>	
				</div>	
			</div><!-- // .bc-feature-component__content -->
		</article><!-- // .bc-2-col-full-feature -->
		<article class="bc-2-col-full-feature is-brand-primary">
			<div class="bc-feature-component__content">
				<div class="bc-2-col-full-feature__image">
					<picture>
						<source srcset="<?php echo get_theme_file_uri('/media/children-at-ship.jpg'); ?>" media="(max-width: 859px)">
						<img src="<?php echo get_theme_file_uri('/media/children-at-ship.jpg'); ?>" alt="Children on a field trip">
					</picture>
				</div>
				<div class="bc-2-col-full-feature__text">
					
					<h1 class="bc-2-col-full-feature__heading">Field Trips and Guest Speakers</h1>
					<p class="bc-feature-component__intro">We believe that our students greatly benefit from learning both inside and outside of the classroom. We encourage our students to make both local and global connections with their Units of Inquiry. </p>
					<p>On a regular basis students participate in field trips.  In addition, students often host guest speakers in a variety of expert areas.</p> 

					<a class="bc-button" href="<?php echo get_permalink(136) ?>">
						See some previous events
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>	
				</div>	
			</div><!-- // .bc-feature-component__content -->
		</article><!-- // .bc-2-col-full-feature -->
		
	</section><!-- // .bc-2-col-full-features -->
	<!-- Student committes -->
	<section class="bc-feature-component has-colored-text">
		<header class="bc-feature-component__header">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Student committes</h1>
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
					<!--<div class="bc-card__cta">
						<a href="javascript:void(0)" class="bc-icon-link">
							The ISD Student Council
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>-->
				</div><!-- // The Student Council -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/librarian-committee.jpg'); ?>" alt="The ISD Librarian Committee">
					</picture>
					<h2 class="bc-card__heading">Libraran Committee</h2>
					<p>The Librarian Committee keeps the school library a welcoming hub for learning. All of our students have ownership and responsibility for this learning space.</p>
					<!--<div class="bc-card__cta">
						<a href="javascript:void(0)" class="bc-icon-link">
							The Librarian Committe 
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>-->
				</div><!-- // Libraran Committee -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/yearbook-committee.jpg'); ?>" alt="The Yearbook Committee">
					</picture>
					<h2 class="bc-card__heading">Yearbook Committee</h2>
					<p>Our yearbook is completely created by the students each year during “Yearbook Week”. </p>
					<!--<div class="bc-card__cta">
						<a href="javascript:void(0)" class="bc-icon-link">
							The Yearbook Committee
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>-->
				</div><!-- // Cristen Schwab -->
				
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<h2 class="bc-card__heading">Welcoming Committee</h2>
					<p>ISD has established a Welcoming Committee to allow students to assist with the school tour process for prospective families.</p>
					<!--<div class="bc-card__cta">
						<a href="javascript:void(0)" class="bc-icon-link">
							The Welcoming Committee
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>-->
				</div><!-- // Welcoming Committee -->
			</article><!-- // .bc-3-columns -->
		</div><!-- // .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Student Committees -->
	<section class="bc-feature-component has-shade-01">   
		<header class="bc-feature-component__header">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-feature-component__heading">Global connections</h1>
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