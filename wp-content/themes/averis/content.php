<?php
/* 
Template Name: Content
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
		if(isset($pagecustoms["averis_headline_active"])){
			if(isset($pagecustoms["averis_breadcrumbs_active"])){$averis_breadcrumbs_active="on";}else {$averis_breadcrumbs_active="off";}
			$averis_headline_active="on";
			if(isset($pagecustoms["averis_header_title"]))
				$averis_headline = $pagecustoms["averis_header_title"];
			else
				$averis_headline = get_the_title($post_id);
		}
		else {
			$averis_headline_active="off";
		}	

		// Sidebar Options
		if(isset($pagecustoms["averis_activate_sidebar"])){
			$averis_activate_sidebar="on";
			$sidebar_orientation = $pagecustoms["averis_sidebar_orientation"];
			$sidebar = $pagecustoms["averis_sidebar"];
			$post_column_full = "eleven";
			if($sidebar_orientation=="right"){
				$sidebar_class = "offset-by-one omega alpha sidebar";	
				$main_class = "left";
			}
			else {
				$sidebar_class = "leftfloat";
				$main_class = "rightfloat omega";
			}
		}
		else {
			$averis_activate_sidebar="off";
			$post_column_full = "sixteen";
			$main_class="";
		}		

	// Blog Options
		if ( function_exists( 'get_option_tree') ) {
		
		}	

?>    

<?php get_header(); ?>

<?php if ($averis_headline_active!="off"){?>

	<!--
	####################################
		-	TITLE && BREADCRUMB	-
	####################################
	-->
	<div class="clear"></div>
	<div class="sixteen columns alpha">							
		<div class="pagetitleholder">								
				<div class="leftfloat">
					<div class="pagetitle"><h3><?php echo $averis_headline; ?></h3></div>
					<div class="clear"></div>								
				</div>
				<div class="breadcrumb_holder">
					<div class="breadcrumb"><?php 
							if($averis_breadcrumbs_active!="off"){
								if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
							}
							else
								echo "<span class='marked'>&nbsp;</span></div>
										<div class='clear'></div>";
						?></div>
					<div class="clear"></div>								
				</div>
				<div class="clear"></div>								
		</div>
	</div>
<?php } ?>

	<div class="clear"></div>
	<div class="divide50"></div>
	
<!-- MAIN CONTENT CONTAINER	-->
	<?php if(have_posts()) : while(have_posts()) : the_post();
		//if(strlen(get_the_content())){
	?>
		<div class="sixteen columns alpha">
			<div class="<?php echo $post_column_full." ".$main_class;?> columns" style="overflow:visible">
					<div class="clear"></div>
					<?php the_content(); ?>
					<div class="clear"></div>
			</div>
			<?php if($averis_activate_sidebar!="off") {?>
				<div class="four columns sidebar <?php echo $sidebar_class;?>">
					 <div class="clear"></div>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar($sidebar) ) : ?>
							
		                       
		                        <div style="margin-bottom:20px"><span class="widget_title">Sidebar Widget</span></div>
		                        <p style="color:#ccc">
		                        	Please configure this Widget in the Admin Panel under Appearance -> Widgets
		                        </p>
		                        <div class="clear"></div>
		                    
		                <?php endif;?>
				</div>
			<?php } ?>
		</div>
	<?php  endwhile; endif; //have_posts ?>
<!-- END OF CONTENT CONTAINER -->
<?php get_footer(); ?>