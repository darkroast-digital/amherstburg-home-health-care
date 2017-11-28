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
							<p>We all want to enjoy healthy and active lives but with all the tasks of work and family we may forget about maintaining the health of our legs. Problems with the veins of the leg occur in both men and women of all ages but certain factors increase the risk of venous problems.

Health conditions, lifestyle habits, heredity, injury, surgery, age, and pregnancy all play a role. While you are unable to control heredity, age, surgery and changes during pregnancy, you can improve lifestyle factors through exercise, good posture, avoiding inactivity, choosing good fitting clothing and footwear, and wearing gradient compression hosiery that is right for you.</p>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/compression-stockings" class="compression-stockings"><span class="overlay"></span></a>
										<figcaption>Compression Stockings</figcaption>
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
