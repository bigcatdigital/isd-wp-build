<?php
	/* Template Name: Admissions */
	include 'php-includes/global-functions.php';
	get_header();
?>

<body> 
	<?php get_inner_site_header('Admissions', '', 'More about admissions', array('Transition Support' => '' . get_permalink(176) . '', 'Fees' => '' . get_permalink(57) . '', 'Frequently Asked Questions' => '' . get_permalink(22) . ''), ['Homepage' => home_url(), 'Admissions' => '' ], 'admissions-icon.svg#export'); ?>
	<section class="bc-feature-component">
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
			<h1 class="bc-feature-component__heading">Admissions Overview</h1>
				<p class="bc-intro-paragraph">Admission to International School of Dublin (ISD) is open year-round to students of all nationalities, faiths and backgrounds. We are committed to meeting each student’s individual needs to the best of our ability. Acceptance and placement is based on the potential of the applicant to benefit from the programme and educational services available.</p>
				
				<h2>The Admissons Process</h2>
				<div class="bc-stepped-process">
					<h3 class="bc-stepped-process__heading is-orange-text"><span class="bc-stepped-process__number">1</span> Express an Interest</h3>
					<p class=""><b>Prospective families first express interest in ISD by completing one pre-enrolment form per child for the year of application.</b></p> 
					<p>
						<a href="https://docs.google.com/forms/d/19N_bz_sMx1yy0TEWD0qamubdOROFOiqDtOSdhC9AuaY/edit" class="bc-icon-link">
							Pre-enrol for 2020 - 2021 
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
							</svg>
						</a>
					</p>
					<p>
						<a href="https://docs.google.com/a/internationalschooldublin.ie/forms/d/1vQdv9Tbh7zk2pkZXY_6PbyATVMQsahwSwmopeuO1LJ0/edit?usp=forms_home&ths=true" class="bc-icon-link">
							Pre-enrol for 2021 - 2022 
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
							</svg>
						</a>
					</p>
					<h3 class="bc-stepped-process__heading is-red-text"><span class="bc-stepped-process__number">2</span> Provide Background</h3>
					<p class=""><b>Upon receipt of a pre-enrolment form, a member of the admissions team will contact the family and request the child’s school complete an application reference form.</b></p> 
					<p>This helps the school to gain a more detailed picture of each child’s academic and social progress.</p>	
					<h3 class="bc-stepped-process__heading is-primary-text"><span class="bc-stepped-process__number">3</span> School Tour and Interview</h3>
					<p><b>Upon receipt of the application reference form, the family are contacted by the admissions team to arrange a school tour.  An informal student interview is conducted as part of the tour (the tour and interview might be conducted via Skype if necessary).</b></p>	
					<p><b>Please note: A pilot school morning is required for any child enrolling in Pre-Kindergarten. A trial morning is also required for any child enrolling in formal schooling for the first time.</b></p>
					<p>This is an exciting and useful experience to gain a sense of the child’s interest and comfort in our school setting.  During the trial, we use an informal assessment checklist, based on age appropriate developmental milestones, to provide information to the parents and gauge the child’s readiness to join the school.</p>
					<h3 class="bc-stepped-process__heading is-mid-green-text"><span class="bc-stepped-process__number">4</span> Offer of a Place</h3>
					<p class=""><b>The family are contacted by the admissions team to inform them if they will be offered a place in the school.  The applicant may or may not be offered a place at ISD.</b></p>
					<p>An applicant will be offered a place at ISD if:</p>
					<ul>
						<li>There are spaces available in the corresponding class</li>
						<li>If the child can successfully access the curriculum</li>
					</ul>
					<h3 class="bc-stepped-process__heading is-indigo-text"><span class="bc-stepped-process__number">5</span> Acceptance</h3>
					<p><b>Upon acceptance families are issued an acceptance letter and are required to:</b></p>
					<ul>
						<li>Pay the registration deposit</li>
						<li>Provide copies of the child’s birth certificate, passport and immunisation records (translated to English where necessary)</li>
						<li>Provide a copy of the child’s most recent school report (translated to English where necessary)</li>
					</ul>
				</div>
				<h2>Further Information</h2>
				<p>For further information, please see our extensive <a href="<?php echo get_permalink(22) ?>">frequently asked questions section</a>.</p>
				<p>Alternatively you can use the admissions contact information below:</p>
				<p>
					<b>Team Lead</b>: Louise Kearns <br />
					<b>Email</b>: <a href="mailto:admin@internationalschooldublin.ie">admin@internationalschooldublin.ie</a> <br />
					<b>Phone</b>: <a href="tel:087-329-1417">087-329-1417</a><br /> 
					From an international number: (your international dialling code) +353873291417.
				</p>
				<p>
					<a href="https://docs.google.com/forms/d/19N_bz_sMx1yy0TEWD0qamubdOROFOiqDtOSdhC9AuaY/edit" class="bc-button is-mid-green">
						Pre-enrolment 2020 - 2021
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>
				</p>
				<p>
					<a href="https://docs.google.com/a/internationalschooldublin.ie/forms/d/1vQdv9Tbh7zk2pkZXY_6PbyATVMQsahwSwmopeuO1LJ0/edit?usp=forms_home&ths=true" class="bc-button is-mid-green">
						Pre-enrolment 2021 - 2022
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>
				</p>
			</div>
		</article><!-- // .bc-inner-page-content__content -->
	</section><!-- // .bc-inner-page-content -->
	<?php  
		get_inner_section_nav('More About Admissions', array('Transition Support' => '' . get_permalink(176) . '', 'Fees' => '' . get_permalink(57) . '', 'Frequently Asked Questions' => '' . get_permalink(22) . ''));
		get_global_CTA();
		get_footer();
		get_floating_section_nav(); 
	?>