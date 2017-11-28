<?php
/*

  Template Name: Product

 */

 //Custom Fields
	$intro = get_field("intro");
	$manufacturer = get_field("manufacturer");
	$features = get_field("features");
	$specifications = get_field("specifications");
	$brochure = get_field("brochure");
	$image = get_field("image")["sizes"]["large"];

get_header(); ?>

	<?php get_template_part( 'template-parts/nav' ); ?>

		<header class="hero off-page-header about">
			<h1><?php echo get_the_title(); ?></h1>
		</header>

		<main id="main">

			<section class="content">
				<div class="row flex">
					<div class="content__description">
						<h4><?php echo get_the_title(); ?></h4>
						<p><?php echo $intro ?></p>
						<p><strong>Manufacturer:</strong> <?php echo $manufacturer ?></p>
						<div class="product-inline">
							<h5>Features</h5>
							<p><?php echo $features ?></p>
						</div>
						<div class="product-inline">
							<h5>Specifications</h5>
							<p><?php echo $specifications ?></p>
						</div>
						<a href="<?php echo $brochure ?>" target="_blank">Download PDF Brochure</a>
					</div>
					<div class="content__image">
						<img src="<?php echo $image ?>" alt="<?php echo get_the_title(); ?>" draggable="false">
					</div>
				</div>
			</section> 


		</main>

		<?php

get_footer();

?>
