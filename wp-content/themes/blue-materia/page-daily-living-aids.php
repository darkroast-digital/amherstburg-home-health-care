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
										<a href="/eating" class="eating"><span class="overlay"></span></a>
										<figcaption>Eating</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/lifestyle" class="lifestyle"><span class="overlay"></span></a>
										<figcaption>Lifestyle</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/dressing" class="dressing"><span class="overlay"></span></a>
										<figcaption>Dressing</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/transfer-aids" class="transfer-aids"><span class="overlay"></span></a>
										<figcaption>Transfer Aids</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/personal-care" class="personal-care"><span class="overlay"></span></a>
										<figcaption>Personal Care</figcaption>
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
