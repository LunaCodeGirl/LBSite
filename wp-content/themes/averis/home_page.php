<?php
/* 
Template Name: Home Page
*/
?>
<?php
	global $wp_query;
    if(isset($wp_query))
    	$content_array = $wp_query->get_queried_object();
	if(isset($content_array->ID)){
    	$post_id = $content_array->ID;
	}	
	
	$template_uri = get_template_directory_uri();
	
	// Page Options
		$pagecustoms = getOptions();


		// Headline Block On or Off (breadcrumbs too)
		if(isset($pagecustoms["averis_headline_active"])){$averis_headline_active="on";}else {$averis_headline_active="off";}	
		if(isset($pagecustoms["averis_breadcrumbs_active"])){$averis_breadcrumbs_active="on";}else {$averis_breadcrumbs_active="off";}
		if(isset($pagecustoms["averis_activate_slider"])){
			$averis_activate_slider="on";
			$averis_slider = $pagecustoms["averis_slider"];

		}else {$averis_activate_slider="off";}

		// Sidebar Options
			$averis_activate_sidebar="off";

	// Blog Options
		if ( function_exists( 'get_option_tree') ) {
		
		}	

?>    

<?php get_header(); ?>
<!-- MAIN CONTENT CONTAINER	-->
	<?php if(have_posts()) : while(have_posts()) : the_post();
		if(strlen(get_the_content())){
	?>
		<div class="sixteen columns">

			<?php  if ($averis_activate_slider!="off"){ 
						$slider_slugs = get_option("averis_sliders");
                		$slider_counter = 0;
                		foreach ( $slider_slugs as $slug ){
                			$checked="";
                			if($slug==$averis_slider) {
                				echo do_shortcode('[averis_slider name="'.get_option($slug."banner_slug").'"]');
                		 	}
                		} 
						
					}?>
					<div class="clear"></div>
					<div class="divide50"></div>
					<?php  the_content(); ?>
					<div class="clear"></div>
		</div>
	<?php } endwhile; endif; //have_posts ?>
<!-- END OF CONTENT CONTAINER -->
<?php get_footer(); ?>