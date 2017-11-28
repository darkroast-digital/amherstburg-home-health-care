<?php
/*

  Template Name: Careers Page

 */

 //Custom Fields
 $foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

	<?php get_template_part( 'template-parts/nav' ); ?>

		<header class="hero off-page-header careers">
			<h1>Careers</h1>
		</header>

		<main id="main">

			<section class="content careers">
				<div class="row">
					<h2 class="intro-title">Employment Opportunites</h2>
					<hr>
					<div class="row">
						<div class="listing">
							<h4 class="sub-title">Customer Service Representative</h4>
							<div class="padded-content">
								<ul class="career-details">
									<li>
										<h4>Location: <span>Amherstburg, ON</span></h4>
									</li>
									<li>
										<h4>Regular / Temporary: <span>Regular</span></h4>
									</li>
									<li>
										<h4>Position: <span>Full Time</span></h4>
									</li>
								</ul>

								<h3>Key Responsibilities</h3>

								<ul class="styled-list">
									<li>To provide efficient and courteous customer service</li>
									<li>Provide compression and other fittings – stockings, braces, custom fittings</li>
									<li>Answers customer inquiries regarding products, policies, etc.</li>
									<li>Operate computerized inventory record keeping and re-ordering systems</li>
									<li>Discrete, compassionate and understanding of various medical conditions and client privacy</li>
									<li>Provide information and assistance for funding sources available to each client, assists clients to complete applications</li>
									<li>Telephone sales and service with clients and healthcare professionals including occupational therapists</li>
									<li>Client health teaching for proper use and maintenance of products post-sale</li>
								</ul>

								<div class="row">
									<div class="col-one-half">
										<h3>Qualifications</h3>
										<ul class="styled-list">
											<li>Candidate must possess customer service experience with excellent interpersonal and listening skills</li>
											<li>Effective verbal and written communication skills</li>
											<li>General knowledge of medical supply and common medical conditions</li>
											<li>Previous experience in health care industry preferred</li>
											<li>Previous experience in third party billing and reconciliation preferred</li>
										</ul>
									</div>
									<div class="col-one-half">
										<h3>Education Requirements</h3>
										<ul class="styled-list">
											<li> Post secondary education in a related field</li>
											<li>Previous home healthcare experience an asset</li>
											<li>Proven skills in administration and customer service</li>
										</ul>
									</div>
								</div>
								<a href="contact" class="button apply-now">Apply Now</a>
							</div>
						</div>
						<hr>
						<div class="listing">
							<h4 class="sub-title">Service Repair Technician</h4>
							<div class="padded-content">
								<ul class="career-details">
									<li>
										<h4>Location: <span>Amherstburg, ON</span></h4>
									</li>
									<li>
										<h4>Regular / Temporary: <span>Regular</span></h4>
									</li>
									<li>
										<h4>Position: <span>Part Time</span></h4>
									</li>
								</ul>

								<h3>Key Responsibilities</h3>

								<ul class="styled-list">
									<li>Repair basic mobility devices (manual wheelchairs, walkers) in clients homes or Long Term Care Facilities/ Hospital settings</li>
									<li>Ensure authorization has been completed before initiating repairs</li>
									<li>Delivery and Installation of retail merchandise in client’s home</li>
									<li>Instruct clients in the proper use of product</li>
									<li>Provide basic assessment and quotes on repairs</li>
									<li>Comply with all health and safety regulations</li>
									<li>Accountable for tools provided</li>
								</ul>

								<div class="row">
									<div class="col-one-half">
										<h3>Qualifications</h3>
										<ul class="styled-list">
											<li>Experience/knowledge in repairing manual and power mobility devices</li>
											<li>Ability to install and repair elevating products</li>
											<li>Ability to program and set-up basic power equipment</li>
											<li>Provide manual and power assessment and quotes on repairs</li>
											<li>Working knowledge of all health and safety regulations</li>
											<li>Perform other duties as required</li>
										</ul>
									</div>
									<div class="col-one-half">
										<h3>Competencies</h3>
										<ul class="styled-list">
											<li>Mechanical and electrical aptitude</li>
											<li>Ability to utilize a multi-meter</li>
											<li>Follow orders/paperwork: Measurements, Parts and Special instructions</li>
											<li>Ensure finished equipment is safe and clean</li>
											<li>Police clearance with vulnerable sector search</li>
											<li>Valid driver’s license and good driving record</li>
											<li>Ability to lift 50lbs.</li>
											<li>Punctual and reliable</li>
											<li>Available for on-call services outside regular business hour</li>
											<li>Previous experience in health care industry an asset</li>
										</ul>
									</div>
								</div>
								<a href="contact" class="button apply-now">Apply Now</a>
							</div>
						</div>
						<hr>
					</div>
				</div>
			</section>
			
			<section id="byline">
				<p>Only candidates chosen for an interview will be contacted. Thank you.</p>
			</section>

			<!-- End Copy -->

		</main>

		<?php

get_footer();

?>
