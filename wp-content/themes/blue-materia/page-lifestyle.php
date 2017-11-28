<?php


 //Custom Fields
 $image = get_field('image');
$imageURL = $image['url']; 



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

							<ul class="product-list">
								<?php
									$args = array( 'category' => 102, 'post_type' =>  'post' ); 
									$postslist = get_posts( $args );    
									foreach ($postslist as $post) :  setup_postdata($post); 
									?>
									<li>
										<a href="<?php the_permalink(); ?>">
											
											<?php
											
												$image = get_field('image');
												
												if( !empty($image) ): ?>
												
											
											<img src="<?php echo $image['url']; ?>">
											
											<?php endif; ?>
											
													<?php the_title(); ?>
										</a>
									</li>
									<?php the_excerpt(); ?>
										<?php endforeach; ?>
							</ul>

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
