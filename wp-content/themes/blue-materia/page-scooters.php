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
							<h4>Scooters</h4>
							<div class="padded-content">
								<p>Electric mobility scooters can be great intermediate devices for persons facing mobility challenges. You’ll want to consider asking a few questions to ensure that this device will meet your needs. First of all whether it will be used primarily outdoors or if you’ll intend to use it in your home, office, or in stores. </p>
								<p>A scooter is larger than a power wheelchair and therefore there will be limitations as to where you can go with it. 3 wheel scooters do maneuver more easily than 4 wheels since they have a tighter turning radius however they offer less stability. Keep in mind that travelling with a scooter can also be challenging as not all scooters will disassemble or fit into a car or van. In addition, if you intend to use your scooter on public transit you need to learn the rules of the transit system and in any town or city you will want to know the regulations for using your scooter on the roads or sidewalks.</p>
							</div>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/portable-travel-scooters" class="portable"><span class="overlay"></span></a>
										<figcaption>Portable Travel Scooters</figcaption>
									</figure>
								</div>
								<div class="offer"> 
									<figure>
										<a href="/full-size-scooters" class="fullsize"><span class="overlay"></span></a>
										<figcaption>Full Size Scooters</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/performance-scooters" class="performance"><span class="overlay"></span></a>
										<figcaption>Performance Scooters</figcaption>
									</figure>
								</div>

								<div class="offer">
									<figure>
										<a href="/scooter-lifts" class="sc-lifts"><span class="overlay"></span></a>
										<figcaption>Scooter Lifts</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/scooter-accessories" class="sc-accessories"><span class="overlay"></span></a>
										<figcaption>Scooter Accessories</figcaption>
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
