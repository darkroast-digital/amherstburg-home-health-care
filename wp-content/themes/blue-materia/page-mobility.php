<?php
/*

  Template Name: Mobility Page

 */

 //Custom Fields
 $foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

	<?php get_template_part( 'template-parts/nav' ); ?>

		<header class="hero off-page-header rentals">
			<h1>Products</h1>
		</header>

		<main id="main">

			<section class="content">
				<div class="row">
					<h2 class="intro-title">Mobility Products</h2>
					<hr>

					<div class="offer">
						<figure>
							<a href="/" class="manual"><span class="overlay"></span></a>
							<figcaption>Manual Wheelchairs</figcaption>
						</figure>
					</div>
					<div class="offer">
						<figure>
							<a href="/" class="power"><span class="overlay"></span></a>
							<figcaption>Power Wheelchairs</figcaption>
						</figure>
					</div>
					<div class="offer">
						<figure>
							<a href="/" class="scooters"><span class="overlay"></span></a>
							<figcaption>Scooters</figcaption>
						</figure>
					</div>

					<div class="offer">
						<figure>
							<a href="/" class="walkers"><span class="overlay"></span></a>
							<figcaption>Walkers & Rollators</figcaption>
						</figure>
					</div>
					<div class="offer">
						<figure>
							<a href="/" class="seating"><span class="overlay"></span></a>
							<figcaption>Seating & Positioning</figcaption>
						</figure>
					</div>
					<div class="offer">
						<figure>
							<a href="/" class="crutches"><span class="overlay"></span></a>
							<figcaption>Crutches</figcaption>
						</figure>
					</div>

					<div class="offer">
						<figure>
							<a href="/" class="canes"><span class="overlay"></span></a>
							<figcaption>Canes</figcaption>
						</figure>
					</div>
					<div class="offer">
						<figure>
							<a href="/" class="kids"><span class="overlay"></span></a>
							<figcaption>Kids Mobility</figcaption>
						</figure>
					</div>

					<h2 class="intro-title">Respiratory Products</h2>
					<hr>

					<div class="offer">
						<figure>
							<a href="/" class="cpap"><span class="overlay"></span></a>
							<figcaption>CPAP Therapy</figcaption>
						</figure>
					</div>
					<div class="offer">
						<figure>
							<a href="/" class="oxygen"><span class="overlay"></span></a>
							<figcaption>Oxygen Therapy</figcaption>
						</figure>
					</div>

				</div>

			</section>

			<!-- End Copy -->

		</main>

		<?php

get_footer();

?>
