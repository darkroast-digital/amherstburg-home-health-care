<?php
/*

Template Name: Home Page

*/

//Custom Fields
$foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

<?php get_template_part( 'template-parts/nav' ); ?>

<header class="hero">
<div class="hero-slider slider">
<div class="slide slide-one">
	
</div>
</div>
</header>

<main id="main">

<section id="about" class="content" style="display:flex;flex-direction:column;align-items:center;">
	<iframe src="https://player.vimeo.com/video/240213213" style="width:60rem;height:40rem;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<div class="row is-flexed">
<div class="row-content">
	<h2 class="intro-title">Getting To Know Your Healthcare Provider</h2>
	<hr>
	<div class="row">
		<div>
			<h4 class="sub-title">Our Philosophy</h4>
			<div class="padded-content">
				<p>
					We pride ourselves on being more than just a store. Our philosophy is customer-centred care where you, our customer, are the heart of our business. Fitting the right product to the right person’s need is certainly of utmost importance and Amherstburg Home Health Medical Supplies takes great pride in getting that right. Just as important to us is the service aspect of our business. </p>
				<p>
					We work with your Occupational Therapist, your Physical Therapist and all healthcare providers on your behalf to make sure that our products and services match your need specifically. Whether it’s at our store, in your home or on-site in any facility, we deliver, we adjust, we explain and instruct and we don’t leave you until we feel you are safe and comfortable.
				</p>
			</div>
			<h4 class="sub-title">Our Staff</h4>
			<div class="padded-content">
				<p>
					Our staff are experts in the healthcare field. We look forward to getting you started on the road to maintaining the greatest amount of independent living possible and staying with you whenever you need us. </p>
			</div>
		</div>
	</div>
</div>
<div class="row-picture">
	<img src="../wp-content/themes/blue-materia/img/about/1.JPG" draggable="false">
	<img src="../wp-content/themes/blue-materia/img/about/2.jpg" draggable="false">
	<img src="../wp-content/themes/blue-materia/img/about/3.jpg" draggable="false">
</div>
</div>

<div class="row is-flexed">
	<div class="row-content" style="width:100%;">
		<div class="row">
			<div>
				<!-- <h4 class="sub-title">Our Philosophy</h4> -->
				<div class="padded-content adp-approved">
					<div class="adp-banner-img">
						<img src="../wp-content/themes/blue-materia/img/adp-banner.jpg" alt="Ontario Assistive Devices Program (ADP) Approved Vendor in power and manual wheelchairs, seating, and mobility." draggable="false">
					</div>
					<h5>Amherstburg Home Health Care is now an ADP approved vendor for:</h5>
					<div class="icons">
						<img src="../wp-content/themes/blue-materia/img/power-wheelchairs-icon.jpg" alt="power wheelchairs" draggable="false">
						<img src="../wp-content/themes/blue-materia/img/manual-wheelchairs-icon.jpg" alt="manual wheelchairs" draggable="false">
						<img src="../wp-content/themes/blue-materia/img/seating-icon.jpg" id="chair-icon" alt="seating" draggable="false">
						<img src="../wp-content/themes/blue-materia/img/ambulation-aids-icon.jpg" alt="ambulation aids" draggable="false">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</section>


<!-- End CTA -->

</main>

<?php

get_footer();

?>
