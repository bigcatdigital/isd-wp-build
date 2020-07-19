<?php
	/* Template Name: L&T Timetable */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Learning and Teaching', 'Daily Schedule', 'More about Learning and Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)), array('Homepage' => home_url(), 'Learning & Teaching' => get_permalink(86), 'Daily Schedule' => ''), 'learning-icon-reverse.svg#learning-icon'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<header class="bc-feature-component__header">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Daily Schedule</h1>
			</div>
		</header>
		<article class="bc-feature-component__content">
		 	<div class="bc-feature-component__content__text-content">
		 		
		 		<p>ISD's doors open daily at 8:30am and classes begin at 8:45am.  Classes finish at 2:45pm followed by an optional after school programme 3:00-5:00pm.</p>
				<p>The school day is structured into six, 45-minute periods with a morning snack break and midday lunch break. Students are taught all subjects through inquiry.</p>
				<p>Our curriculum framework is guided by six transdisciplinary themes of global significance, explored using knowledge and skills from six subject areas: language, social studies, mathematics, arts, science, physical/social/personal education. This example timetable demonstrates that students take part in four specialist subjects twice weekly: visual arts/drama, music/dance, spanish/english, physical education. They also engage in all other subjects of the curriculum daily through homeroom.</p>
				<p>The nature of our curriculum is flexible, therefore, teachers and students may adapt how homeroom time is utilised ensuring core skills such as mathematics and language are reinforced daily.</p>
			</div>
		</article>
		<article class="bc-feature-component__content">
		 		<div class="bc-responsive-table-wrap isd-timetable-wrap">
		 			<table class="bc-responsive-table isd-timetable">
		 				<thead>
		 					<tr class="">
		 						<th>Time</th>
		 						<th>Monday</th>
		 						<th>Tuesday</th>
		 						<th>Wednesday</th>
		 						<th>Thursday</th>
		 						<th>Friday</th>
		 					</tr>
		 				</thead>
		 				<tbody>
		 					<tr class="isd-timetable__meta-row">
		 						<td>8:00 - 8:30</td>
		 						<td colspan="5" class="isd-timetable__meta-row__data">Early Drop In Morning Care</td>
		 					</tr>
		 					<tr class="isd-timetable__meta-row">
		 						<td>8:30 - 8:45</td>
		 						<td colspan="5" class="isd-timetable__meta-row__data">Student Arrival</td>
		 					</tr>
		 					<tr>
		 						<td>8:45 - 9:15</td>
		 						<td class="is-light-blue">Mindfulness</td>
		 						<td class="">Homeroom</td>
		 						<td class="is-red">Physical Education</td>
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 					</tr>
		 					<tr>
		 						<td>9:15 - 9:55</td>
		 						<td class="is-yellow">Spanish or English</td>
		 						<td class="is-red">Physical Education</td> 
		 						<td class="is-yellow">Spanish or English</td>
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 					</tr>
		 					<tr  class="isd-timetable__meta-row">
		 						<td>10:00 - 10:25</td>
		 						<td colspan="5" class="isd-timetable__meta-row__data">Morning Snack Break (in school yard)</td>
		 					</tr>
		 					<tr>
		 						<td>10:30 - 11:10</td>
		 						<td class="">Homeroom</td>
		 						<td class="is-pink">Music/Dance</td>
		 						<td class="">Homeroom</td>
		 						<td class="is-pink">Music/Dance</td>
		 						<td class="is-purple">School Wide Assembly Buddy Teams</td>
		 					</tr>
		 					<tr>
		 						<td>11:10 - 11:50</td>
		 						<td class="">Homeroom</td>
		 						<td class="is-orange">Host Country Studies</td>
		 						<td class="">Homeroom</td>
		 						<td class="is-cyan">Library</td>
		 						<td class="">Homeroom</td>
		 					</tr>
		 					<tr>
		 						<td>11:50 - 12:30</td>
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 					</tr>
		 					<tr  class="isd-timetable__meta-row">
		 						<td>12:35 - 1:25</td>
		 						<td colspan="5" class="isd-timetable__meta-row__data">Afternoon Lunch Break (In classrooms) Afternoon Play Break (In school yard)</td>
		 					</tr>
		 					<tr>
		 						<td>1:30 - 2:10</td>
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 						<td class="is-purple">Visual Arts/Drama</td>
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 					</tr>
		 					<tr>
		 						<td>2:10 - 2:40</td>
		 						<td class="is-purple">Visual Arts/Drama</td>
		 						<td class="is-cyan">Library</td>
		 						
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 						<td class="">Homeroom</td>
		 					</tr>
		 					
		 					<tr class="isd-timetable__meta-row">
		 						<td>2:45</td>
		 						<td colspan="5" class="isd-timetable__meta-row__data">Student Dismissal</td>
		 					</tr>
		 					<tr class="isd-timetable__meta-row">
		 						<td>3:00 - 5:00</td>
		 						<td colspan="5" class="isd-timetable__meta-row__data">After School Care + After School Programme/Activities</td>
		 					</tr>
		 				</tbody>
		 			</table>
		 		</div><!-- // .bc-responsive-table-wrap -->
		</article>
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_inner_section_nav('More about Learning & Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)));
		get_global_CTA();
		get_footer();
		get_floating_section_nav(); 
	?>