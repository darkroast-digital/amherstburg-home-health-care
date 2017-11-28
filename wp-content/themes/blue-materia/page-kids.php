<?php
/*

  Template Name: Scooters Page

 */

 //Custom Fields
 $foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

	<?php get_template_part( 'template-parts/nav' ); ?>

		<header class="hero off-page-header rentals">
			<h1><?php echo get_the_title() ?></h1>
		</header>

		<main id="main">

			<section class="content">
				<div class="row">


						<div class="product-content">
							<h4><?php echo get_the_title() ?></h4>
							<div class="padded-content">
								<p>At Amherstburg Home Health, we realize that, when it comes to specialized equipment, children have their own needs. We also understand how important getting the right adaptive equipment can be for children, their parents, and caregivers. Motion Specialties currently works with more than 75% of the pediatric clientele in Canada. Our goal is to help parents find the best pediatric equipment to support their children so that they can reach their highest level of function. Our primary objective is to create an experience for families that makes equipment selection a positive experience. Having pediatric equipment that best meets the needs of the child will lead to optimizing function, mobility and safety.</p>
							</div>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="carseats" class="carseats"><span class="overlay"></span></a>
										<figcaption>Carseats</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="gait-trainers" class="gait-trainers"><span class="overlay"></span></a>
										<figcaption>Gait Trainers</figcaption>
									</figure>
								</div>

								<div class="offer">
									<figure>
										<a href="bath-saftey" class="bath-saftey"><span class="overlay"></span></a>
										<figcaption>Bath Saftey</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="bicycles-and-tricycles" class="bicycles-and-tricycles"><span class="overlay"></span></a>
										<figcaption>Bicycles & Tricycles</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="activity-chairs-and-desks" class="activity-chairs-and-desks"><span class="overlay"></span></a>
										<figcaption>Activity Chairs & Desks</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="night-time-positioning" class="night-time-positioning"><span class="overlay"></span></a>
										<figcaption>Night Time Positioning</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="pediatric-standers" class="pediatric-standers"><span class="overlay"></span></a>
										<figcaption>Pediatric Standers</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="pediatric-strollers" class="pediatric-strollers"><span class="overlay"></span></a>
										<figcaption>Pediatric Strollers</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="positioning-in-school" class="positioning-in-school"><span class="overlay"></span></a>
										<figcaption>Positioning In School</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="saftey-beds" class="saftey-beds"><span class="overlay"></span></a>
										<figcaption>Saftey Beds</figcaption>
									</figure>
								</div>
							</div>

						</div>


				</div>



			</section>

			<!-- End Copy -->
		</main>

		<?php

get_footer();

?>
