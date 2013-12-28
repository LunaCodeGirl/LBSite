<?php
/*
Template Name: Homepage - Lightbox
*/
?>
<?php get_header(); ?>

<?php
global $ttso;
$primaryimage = $ttso->st_home_lightbox_primary_image;
$secondaryimage = $ttso->st_home_lightbox_secondary_image;
$home_lightbox = $ttso->st_home_lightbox;
$home_lightbox_content = $ttso->st_home_lightbox_content;
$home_lightbox_banner_content = stripslashes($ttso->st_home_lightbox_banner_content);
?>

<section class="banner">
	<div class="center-wrap">
    	<div class="home-lightbox-banner-content">
		<?php echo $home_lightbox_banner_content; ?>
        </div><!-- END home-lightbox-banner-content -->
        
        <div class="hero-wrap">
		<?php if ($home_lightbox == "true"){
			echo '<a href="'.$home_lightbox_content.'" data-gal="prettyPhoto" title="" class="lightbox-link">View Details</a>'.'<img src="'.$primaryimage.'" height="316" width="450" class="home-primary-image" />';
			} else {
				echo '<img src="'.$primaryimage.'" height="316" width="450" class="home-primary-image" />';
				} ?>
		<?php echo '<img src="'.$secondaryimage.'" height="271" width="450" class="home-secondary-image" />'; ?>
        </div><!-- END hero-wrap -->
    </div><!-- END center-wrap -->
    
<div class="shadow top"></div>
<div class="shadow bottom"></div>
<div class="tt-overlay"></div>
</section>

<section id="content-container" class="clearfix">
<div id="main-wrap" class="main-wrap-home-lightbox clearfix">
<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); truethemes_link_pages(); endwhile;endif; ?>
<?php get_template_part('template-part-inline-editing','childtheme'); ?>
</div><!-- END main-wrap -->

<?php get_footer(); ?>