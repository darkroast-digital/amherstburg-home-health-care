<?php
/*

Template Name: About Page

*/

//Custom Fields
$foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

<?php get_template_part( 'template-parts/nav' ); ?>

<header class="hero off-page-header about">
<h1>About Us</h1>
</header>

<main id="main">

<section class="content">
<div class="row is-flexed">
<div class="row-content">
	<h2 class="intro-title">Getting To Know Your Healthcare Provider</h2>
	<hr>
	<div class="row">
		<div>
			<h4 class="sub-title">Home Health Medical Supplies</h4>
			<div class="padded-content">
				<p>
					Amherstburg Home Health Medical Supplies is a full-service locally owned and operated business offering a complete range of healthcare items for home and individual use as well as a full line-up of mobility products. We have agreements with hospitals, nursing homes, assisted living and long-term care homes which allows us to carry an enormous amount of supplies to suit any need. We offer brand name quality products backed by full warranties as well as full-time consultation on all products and services.</p>
				<p>
					We fully support the ADP (Assisted Devices Program) sponsored by the Ontario Ministry of Health and if financial assistance is required, our consultant will be more than happy to provide that information. Please ask us for further information.
				</p>
			</div>
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
					Our staff are experts in the healthcare field with extensive knowledge from nursing through chiropractic services. We look forward to getting you started on the road to maintaining the greatest amount of independent living possible and staying with you whenever you need us. </p>
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
</section>

<!-- End Copy -->
<div class="row">
<h2 class="intro-title">Areas of Expertise</h2>
<hr>
</div>

<section id="accordion">
<dt class="accordion-trigger">
<div class="row">
	<p>Medical Care</p>
	<div class="arrow">
		<i class="fa fa-angle-down"></i>
	</div>
</div>
</dt>
<dd class="accordion-content">
<div class="row">
	<h3>Quality of Life</h3>
	<p>Improving quality of life is our main focus. We offer tailored products and professional support for families and individuals experiencing short-term or chronic health issues.</p>
</div>
</dd>
<dt class="accordion-trigger">
<div class="row">
	<p>Personal Mobility</p>
	<div class="arrow">
		<i class="fa fa-angle-down"></i>
	</div>
</div>
</dt>
<dd class="accordion-content">
<div class="row">
	<h3>Providing You With Freedom</h3>
	<p>A manual wheelchair provides you with the freedom to traverse the world in any way that you would like. Amherstburg Home Health is equipped to provide you with a chair that maximises your comfort and mobility.</p>
</div>
</dd>
<dt class="accordion-trigger">
<div class="row">
	<p>Patient Mobility</p>
	<div class="arrow">
		<i class="fa fa-angle-down"></i>
	</div>
</div>
</dt>
<dd class="accordion-content">
<div class="row">
	<h3>Comfort and Mobility</h3>
	<p>Mobility is of the utmost import when it comes to caring for a patient. Making traveling simple provides comfort and stability during the turbulent time of needing care.</p>
</div>
</dd>
<dt class="accordion-trigger">
<div class="row">
	<p>Bathroom Saftey</p>
	<div class="arrow">
		<i class="fa fa-angle-down"></i>
	</div>
</div>
</dt>
<dd class="accordion-content">
<div class="row">
	<h3>Proofing Your Home</h3>
	<p>If your mobility has decread quite a bit and you're no longer able to enjoy the benefits of a therapeutic bath, you may benefit from preparing your bathroom for adequate saftey. Bath chairs, shower seats, walk in tubs, and shower bars all provide saftey and comfort.</p>
	<h3>Grab Bars and Accessibility</h3>
	<p>One simple way to increase bathroom saftey and to decrease the liklihood of a fall when bathing is to install grab bars. These can be placed in the shower or on the wall outside the shower. They provide good leverage and support when stepping in and out of the tub.</p>
</div>
</dd>
<dt class="accordion-trigger">
<div class="row">
	<p>Repairs Services</p>
	<div class="arrow">
		<i class="fa fa-angle-down"></i>
	</div>
</div>
</dt>
<dd class="accordion-content">
<div class="row">
	<h3></h3>
	<p>Keeping your equipment in working order assures that you will continue to be able to live a comfortable, enjoyable, and safe life. Amherstburg Home Health offers in store and on site repair services. Contact us today to find out how we can help you.</p>
</div>
</dd>
<dt class="accordion-trigger">
<div class="row">
	<p>Delivery</p>
	<div class="arrow">
		<i class="fa fa-angle-down"></i>
	</div>
</div>
</dt>
<dd class="accordion-content">
<div class="row">
	<h3>Delivery To Meet Your Needs</h3>
	<p>We understand that it can be difficult for you to come in to our store to pick up your items. As such we are prepared to offer delivery services to accomodate your needs. Contact us today to find out more about our delivery program.</p>
</div>
</dd>
<dt class="accordion-trigger">
<div class="row">
	<p>Daily Living</p>
	<div class="arrow">
		<i class="fa fa-angle-down"></i>
	</div>
</div>
</dt>
<dd class="accordion-content">
<div class="row">
	<h3>Improving Quality of Life Daily</h3>
	<p>Amherstburg Home Health's main priority is providing you with with a high and improved quality of life. View some of our selection of products below and if you have any questions, please contact us and learn how we can help you.</p>
	<div class="grid">
		<a href="lift-chiars" class="grid-item">Lift Chairs</a>
		<a href="bedroom" class="grid-item">Bedroom Safety</a>
		<a href="bathroom-saftey" class="grid-item">Bathroom Safety</a>
	</div>
	<div class="grid">
		<a href="manual-wheelchairs" class="grid-item">Manual Wheelchairs</a>
		<a href="power-wheelchairs" class="grid-item">Power Wheelchairs</a>
		<a href="walkers-and-rollators" class="grid-item">Walkers and Rollators</a>
	</div>
	<div class="grid">
		<a href="compression-garments" class="grid-item">Compression Garments</a>
		<a href="daily-living-aids" class="grid-item">Daily Living Aids</a>
		<a href="bracing-and-supports" class="grid-item">Bracing and Supports</a>
	</div>
</div>
</dd>
</section>

<section class="cta ramp">
<div class="cta-content">
<h5>Modular Access System</h5>
<h2>QRamp</h2>
<hr>
<p>The QRamp™ system offers a real, maintenance-free, movable alternative to a permanent wood ramp that looks attractive on your home. Exclusive features put QRamp™ above the rest when it comes to safety.</p>
<p><strong>Home life beyond your imagination. </strong></p>
</div>
</section>

<!-- End CTA -->



</main>

<?php

get_footer();

?>
