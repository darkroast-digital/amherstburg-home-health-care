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
								<p>Canes can be used for many conditions, including injuries, arthritis, or problems with balance. A cane is helpful in steadying gait and taking pressure off of an injured extremity.  Motion Specialties offers a wide variety of canes and not all canes are shown in our product catalogue so we recommend speaking to a sales representative at one of our locations who can assist you in selecting a cane.  Canes can be wooden, aluminum, or steel.  Typically there are three styles of canes.  First, the traditional hook cane that looks like a candy-cane as we know it.  Secondly an offset cane where the handle extends forward before coming back and centring your hand over the base of the cane.  And third, a derby-style cane which more or less resembles a walking stick.  Folding canes are also available and most times these canes have a derby handle style.</p>
							</div>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/walking-canes" class="walking-canes"><span class="overlay"></span></a>
										<figcaption>Walking Canes</figcaption>
									</figure>
								</div>
								<div class="offer">
									<figure>
										<a href="/nordic-walking-poles" class="nordic-walking-poles"><span class="overlay"></span></a>
										<figcaption>Nordic Walking Poles</figcaption>
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
