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
										<a href="/fitness-diagnostics" class="fitness-diagnostics"><span class="overlay"></span></a>
										<figcaption>Fitness Diagnostics</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/blood-pressure-cuffs-and-adaptors" class="blood-pressure-cuffs-and-adaptors"><span class="overlay"></span></a>
										<figcaption>Blood Pressure Cuffs</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/blood-pressure-monitors" class="blood-pressure-monitors"><span class="overlay"></span></a>
										<figcaption>Blood Pressure Monitors</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/circulation" class="circulation"><span class="overlay"></span></a>
										<figcaption>Circulation</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/thermometers" class="thermometers"><span class="overlay"></span></a>
										<figcaption>Thermometers</figcaption>
									</figure>
								</div>

							</div>

						</div>


				</div>



			</section>

			<!-- End Copy -->

			<footer id="footer">
				<div class="footer-bar">
					<div class="row">
						<ul class="footer-socials">
							<li><a href="/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="/"><i class="fa fa-twitter"></i></a></li>
							<li><a href="/"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="/"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<div class="footer-search">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<ul class="footer-nav">
						<li><a href="/">Faqs</a></li>
						<li><a href="/">Contact Us</a></li>
						<li><a href="/">Terms & Conditions</a></li>
						<li><a href="/">Privacy Policy</a></li>
					</ul>
				</div>
				<div class="row">
					<p class="copyright">&copy; Amherstburg Home Health Care | All Rights Reserved</p>
				</div>
			</footer>

			<!-- End Footer -->

		</main>

		<?php

get_footer();

?>
