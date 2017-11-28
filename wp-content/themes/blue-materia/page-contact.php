<?php
/*

  Template Name: Contact Page

 */

 //Custom Fields
 $foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

	<?php get_template_part( 'template-parts/nav' ); ?>

		<header class="hero off-page-header contact">
			<h1>Contact</h1>
		</header>

		<main id="main">

			<section class="content contact">
				<div class="row">
					<h2 class="intro-title">Get In Touch With Us</h2>
					<hr>
					<div class="row">
						<div class="col-one-half">
							<h4 class="sub-title">Location</h4>
							<div class="padded-content">
								<h5>433 Sandwich Street South,</h5>
								<p>Amherstburg, ON, Canada</p>
								<p>N9V 3K8</p>
							</div>
							<h4 class="sub-title">Contact</h4>
							<div class="padded-content">
								<h5>P: <span>519.736.0972</span></h5>
								<h5>F: <span>519.736.7776</span></h5>
								<h5>E: <a href="mailto:info@amherstburghomehealth.ca">info@amherstburghomehealth.ca </a></h5>
							</div>
							<h4 class="sub-title">Hours</h4>
							<ul>
								<li>Monday ---- 9:00AM - 6:00PM</li>
								<li>Tuesday ---- 9:00AM - 6:00PM</li>
								<li>Wednesday ---- 9:00AM - 6:00PM</li>
								<li>Thursday ---- 9:00AM - 6:00PM</li>
								<li>Friday ---- 9:00AM - 6:00PM</li>
								<li>Saturday ---- 9:00AM - 2:00PM</li>
								<li>Sunday ---- Closed</li>
							</ul>
						</div>
						<div class="col-one-half">
							<h4 class="sub-title">Ask Us a Question</h4>
							<h5 class="lead">We'll get right back to you</h5>
							<?php echo do_shortcode( '[contact-form-7 id="105" title="Contact form 1"]' ); ?>
						</div>
					</div>
				</div>
			</section>

			<!-- End Copy -->

		</main>

		<?php

get_footer();

?>
