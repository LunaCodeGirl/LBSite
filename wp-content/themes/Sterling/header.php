<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<?php
global $ttso;
$logo = $ttso->st_sitelogo;
$custom_logo = $ttso->st_logo_icon;
$custom_logo_text = stripslashes($ttso->st_logo_text);
$toolbar = $ttso->st_toolbar;
$responsive = $ttso->st_responsive;
?>
<meta charset="utf-8">
<?php if ($responsive == "false"): ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php endif; ?>
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<?php wp_head(); ?>
<!--[if lt IE 9]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/IE.css" />
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lte IE 8]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/framework/js/IE.js"></script>
<![endif]-->
</head>
<body <?php body_class();?>>
<?php if($toolbar = "true") { ?>
	<aside class="top-aside clearfix">
		<div class="center-wrap">
			<div class="one_half">
				<?php dynamic_sidebar("Top Left Toolbar"); ?>
			</div><!-- END top-toolbar-left -->
            
			<div class="one_half">
				<?php dynamic_sidebar("Top Right Toolbar"); ?>
			</div><!-- END top-toolbar-right -->
		</div><!-- END center-wrap -->
    <div class="top-aside-shadow"></div>
	</aside>
<?php } ?> 
<header>
	<div class="center-wrap"> 
		<div class="companyIdentity">
    <?php if (is_page_template('page-template-under-construction.php')) { ?>
    <img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" />
    <?php } else { ?>
			<?php if ($custom_logo_text == ''){ ?>
			<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" /></a>
			<?php }else{?>
			<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/global/<?php echo $custom_logo; ?>" alt="<?php bloginfo('name'); ?>" /></a><h1><a href="<?php echo home_url(); ?>"><?php echo $custom_logo_text; echo '</a></h1>';}?>
      <?php } ?>
		</div><!-- END companyIdentity -->    
		<nav>
			<ul>
				<?php wp_nav_menu( array('container' => false, 'theme_location' => 'Main Menu','depth' => 0 )); ?>
			</ul>
		</nav>
	</div><!-- END center-wrap -->
</header>