<?php
/*---------------------------------
	Template Name: Slider Page (Fit Width)
------------------------------------*/
	get_header();
?>

<div class="bannercontainer">
<?php putRevSlider(get_post_meta($post->ID, 'rb_meta_box_slider_home_set', true)); ?>
</div>

<div class="wrapper">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

	<?php endwhile; ?>

<?php get_footer(); ?>