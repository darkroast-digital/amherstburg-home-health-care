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
							<p>Motion Specialties carries a wide variety of bracing from numerous trusted manufacturers. The bracing selection shown on our website does not include all bracing available through our stores. In addition, not all products listed are available at all locations. We encourage you to browse our products online however we recommend calling to find out what product lines are available at the location nearest to you.</p>

							<div class="offers">
								<div class="offer">
									<figure>
										<a href="/back-braces" class="back-braces"><span class="overlay"></span></a>
										<figcaption>Back Braces</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/hand-and-wrist" class="hand-and-wrist"><span class="overlay"></span></a>
										<figcaption>Hand & Wrist</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/foot-and-ankle" class="foot-and-ankle-braces"><span class="overlay"></span></a>
										<figcaption>Foot & Ankle Braces</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/knee-braces" class="knee-braces"><span class="overlay"></span></a>
										<figcaption>Knee Braces</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/shoulder-and-elbow" class="shoulder-and-elbow"><span class="overlay"></span></a>
										<figcaption>Shoulder & Elbow</figcaption>
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
