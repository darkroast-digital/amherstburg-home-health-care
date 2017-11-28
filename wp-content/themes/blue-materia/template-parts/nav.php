<style>
    nav p {
        text-align:center;
        margin-top:2rem;
        font-size:.9rem;
        line-height: 1.5rem;
    }
</style>

<div class="mobile-menu">
  <ul>
  	<li><a href="/">Home</a></li>
  	<li><a href="products">Products</a></li>
  	<li><a href="rentals">Rentals</a></li>
    <li><a href="service">Service</a></li>
    <li><a href="videos">Videos</a></li>
  	<li><a href="contact">Contact</a></li>	
  </ul>
</div>

<nav class="nav nav-fixed">
	<div class="row">
		<a href="/" class="nav-brand">
			<img src="../wp-content/themes/blue-materia/img/logo.png" alt="Amherstburg Home Health">
		</a>
    <img src="../wp-content/themes/blue-materia/img/adp-banner.jpg" alt="Ontario Assistive Devices Program (ADP) Approved Vendor in power and manual wheelchairs, seating, and mobility." class="adp-banner-top" draggable="false">
		<div class="pull-right">
		      <p>433 Sandwich Street South
          <br/>Amherstburg, ON N9V 3K8
          <br/>(519) 736-0972</p>
		</div>
	</div>
	<div class="nav-inner row-full">

   
			<?php

        wp_nav_menu(array(

            'theme_location'    => 'primary',
            'container'         => 'ul',
            'menu_class'        => 'navbar'

          )
        );

      ?>
      
      <!-- <?php wp_nav_menu(array(
                       'container' => false,                           // remove nav container
                       'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                       'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                       'menu_class' => 'nav top-nav cf',               // adding custom nav class
                       'theme_location' => 'main-nav',                 // where it's located in the theme
                       'before' => '',                                 // before the menu
                             'after' => '',                                  // after the menu
                             'link_before' => '',                            // before each link
                             'link_after' => '',                             // after each link
                             'depth' => 0,                                   // limit the depth of the nav
                       'fallback_cb' => ''                             // fallback function (if there is one)
            )); ?> -->

	</div>

</nav>
