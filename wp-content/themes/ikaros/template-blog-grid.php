<?php
/*---------------------------------
	Template Name: Blog (Grid Layout)
------------------------------------*/
	get_header(); 
?>

	<h1 class="center"><?php the_title(); ?></h1>
	<div class="intro center"><?php echo get_post_meta($post->ID, 'rb_meta_box_tagline_set', true); ?></div>

	<div class="content-wrapper">
		<div class="posts-grid">

			<?php while (have_posts()) : the_post(); ?>
	
			<?php
				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array('offset'=> 0, 'paged'=>$paged);
				$all_posts = new WP_Query($args);
				while($all_posts->have_posts()) : $all_posts->the_post();
			?>
			
			<div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>

				<div class="featured">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
				</div>

				<div class="excerpt">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php rb_excerpt('rb_excerptlength_post', 'rb_excerptmore'); ?></p>
				</div>

				<div class="meta">
					<div class="date"><?php the_time('j M Y'); ?></div>
					<div class="comment"><?php comments_number('0'); ?></div>
				</div>

			</div>
				
			<?php endwhile; ?>
			<?php endwhile; ?>

		</div>

	</div>

	<div id="navigation">
		<?php rb_pagination($all_posts->max_num_pages, 3) ?>
	</div>
	
	<?php get_footer(); ?>