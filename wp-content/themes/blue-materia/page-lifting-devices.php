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
										<a href="/pediatric-transfer-lifts" class="pediatric-transfer-lifts"><span class="overlay"></span></a>
										<figcaption>Pediatric Transfer Lifts</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/power-floor-lifts" class="power-floor-lifts"><span class="overlay"></span></a>
										<figcaption>Power Floor Lifts</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/manual-floor-lifts" class="manual-floor-lifts"><span class="overlay"></span></a>
										<figcaption>Manual Floor Lifts</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/patient-transfer-lifts" class="patient-transfer-lifts"><span class="overlay"></span></a>
										<figcaption>Patient Transfer Lifts</figcaption>
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
