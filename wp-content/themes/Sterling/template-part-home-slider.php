<?php
// Remove any filters added by themes functions
remove_filter('pre_get_posts','wploop_exclude');

// Query the database and retrieve the slider posts added by user
query_posts('post_type=slider&posts_per_page=-1');
if ( have_posts() ) : while ( have_posts() ) : the_post();


//process all individual post meta.
$slider_image = get_post_meta($post->ID,'slider_image',true);
$slider_image_link = get_post_meta($post->ID,'slider_image_url',true);
$slider_image_alt_text = get_post_meta($post->ID,'slider_image_alt_text',true);
$slider_video = get_post_meta($post->ID,'slider_video',true);
$slider_alignment = get_post_meta($post->ID,'slider_alignment',true);
?>


<?php 
//if image = false and video = false then display content area
if(empty($slider_image) && empty($slider_video)) { ?>

<div class="clearfix home-slider-post" id="slider-post-<?php the_ID(); ?>">
  <?php the_content(); ?>
</div><!-- END slider post -->


<?php }


//if image = true and alignment = right
if(!empty($slider_image) && $slider_alignment == "align_right") { ?>

<div class="clearfix home-slider-post" id="slider-post-<?php the_ID(); ?>">
	<div class="one_half">
  <?php the_content(); ?>
  </div>
  
  <div class="one_half">
  <?php echo do_shortcode('[image_frame image_path="'.$slider_image.'" size="full-half" alt="'.$slider_image_alt_text.'" link_to_page="'.$slider_image_link.'"]'); ?>
  </div>
</div><!-- END slider post -->


<?php }


//if image = true and alignment = left
if(!empty($slider_image) && $slider_alignment == "align_left") { ?>

<div class="clearfix home-slider-post" id="slider-post-<?php the_ID(); ?>">
	<div class="one_half">
  <?php echo do_shortcode('[image_frame image_path="'.$slider_image.'" size="full-half" description="'.$slider_image_alt_text.'" link_to_page="'.$slider_image_link.'"]'); ?>
  </div>
  
	<div class="one_half">
  <?php the_content(); ?>
  </div>
</div><!-- END slider post -->


<?php }


//if video = true and alignment = right
if(!empty($slider_video) && $slider_alignment == "align_right") { ?>

<div class="clearfix home-slider-post" id="slider-post-<?php the_ID(); ?>">
	<div class="one_half">
  <?php the_content(); ?>
  </div>
  
  <div class="one_half">
  	<div class="single-post-thumb">
    <?php
    $shortcode = '[embed width="445" height="273"]'.$slider_video.'[/embed]';
    global $wp_embed;
    echo $wp_embed->run_shortcode($shortcode);
		?>
  	</div>
  </div>
</div><!-- END slider post -->


<?php }


//if video = true and alignment = left
if(!empty($slider_video) && $slider_alignment == "align_left") { ?>

<div class="clearfix home-slider-post" id="slider-post-<?php the_ID(); ?>">

  <div class="one_half">
      <div class="single-post-thumb">
    <?php
    $shortcode = '[embed width="445" height="273"]'.$slider_video.'[/embed]';
    global $wp_embed;
    echo $wp_embed->run_shortcode($shortcode);
        ?>
      </div>
  </div>

    <div class="one_half">
  <?php the_content(); ?>
  </div>
</div><!-- END slider post -->

<?php } ?>

<?php //that's all folks!
endwhile; endif;wp_reset_query(); ?>