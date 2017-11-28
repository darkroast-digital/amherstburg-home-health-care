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
									$args = array( 'category' => 122, 'post_type' =>  'post' ); 
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

		</main>

		<?php

get_footer();

?>
