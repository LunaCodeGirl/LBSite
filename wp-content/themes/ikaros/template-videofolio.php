<?php
/*---------------------------------
	Template Name: Videofolio
------------------------------------*/
 
	get_header(); 
	$i = 0;
	
?>
		
	<?php while (have_posts()) : the_post(); ?>

		<h1 class="center"><?php the_title(); ?></h1>
		<div class="intro center"><?php echo get_post_meta($post->ID, 'rb_meta_box_tagline_set', true); ?></div>

		<div id="videocontainer">
		
			<?php 

				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'posts_per_page' => -1, 
					   'offset'=> 0,
					   'post_type' => 'videofolio');

				$all_posts = new WP_Query($args);

				while($all_posts->have_posts()) : $all_posts->the_post();

			?>

			<div class="video">

				<?php 
				if(get_post_meta($post->ID, 'rb_meta_box_video_file1', true) != ''){
					echo '<video id="projectVideo" class="projekktor" width="960" height="' . get_post_meta($post->ID, 'rb_meta_box_video_height', true) . '" poster="' . get_post_meta($post->ID, 'rb_meta_box_video_file3', true) . '"><source src="' . get_post_meta($post->ID, 'rb_meta_box_video_file2', true) . '" type="video/ogg" /><source src="' . get_post_meta($post->ID, 'rb_meta_box_video_file1', true) . '" type="video/mp4" /></video>';
				} else {
					echo get_post_meta($post->ID, 'rb_meta_box_video_code', true);
				}

				?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>

			<?php endwhile; ?>

		</div>

		<div id="videocase">

			<ul class="filter">
				<li><a class="active" href="#" data-filter="*">All</a></li>
				<?php 
				$portfolio_categories = get_categories(array('taxonomy'=>'videofolio_category'));
				foreach($portfolio_categories as $portfolio_category)
					echo '<li><a href="#" data-filter=".' . $portfolio_category->slug . '">' . $portfolio_category->name . '</a></li>';
				?>
			</ul>

			<ul class="items">

			<?php 

				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'posts_per_page' => -1, 
					   'offset'=> 0,
					   'post_type' => 'videofolio');

				$all_posts = new WP_Query($args);

				while($all_posts->have_posts()) : $all_posts->the_post();

			?>

			<li class="item <?php rb_get_categories($post->ID, 'videofolio_category', ' ', 'slug'); ?>" data-address="id<?php echo $i++; ?>">
				<a href="#">
					<div class="caption">
						<h3><?php the_title(); ?></h3>
						<span class="meta"><?php rb_get_categories($post->ID, 'videofolio_category') ?></span>
					</div>
					<?php the_post_thumbnail('thumb-video'); ?>
				</a>
			</li>

			<?php endwhile; ?>

			</ul>

		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>