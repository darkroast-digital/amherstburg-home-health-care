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
							<p>Statistics show that approximately 50% of all accidents at home happen in the bathroom. Bath safety products are an essential part of making sure you stay healthy at home and do not have an unnecessary fall. From grab bars to bath lifts to raised toilet seats, Motion Specialties is the place to find everything you need to outfit your bathroom for safety and comfort.  Our bathroom safety selection, combined with our everyday low price, guarantees that you can make your purchase with confidence.  A variety of bathroom safety products such as the Invisia line are also available to bring safety to your washroom without compromising on style.  Please contact us and speak to one of our representatives for expert advice on the best bath safety products in the market today.</p>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/bath-lifts" class="bath-lifts"><span class="overlay"></span></a>
										<figcaption>Bath Lifts</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/commodes-and-shower-commode-chairs" class="commodes-and-shower-commode-chairs"><span class="overlay"></span></a>
										<figcaption>Commodes</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/raised-toilet-seats" class="raised-toilet-seats"><span class="overlay"></span></a>
										<figcaption>Raised Toilet Seats</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/transfer-benches" class="transfer-benches"><span class="overlay"></span></a>
										<figcaption>Transfer Benches</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/tub-and-grab-bars" class="tub-and-grab-bars"><span class="overlay"></span></a>
										<figcaption>Tub & Grab Bars</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/shower-seats" class="shower-seats"><span class="overlay"></span></a>
										<figcaption>Shower Seats</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/accessories" class="accessories"><span class="overlay"></span></a>
										<figcaption>Accessories</figcaption>
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
