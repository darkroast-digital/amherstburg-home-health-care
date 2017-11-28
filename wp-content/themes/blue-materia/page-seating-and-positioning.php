<?php
/*


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
								<p>Walkers and rollators are available in various models to help the user remain as active as possible.  There are walkers and rollators available for both indoor and outdoor use.  Outdoor walkers are safe for indoors as well, while indoor walkers won’t roll as smoothly outdoors and are recommended for minimal use outside of an area with smooth terrain.  The terms rollator and walker are typically used interchangeably however a rollator is actually a type of walker that includes a seat, wheels, and hand brakes.  A basic walker will not have a seat or handbrakes and is typically only used indoors.  Most Canadian provinces have some funding programs in place to assist with the purchase of a walker or rollator.  A walker or rollator is considered to be the first step to reducing the risk of falls.  Most rollators include a basket to help the user focus on walking and keep them stable instead of trying to transport items.  Basic walkers also have baskets that can be added to them however this is an accessory that is purchased as an additional item to enhance the use of your walker.  A representative at Motion Specialties will be happy to help you choose the right walker for your needs. Contact us for more information on walking devices.</p>
							</div>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/heavy-duty-rollators" class="heavy-duty-rollators"><span class="overlay"></span></a>
										<figcaption>Heavy-Duty Rollators</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/indoor-outdoor-rollators" class="indoor-outdoor-rollators"><span class="overlay"></span></a>
										<figcaption>Indoor / Outdoor Rollators</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/specialty-walkers" class="specialty-walkers"><span class="overlay"></span></a>
										<figcaption>Specialty Walkers</figcaption>
									</figure>
								</div>

								<div class="offer">
									<figure>
										<a href="/standard-walkers" class="standard-walkers"><span class="overlay"></span></a>
										<figcaption>Standard Walkers</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/ultra-light-rollators" class="ultra-light-rollators"><span class="overlay"></span></a>
										<figcaption>Ultra Light Rollators</figcaption>
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
