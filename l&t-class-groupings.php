<?php
	/* Template Name: L&T Class Groupings */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Learning and Teaching', 'Class Groupings', 'More about Learning and Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)), $bcs = array('Homepage' => home_url(), 'Learning & Teaching' => get_permalink(86), 'Class Groupings' => ''), 'learning-icon-reverse.svg#learning-icon'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Class Groupings</h1>
				<p class="bc-feature-component__intro">Our aim is to place each child in a stimulating and challenging class that provides the best opportunities to make academic and social progress. </p>
				<p>Our classes have an impressively low student-teacher ratio of roughly 10:1. At ISD there are four, multi-grade level classes grouped as: </p>
				<ol>
					<li>Kindergarten – Ages 3.5, 4, 5, 6</li>
					<li>Grades 1,2 – Ages 6, 7, 8</li>
					<li>Grades 3,4 – Ages 8, 9, 10</li>
					<li>Grades 5,6 – Ages 10, 11, 12</li>
				</ol>
				<p>Below, please see placement dates for each grade level. In cases where the school, along with parents/guardians, believe a certain placement should be reviewed in the best interest of a child, ISD retains flexibility in relation to class placement.</p>
				<div class="bc-responsive-table-wrap">
		 			<table class="bc-responsive-table">
		 				<thead>
		 					<tr class="">
		 						<th>Class Level</th>
		 						<th>Cut Off Date</th>
		 					</tr>
		 				</thead>
		 				<tbody>
		 					<tr>
		 						<td>Pre-Kindergarten</td>
		 						<td>Child must be 3 years of age by June 1st of year of enrolment</td>
		 					</tr>
		 					<tr>
		 						<td>Kindergarten 1</td>
		 						<td>Child must be 4 years of age by August 31st of year of enrolment</td>
		 					</tr>
		 					<tr>
		 						<td>Kindergarten 2</td>
		 						<td>Child must be 5 years of age by August 31st of year of enrolment</td>
		 					</tr>
		 					<tr>
		 						<td>Grade 1</td>
		 						<td>Child must be 6 years of age by August 31st of year of enrolment</td>	
		 					</tr>
		 					<tr>
		 						<td>Grade 2</td>
		 						<td>Child must be 7 years of age by August 31st of year of enrolment</td>	
		 					</tr>
		 					<tr>
		 						<td>Grade 3</td>
		 						<td>Child must be 8 years of age by August 31st of year of enrolment</td>	
		 					</tr>
		 					<tr>
		 						<td>Grade 4</td>
		 						<td>Child must be 9 years of age by August 31st of year of enrolment</td>	
		 					</tr>
		 					<tr>
		 						<td>Grade 5</td>
		 						<td>Child must be 10 years of age by August 31st of year of enrolment</td>	
		 					</tr>
		 					<tr>
		 						<td>Grade 6</td>
		 						<td>Child must be 11 years of age by August 31st of year of enrolment</td>	
		 					</tr>
		 				</tbody>
		 			</table>
		 		</div><!-- // .bc-responsive-table -->
			</div>
		</article><!-- //  .bc-feature-component__content -->
		
	
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_inner_section_nav('More about Learning & Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)));
		get_global_CTA();
		get_footer();
		get_floating_section_nav(); 
	?>