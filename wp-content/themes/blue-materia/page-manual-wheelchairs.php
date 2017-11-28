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
								<p>Before purchasing a wheelchair you may have questions about what type of wheelchair will best suit your needs, or whether you should choose a power or manual wheelchair.  You’ll also want to ensure that you’re choosing a wheelchair that will last you depending on how often you intend to use your wheelchair or whether the chair will be used indoors or outdoors.  If your wheelchair is going to be transported then you want to take into consideration the size of the vehicle and whether or not you will be able to lift and transfer the wheelchair in and out of the vehicle yourself or if an assistant will be with you to lift the wheelchair for you.  Of course, there are also lifts available as well that may assist you in travelling with your wheelchair.  Another thing to consider is your living arrangements.  If you live in an apartment or condo you will want to know that there are no barriers within your residence.  The same applies for a house.  You’ll need to have a plan for how you can get a wheelchair in and out of the house and whether you can do this independently or if you’ll have a caregiver to assist you.  In some cases people choose to have more than one wheelchair so that they can keep them on different floors of their home or inside and outside.</p>
							</div>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="lightweight-adjustable-wheelchairs" class="lightweight-adjustable-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Lightweight Wheelchairs</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="rigid-wheelchairs" class="rigid-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Rigid Wheelchairs</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="tilting-wheelchairs" class="tilting-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Tilting Wheelchairs</figcaption>
									</figure>
								</div>

								<div class="offer">
									<figure>
										<a href="titanium-wheelchairs" class="titanium-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Titanium Wheelchairs</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="basic-wheelchairs" class="basic-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Basic Wheelchairs</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="transport-wheelchairs" class="transport-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Transport Wheelchairs</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="specialty-power-assist" class="specialty-power-assist"><span class="overlay"></span></a>
										<figcaption>Specialty Power Assist</figcaption>
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
