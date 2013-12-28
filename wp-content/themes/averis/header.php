	<?php
	global $wp_query;
    $content_array = $wp_query->get_queried_object();
	if(isset($content_array->ID)){
    	$post_id = $content_array->ID;
	}	
	if (!isset($post_id)) $post_id = idbyslug ('category');
	// Language Options
		$dragon_readmore = __('Learn More', 'averis');
		$averis_search = __('Search the Site...', 'averis');

	// General Options
		$template_uri = get_template_directory_uri();
		$SEO_description = get_bloginfo('description');

		if ( function_exists( 'get_option_tree') ) {
			$logo_subline = get_option_tree( 'aversis_logo_tagline' );
			$contact_line = get_option_tree( 'aversis_header_contactline' );
			$social_line = get_option_tree( 'aversis_header_social_text_line' );

			if(get_option_tree( 'aversis_search_box' )) $aversis_search_box="on"; else $aversis_search_box="off";
			if(get_option_tree( 'aversis_header_socialblock' )) $aversis_header_socialblock="on"; else $aversis_header_socialblock="off";

			$socials = get_option_tree( 'aversis_social_icons', '', false, true, -1 );

			$aversis_favicon = get_option_tree( 'aversis_favicon' );
			if(!strpos($aversis_favicon, "ttp:")) $aversis_favicon = get_template_directory_uri().'/'.$aversis_favicon;

			$aversis_favicon57 = get_option_tree( 'aversis_favicon57' );
			if(!strpos($aversis_favicon57, "ttp:")) $aversis_favicon57 = get_template_directory_uri().'/'.$aversis_favicon57;

			$aversis_favicon72 = get_option_tree( 'aversis_favicon72' );
			if(!strpos($aversis_favicon72, "ttp:")) $aversis_favicon72 = get_template_directory_uri().'/'.$aversis_favicon72;
			
			$aversis_favicon114 = get_option_tree( 'aversis_favicon114' );
			if(!strpos($aversis_favicon114, "ttp:")) $aversis_favicon114 = get_template_directory_uri().'/'.$aversis_favicon114;

			if(get_option_tree('aversis_seo_active') && isset($post_id)){
				$SEO_description .= " ".get_option_tree('aversis_seo_global_description'); 
				$SEO_tags = get_option_tree('aversis_seo_global_tags'); 
					if(get_option_tree('aversis_seo_page_active')){	
						$SEO_description .= " ".my_get_the_excerpt($post_id);
						$posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) {
						  	if($SEO_tags!="") $SEO_tags .= ', ';
						    $SEO_tags .= $tag->name ; 
						  }
						}
					}
			}

			// Background Default
			$def_background = get_option_tree( 'aversis_body_background_image' );
			$def_background_style = get_option_tree( 'aversis_background_image_style' );
		}

		if (isset($post_id)){
			$pagecustoms = getOptions($post_id);
			//Background Custom
			if(isset($pagecustoms["averis_background_active"])){
				$def_background = wp_get_attachment_image_src($pagecustoms["averis_background_src"],'full');
				$def_background = $def_background[0]; 
				$def_background_style = $pagecustoms["averis_background_type"];
			}
		}
?>
<!DOCTYPE html>

<!--
#######################################
	- THE HEAD PART -
######################################
-->

<html>
<!-- <html <?php language_attributes(); ?> -->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo wp_title(" | ",1,'right'); ?><?php echo get_bloginfo('name'); ?> </title>
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<meta http-equiv="Content-Type" content="<?php echo get_bloginfo('html_type'); ?>; charset=<?php echo get_bloginfo('charset'); ?>" />
	<meta name="keywords" content="<?php echo $SEO_tags; ?>" />
	<meta name="description" content="<?php echo $SEO_description; ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Mobile Specific
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	
    <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo $aversis_favicon;?>" type="image/png"> 
	<link rel="apple-touch-icon" href="<?php echo $aversis_favicon57;?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $aversis_favicon72;?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $aversis_favicon114;?>">
    
     <?php wp_head(); ?> 
</head>
		<!--
		#######################################
			- THE BODY PART -
		######################################
		-->
		<body  <?php body_class( 'body' ); ?>>

		
		
		
		
		<!--
		##################################
			-	BACKGROUND MODULE	-
		##################################
		
			- bg-fit-outside or
			- bg-fit-inside or
			- bg-stretch
			- bg-tiled
			
			and 
			
			- fadein
		###################################
		-->
		
				
		<div id="main-background">
			<?php
			if(strpos($def_background, "ttp:")) $def_background = $def_background;
			else $def_background = get_template_directory_uri().'/'.$def_background;
			?>												
			<div class="bg-<?php echo $def_background_style;?> bg-fadein" data-category="a" data-src="<?php echo $def_background;?>"></div>						
											
		</div>				
		
		<script>
		   //BACKGROUND STARTER			
			jQuery("#main-background").tpbackground({
						slideshow:0,
						callback:"false",
						cat:""						
					});	
		</script>
		
<div class="container" id="content_container">
	<div id="content">			
							
							
							<div class="sixteen columns" id="header">
									
										<!--
										########################################################################
											-	SITE LOGO // TOPLINE // PHONE NUMBER // SEARCH FIELD	-
										########################################################################
										-->
										<a href="<?php echo home_url(); ?>"><div class="sitelogo"></div></a>
										<div class="logo-topline"><?php echo $logo_subline; ?></div>
									
									
										<div class="headright_holder">
											<?php if($contact_line!="") {	?>
												<div class="head-phone"><?php echo $contact_line;?></div>
											<?php } ?>
											<?php if($aversis_search_box!="off"){ ?>	
												<div id="search">
													<form method="get" action="<?php echo home_url(); ?>/">
														<input type="text" id="Form_Search" name="s" value="<?php echo $averis_search;?>" class="InputBox" />
														<input type="submit" id="Form_Go" value="" class="Button" />
													</form>
												</div>	
											<?php } ?>	
												<div class="clear"></div>						
										</div>
										<div class="clear"></div>	

										<!--
										#########################################
											-	MENU NAVIGATION	-
										#########################################
										-->
										<div id="navholder" class="sixteen columns alpha omega">
											<?php wp_nav_menu( array( 
												  'menu' 			=> 'Main',
												  'container'       => 'div', 
												  'container_class' => '',
												  'container_id' 	=> 'nav'
											)); ?>

											<!--
													##############################
														-	SOCIALS	-
													##############################
													-->
													<div class="menuright_holder">
														<?php if($social_line!="") {	?>
															<span><?php echo $social_line;?></span>
														<?php } ?>
														<ul class="socials">
														<?php foreach ($socials as $social) {
															if(strpos($social["image"], "ttp:")) $social_image = $social["image"];
															else $social_image = get_template_directory_uri().'/'.$social["image"];
															echo '<li><a href="'.$social["link"].'"><div class="soc" style="width:20px;height:20px;background:url('.$social_image.') no-repeat;"><div class="bg"></div><div class="tooltip">'.$social["title"].'</div></div></a></li>';	
														}?>
														</ul>
														<div class="clear"></div>
													</div>
													
													<div class="clear"></div>
															

												  <!-- 
												  #########################
													-	Responsive Menu	-
												  ###############################
												  -->															
													<form id="responsive-menu" action="#" method="post">
														<div id="responsive-menu-button">Navigation</div>
														<select>
															<option value="">Navigation</option>											
														</select>
													</form>		

										</div>							
							</div>
	