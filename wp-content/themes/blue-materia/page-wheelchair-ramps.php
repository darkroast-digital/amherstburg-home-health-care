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
							<p>For most wheelchair and scooter users, thresholds can be a significant obstacle. Ground level differences, stairs and other obstacles can be often handled with the use of a portable wheelchair ramp. Threshold ramps are common with most types of doorways and entrances as access is often an issue. Negotiating many thresholds can be a difficult and bumpy process. To make a threshold less of an obstacle there are many sizes and types of small wheelchair ramps available which can be anywhere and ordered in a width suitable for your doorway or cut down to fit.</p>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/portable-ramps" class="portable-ramps"><span class="overlay"></span></a>
										<figcaption>Portable Ramps</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/modular-access-ramps" class="modular-access-ramps"><span class="overlay"></span></a>
										<figcaption>Modular Access Ramps</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/threshold-ramps" class="threshold-ramps"><span class="overlay"></span></a>
										<figcaption>Threshold Ramps</figcaption>
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
