<?php
/*

Template Name: Products Page

*/

//Custom Fields
$foo        = get_post_meta( 5, 'foo', true );

get_header(); ?>

<?php get_template_part( 'template-parts/nav' ); ?>

<style>
	.content {
		margin-top:15rem;
	}
	@media only screen and (max-width: 768px) {
	    .content {
	        margin-top: 22rem;
	    }
	}
</style>

<main id="main">

<section class="content">
	<div class="row">

		<div class="offer">
			<figure>
				<a href="seating-and-positioning" class="seating"><span class="overlay"></span></a>
				<figcaption>Seating &amp; Positioning</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="compression-garments" class="compression"><span class="overlay"></span></a>
				<figcaption>Compression</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="bracing-and-supports" class="bracing-and-supports"><span class="overlay"></span></a>
				<figcaption>Bracing &amp; Supports</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="walking-aids" class="walking-aids"><span class="overlay"></span></a>
				<figcaption>Walking Aids &amp; Supports</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="power-mobility" class="power-mobility"><span class="overlay"></span></a>
				<figcaption>Power Mobility</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="cpap-masks" class="cpap"><span class="overlay"></span></a>
				<figcaption>CPAP</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="bedroom" class="bedroom-safety"><span class="overlay"></span></a>
				<figcaption>Bedroom Safety</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="bathroom-saftey" class="bathroom-safety"><span class="overlay"></span></a>
				<figcaption>Bathroom Safety</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="physiotherapy-aids" class="physiotherapy-aids"><span class="overlay"></span></a>
				<figcaption>Physiotherapy Aids</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="incontinence" class="incontinence"><span class="overlay"></span></a>
				<figcaption>Incontinence</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="ostomy" class="ostomy"><span class="overlay"></span></a>
				<figcaption>Ostomy</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="woundcare" class="woundcare"><span class="overlay"></span></a>
				<figcaption>Woundcare</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="lift-chairs" class="lift-chairs"><span class="overlay"></span></a>
				<figcaption>Lift Chairs</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="daily-living-aids" class="daily-living-aids"><span class="overlay"></span></a>
				<figcaption>Assistive Daily Living</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="orthotics" class="orthotics"><span class="overlay"></span></a>
				<figcaption>Orthotics</figcaption>
			</figure>
		</div>

		<div class="offer">
			<figure>
				<a href="breast-pumps" class="breast-pumps"><span class="overlay"></span></a>
				<figcaption>Breast Pumps</figcaption>
			</figure>
		</div>

	</div>

</section>

<!-- End Copy -->


</main>

<?php

get_footer();

?>
