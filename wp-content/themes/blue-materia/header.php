<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="http://localhost:3000/wp-admin/post.php?post=20&action=edit">
		<link rel="icon" href="https://ohsnap.ca/wp-content/uploads/2016/06/fav.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="https://ohsnap.ca/wp-content/uploads/2016/06/fav.png">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" media="screen" title="no title" charset="utf-8">
		
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slick-theme.css" media="screen" title="no title" charset="utf-8">
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slick.css" media="screen" title="no title" charset="utf-8">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" media="screen" title="no title" charset="utf-8">
		
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.js"></script>
		
		<script src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/contact.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
		


	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		
		<div class="mobile-trigger">
  <ul class="mobile-trigger">
    <li class="top"></li>
    <li class="middle"></li>
    <li class="bottom"></li>
  </ul>
</div>

		<div id="container">