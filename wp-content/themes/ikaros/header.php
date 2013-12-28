<!DOCTYPE html>
<!--[if IE 8]>    <html <?php language_attributes(); ?> class="ie8" xmlns="http://www.w3.org/1999/xhtml"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="author" content="rubenbristian.com" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<?php 

		$body_vars = (ot_get_option('rb_font_body', 'Droid+Sans') == 'Droid+Sans' ? ':400,700' : '');
		$heading_vars = (ot_get_option('rb_font_headings', 'Ubuntu') == 'Ubuntu' ? ':300italic,300,700,700italic' : '');

	?>

	<link href='http://fonts.googleapis.com/css?family=<?php echo ot_get_option('rb_font_body', 'Droid+Sans') . $body_vars; ?>|<?php echo ot_get_option('rb_font_headings', 'Ubuntu') . $heading_vars; ?>|Droid+Serif:400italic' rel='stylesheet' type='text/css'>

	<?php wp_enqueue_style('colors-css', get_template_directory_uri() . '/css/colors.css', null, null); ?>
	<?php wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/custom.css', null, null); ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo ot_get_option('rb_favicon', get_template_directory_uri().'/images/favicon.ico')?>" />

    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<?php

	global $responsive;

	if(is_page() || is_home() || get_post_type() == 'portfolio'){
		wp_deregister_script('comment-reply');
	}

	if(ot_get_option('rb_tracking_where') == 'head') echo ot_get_option('rb_tracking');

	wp_head();

	?>
		
</head>

<body id="body" <?php body_class('page'); ?>>

<div class="header-wrapper clearfix">

  <div class="header"> 

	    <div class="logo"> 
			<a id="logo" href="<?php echo home_url(); ?>">
				<img src="<?php echo ot_get_option('rb_logo', get_template_directory_uri().'/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" />
			</a> 
		</div>

	    <div id="menu" class="menu">
	    	
			<?php wp_nav_menu( array(
				 'container' => false,
				 'menu_class' => 'tiny',
				 'echo' => true,
				 'before' => '',
				 'after' => '',
				 'link_before' => '',
				 'link_after' => '',
				 'depth' => 2,
				 'theme_location' => 'primary',
				 'walker' => new menu_default_walker())
			 );
			?>

		</div>
		<div class="clear"></div>

	</div>
		
	<div class="header-light"></div>

</div>

<?php if(!is_page_template('template-slider-full.php') && !is_page_template('template-slider-fit.php')) : ?>

<div class="wrapper">

<?php endif; ?>