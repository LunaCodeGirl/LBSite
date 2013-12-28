<?php
/*---------------------------------
	Single Page Templte
------------------------------------*/

get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<h1 class="center"><?php the_title(); ?></h1>
		<div class="intro center"><?php echo get_post_meta($post->ID, 'rb_meta_box_tagline_set', true); ?></div>

		<?php 
			$layout = get_post_meta($post->ID, 'rb_meta_box_sidebar_layout', true); 
			$sidebar = get_post_meta($post->ID, 'rb_meta_box_sidebar_set', true);
		?>

		<?php if($layout == 'right-sidebar') : ?>

			<div class="post-container">
		  		<div class="post"><?php endif; ?>
					<?php the_content(); ?>
				<?php if($layout == 'right-sidebar') : ?></div>
			</div>
			<div class="sidebar">
				<?php if(is_active_sidebar($sidebar))
					dynamic_sidebar($sidebar); ?>
			</div>

		<?php endif; ?>

	<?php endwhile; ?>      

<?php get_footer(); ?>