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

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/portable-ramps" class="residential-elevators"><span class="overlay"></span></a>
										<figcaption>Residential Elevators</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/modular-access-ramps" class="through-floor-lifts"><span class="overlay"></span></a>
										<figcaption>Through Floor Lift</figcaption>
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
