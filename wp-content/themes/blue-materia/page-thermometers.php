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
										<a href="/back-supports" class="back-supports"><span class="overlay"></span></a>
										<figcaption>Back Supports</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/massage-products" class="massage-products"><span class="overlay"></span></a>
										<figcaption>Massage Products</figcaption>
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
