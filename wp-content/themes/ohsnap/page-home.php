<?php
/*

  Template Name: Home Page

 */

 //Custom Fields
 $foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

	<?php get_template_part( 'template-parts/nav' ); ?>

		<header class="hero">
			<div class="hero-slider slider">
				<div class="slide slide-one">
					<div class="slider-content row">  
					<h2 class="slider-title">Empowering Your Life</h2>
						<h3 class="slider-sub-title">with our Independant Living Products</h3>
						<a href="/" class="button">View Products</a>
					</div>
				</div>
			</div>
		</header>

		<main id="main">

			<section id="about" class="content">
				<div class="row">
					<h2 class="intro-title">Welcome to Amherstburg</h2>
					<hr>
					<div class="row about-bg">
						<div class="col-three-fifth">
							<h4 class="sub-title">Home Health Medical Supplies</h4>
							<div class="padded-content">
								<p>
									Welcome to Amherstburg Home Health Medical Supplies where you'll find a complete home healthcare product line-up and exceptional customer service, all designed with you in mind.</p>
								<p>
									As an independent Amherstburg business, we're excited for the opportunity to enhance independent living for everyone in our community.
								</p>
								<p>
									We'd love to meet you personally, and to allow us to show you what the future of Amherstburg Home Health Medical Supplies will look like.
								</p>
							</div>
						</div>
					</div>

				</div>
			</section>

			<!-- End About -->

			<section id="services">
				<div class="row">
					<h2 class="intro-title">Home Medical Solutions</h2>
					<hr>
					<div class="row">
						<div class="col-one-third">
							<div class="service service-one">
								<h3>Sales</h3>
								<img src="http://localhost:8888/wp-content/uploads/2016/07/shop-icon.png" alt="Sales" draggable="false" class="service-icon">
							</div>
							<div class="padded-content">
								<h5>Purchase Products for Your Home</h5>
								<p>We supply our patients with the very best products and equipment. Whether you’re going through therapy or making your home more accessible we have what you need.</p>
								<a href="/" class="service-link">Shop Now <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="col-one-third">
							<div class="service service-two">
								<h3>Rentals</h3>
								<img src="http://localhost:8888/wp-content/uploads/2016/07/handicap-icon.png" alt="Sales" draggable="false" class="service-icon">
							</div>
							<div class="padded-content">
								<h5>Rent Products for Your Home</h5>
								<p>We rent a complete selection of Home Medical Equipment for your temporary needs. Contact us today for details and pricing.</p>
								<a href="/" class="service-link">Search Rentals <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="col-one-third">
							<div class="service service-three">
								<h3>Service</h3>
								<img src="http://localhost:8888/wp-content/uploads/2016/07/clipboard-icon.png" alt="Sales" draggable="false" class="service-icon">
							</div>
							<div class="padded-content">
								<h5>Request for Services</h5>
								<p>Medical support when you need it. Our Home Health Care Centre is dedictated to provide our patients with the best treament possible.</p>
								<a href="/" class="service-link">Inquire Services <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- End Services -->
				
				<section id="offers">
					<div class="row">
						<div class="offer">
							<figure>
								<figcaption>Manual Wheelchairs</figcaption>
							</figure>
						</div>
						<div class="offer">
							<figure>
								<figcaption>Power Wheelchairs</figcaption>
							</figure>
						</div>
						<div class="offer">
							<figure>
								<figcaption>Stair & Chair Lifts</figcaption>
							</figure>
						</div>
					</div>
					<div class="row">
						<div class="offer">
							<figure>
								<figcaption>Scooters</figcaption>
							</figure>
						</div>
						<div class="offer">
							<figure>
								<figcaption>Walkers</figcaption>
							</figure>
						</div>
						<div class="offer">
							<figure>
								<figcaption>Home Oxygen</figcaption>
							</figure>
						</div>
					</div>
					<div class="row">
						<div class="offer">
							<figure>
								<figcaption>CPAP</figcaption>
							</figure>
						</div>
						<div class="offer">
							<figure>
								<figcaption>Bedroom</figcaption>
							</figure>
						</div>
						<div class="offer">
							<figure>
								<figcaption>Bathroom</figcaption>
							</figure>
						</div>
					</div>
				</section>
				
			<!-- End Offers -->

			<footer id="footer">
				<div class="row">
					<a href="#" class="footer-logo">
						<img src="http://localhost:8888/wp-content/uploads/2016/07/light-logo.png" alt="footer-logo" draggable="false">
					</a>
					<ul class="footer-socials">
						<li><strong>Find Us On:</strong></li>
						<li><a href="https://www.facebook.com/amherstburghomehealth/?fref=nf"><i class="fa fa-facebook-square"></i></a></li>
					</ul>
				</div>
				<div class="row">
					<p class="copyright">&copy; Amherstburg Home Health Care | All Rights Reserved</p>
				</div>
			</footer>

			<!-- End Footer -->

		</main>

		<?php

get_footer();

?>
