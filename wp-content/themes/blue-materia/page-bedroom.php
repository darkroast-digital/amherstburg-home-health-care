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
							<p>Lift chairs are easy to use and operate.  The primary function of a lift chair is to assist the individual in standing from a seated position.  As people age it becomes increasingly difficult to stand once seated.  Often the process of standing becomes painful and difficult and as a result elderly persons stay seated and begin spending the majority of the day in their chair.  The less we move the more difficult that these events become.  Lift Chairs are designed with a simple push of a button to raise the user to a point where standing is no longer difficult.  The effect of this is a person who becomes more mobile in all areas.</p>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/beds-and-change-tables" class="beds-and-change-tables"><span class="overlay"></span></a>
										<figcaption>Beds & Change Tables</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/bedding-and-sheet-protectors" class="bedding-and-sheet-protectors"><span class="overlay"></span></a>
										<figcaption>Bedding And Sheet Protectors</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/mattresses" class="mattresses"><span class="overlay"></span></a>
										<figcaption>Mattresses</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/bed-rails" class="bed-rails"><span class="overlay"></span></a>
										<figcaption>Bed Rails</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/pillows-and-positioning" class="pillows-and-positioning"><span class="overlay"></span></a>
										<figcaption>Pillows & Positioning</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/bedroom-accessories" class="bedroom-accessories"><span class="overlay"></span></a>
										<figcaption>Bedroom Accessories</figcaption>
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
