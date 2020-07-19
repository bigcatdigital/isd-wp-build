<?php
	/* Template Name: Admissions Fees */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Admissions', 'Fees', '', '', $bcs = array('Homepage' => home_url(), 'Admission' => get_permalink(20), 'Fees' => ''), 'admissions-icon.svg#export'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Fees</h1>
				<p class="bc-feature-component__intro">Admissions is open year-round to all students. Therefore the annual tuition fees are arranged throughout the academic year based on a student’s month of enrolment.</p> 
				<p>Students who leave mid academic year are required to provide three months notice in order to receive a refund which will be issued according to the number of days the student has attended the school.</p>
				<div class="bc-responsive-table-wrap">
					<table class="bc-responsive-table">
						<thead>
							<tr>
								<th>Month of Enrolment</th>
								<th>Tuition Due</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bc-table-meta-row">
								<td colspan="2">A €1,000 registration deposit is due to secure student placement at ISD.</td>
							</tr>
							<tr>
								<td>August</td>
								<td>€9,850</td>
							</tr>
							<tr>
								<td>September</td>
								<td>€9,850</td>
							</tr>
							<tr>
								<td>October</td>
								<td>€9,850</td>
							</tr>
							<tr>
								<td>November</td>
								<td>€9,850</td>
							</tr>
							<tr>
								<td>December</td>
								<td>€9,850</td>
							</tr>
							<tr>
								<td>January</td>
								<td>€6,175</td>
							</tr>
							<tr>
								<td>February</td>
								<td>€5,175</td>
							</tr>
							<tr>
								<td>March</td>
								<td>€4,175</td>
							</tr>
							<tr>
								<td>April</td>
								<td>€3,175</td>
							</tr>
							<tr>
								<td>May</td>
								<td>€2,175 </td>
							</tr>
							<tr>
								<td>June</td>
								<td>€1,175</td>
							</tr>
						</tbody>
					</table>
					<p>Optional additional fees may be due based on circumstance and choice such as: school bus transport, after school programmes, additional English assistance.</p> 
					<p>Please contact <a href="admin@internationalschooldublin.ie">admin@internationalschooldublin.ie</a> for further information.</p>
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
		get_floating_section_nav(); 
	?>