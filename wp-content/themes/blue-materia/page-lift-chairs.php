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
										<a href="/two-position-lift-chairs" class="two-position-lift-chairs"><span class="overlay"></span></a>
										<figcaption>Two-Position Lift Chairs</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/three-position-lift-chairs" class="three-position-lift-chairs"><span class="overlay"></span></a>
										<figcaption>Three-Position Lift Chairs</figcaption>
									</figure>
								</div>
								
								<div class="offer">
									<figure>
										<a href="/infinite-position-lift-chairs" class="infinite-position-lift-chairs"><span class="overlay"></span></a>
										<figcaption>Infinite-Position Lift Chairs</figcaption>
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
