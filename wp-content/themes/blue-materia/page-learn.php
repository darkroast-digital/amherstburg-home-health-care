<?php
/*

  Template Name: Learn Page

 */

 //Custom Fields
 $foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

	<?php get_template_part( 'template-parts/nav' ); ?>

		<header class="hero off-page-header learn">
			<h1>Learn</h1>
		</header>

		<main id="main">

			<section class="content">
				<div class="row is-flexed">
					<div class="row-content">
						<h2 class="intro-title">Learn About Our Products</h2>
						<hr>
						<div class="row">
							<div>
								<h4 class="sub-title">Patient Priority</h4>
								<div class="padded-content">
									<p>
										Amherstburg Home Health Care has always placed a priority on meeting the needs of our clients. We understand that it takes more than just offering products and services to meet that need. That’s why we focus on enhancing the benefit of each product by helping you through the selection process. We share our experience and expertise to guide you to products that will complete the circle of care at home.</p>
									<p>
										Our Learning Centre has been designed to make it easier for you to research home health care products. Each product category provides you with a one-stop page containing articles to learn more about that particular group of products as well as relevant videos and simplified access to our product catalogue. Select from the list below to begin learning about how we are keeping you in motion.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row-picture">
						<img src="../wp-content/themes/blue-materia/img/about/1.jpg" draggable="false">
						<img src="../wp-content/themes/blue-materia/img/about/2.jpg" draggable="false">
						<img src="../wp-content/themes/blue-materia/img/about/3.jpg" draggable="false">
					</div>
				</div>
				<hr class="margin-fix">
			</section>

			<!-- End Copy -->

			<section class="cta honey">
				<div class="cta-content">
					<h5>Dry, itchy skin? Try Thentix.</h5>
					<h2>Thentix</h2>
					<hr>
					<p>“An absolutely phenomenal product. We bought A Touch of Honey Muscle & Joint – incredible. My husband is a carpenter – it is the ONLY thing that has offered his knees, back & hands relief when they ache. Excellent customer service & product knowledge. Many benefits to these products.”</p>
					<p><strong>A Touch of Honey.</strong></p>
				</div>
			</section>

			<!-- End CTA -->

		</main>

		<?php

get_footer();

?>
