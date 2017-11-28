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
								<p>You may have many questions if you’re considering purchasing a chair lift, correctly named a stairlift to carry you up and down the stairs of your home safely and painlessly.  If you’re worried about your walls being strong enough to support a stair lift you don’t need to be alarmed.  Stair lifts are installed into your staircase and don’t require any modification to your walls.  Stairlifts do vary slightly in dimension so we are typically able to fit even most narrow staircases with a stair lift.  The best idea would be to have a consultant provide you with a free in-home assessment where they can actually look at your staircase and provide feedback based on the actual structure of your home.  If your staircase has a landing you can either consider 2 straight stairlifts or a custom curve lift.  Keep in mind that if you choose to work with 2 lifts you’ll want the user to be active enough to make a safe transfer from one lift to the other at the landing and may not be an ideal long term solution.  Stairlifts are actually battery powered but charge when they are docked at the top or bottom of the staircase.  This means that you should not experience any problems with the operation in the event that there is a power outage.  Stairlifts are also available for outdoor use where weather conditions are appropriate.</p>
							</div>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/straight-stairs" class="straight-stairs"><span class="overlay"></span></a>
										<figcaption>Straight Stairs</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/curved-stairs" class="curved-stairs"><span class="overlay"></span></a>
										<figcaption>Curved Stairs</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/outdoor-stairs" class="outdoor-stairs"><span class="overlay"></span></a>
										<figcaption>Outdoor Stairs</figcaption>
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
