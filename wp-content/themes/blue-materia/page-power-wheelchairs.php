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
								<p>When purchasing an electric wheelchair you may have concerns about using it inside your home or whether a power wheelchair is only safe and intended for indoor use.  Motorized wheelchairs can actually be used both indoors and outdoors but knowing where the primary use will be helps to determine the right type of wheelchair that will best suit your needs.  If the wheelchair is being used in small spaces such as an apartment or condo, many users find it easier to maneuver a centre-wheel drive power chair.  Most users are particularly concerned with how long their batteries will last and how often their wheelchair batteries will need to be charged.  This will depend on how often you use your electric wheelchair and what type of terrain it is being used on.</p>
							</div>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="mid-wheel-drive-wheelchairs" class="mid-wheel-drive-power-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Mid-Wheel Drive Wheelchairs</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="rear-wheel-drive-wheelchairs" class="rear-wheel-drive-power-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Rear Wheel Drive Wheelchairs</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="front-drive-power-wheelchairs" class="front-drive-power-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Front Drive Wheelchairs</figcaption>
									</figure>
								</div>

								<div class="offer">
									<figure>
										<a href="heavy-duty-wheelchairs" class="heavy-duty-power-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Heavy-Duty Wheelchairs</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="standing-power-wheelchairs" class="standing-power-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Standing Power Wheelchairs</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="basic-power-wheelchairs" class="basic-power-wheelchairs"><span class="overlay"></span></a>
										<figcaption>Basic Power Wheelchairs</figcaption>
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
