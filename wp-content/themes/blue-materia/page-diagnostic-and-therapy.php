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

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/fitness-diagnostics" class="fitness-diagnostics"><span class="overlay"></span></a>
										<figcaption>Fitness Diagnostics</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/blood-pressure-cuffs-and-adaptors" class="blood-pressure-cuffs-and-adaptors"><span class="overlay"></span></a>
										<figcaption>Blood Pressure Cuffs</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/blood-pressure-monitors" class="blood-pressure-monitors"><span class="overlay"></span></a>
										<figcaption>Blood Pressure Monitors</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/thermometers" class="thermometers"><span class="overlay"></span></a>
										<figcaption>Thermometers</figcaption>
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
