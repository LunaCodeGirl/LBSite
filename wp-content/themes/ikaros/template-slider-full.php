<?php
/*---------------------------------
	Template Name: Slider Page (Full Width)
------------------------------------*/
	get_header();
?>

<?php putRevSlider(get_post_meta($post->ID, 'rb_meta_box_slider_home_set', true)); ?>

<div class="wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

	<?php endwhile; ?>

<?php get_footer(); ?>