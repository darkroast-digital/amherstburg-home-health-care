<div class="mobile-trigger">
  <ul>
    <li class="top"></li>
    <li class="middle"></li>
    <li class="bottom"></li>
  </ul>
</div>
<div class="mobile-menu">
  <?php

    wp_nav_menu(array(

        'theme_location'		=> 'primary',
        'container'					=> 'ul',
        'menu_class'				=> 'mobile-navigation'

      )
    );

  ?>
</div>

<nav class="nav nav-fixed">
	<div class="row">
		<a href="#" class="nav-brand">
			<img src="//localhost:3000/wp-content/uploads/2016/07/logo.png" alt="Amherstburg Home Health">
		</a>
		<div class="search-container pull-right">
		<?php get_search_form(); ?>
		</div>
	</div>
	<div class="nav-inner row-full">
			<?php

			  wp_nav_menu(array(

			      'theme_location'		=> 'primary',
			      'container'					=> 'ul',
			      'menu_class'				=> 'navbar'

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
