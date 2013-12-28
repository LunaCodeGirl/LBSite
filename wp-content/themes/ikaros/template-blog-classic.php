<?php
/*---------------------------------
	Template Name: Blog (Classic Layout)
------------------------------------*/
	get_header(); 
	global $more;
?>
	
	<h1 class="center"><?php the_title(); ?></h1>
	<div class="intro center"><?php echo get_post_meta($post->ID, 'rb_meta_box_tagline_set', true); ?></div>

	<div class="post-container">

		<?php while (have_posts()) : the_post(); ?>

		<?php
			$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
			$args = array('offset'=> 0, 'paged'=>$paged);
			$all_posts = new WP_Query($args);
			while($all_posts->have_posts()) : $all_posts->the_post();
			$more = 0;
		?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>

	    	<div class="post-info">

		        <div class="date">
		        	<div class="day"><?php the_time('j'); ?></div>
		        	<div class="month"><?php the_time('M'); ?></div>
		        </div>

		        <div class="title-meta">
		          <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		          <div class="meta"><?php _e('Posted on', 'ikaros'); ?> <?php the_time('F j, Y'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a> in <?php the_category(', '); ?> with <?php comments_number(__('No Comments', 'ikaros')); ?></div>
		      	</div>

		    </div>

			<?php the_content('Read more &rarr;'); ?>

	    </div>
			
		<?php endwhile; ?>
		<?php endwhile; ?>

		<div id="navigation">
			<?php rb_pagination($all_posts->max_num_pages, 3) ?>
		</div>
	
	</div>

	<div class="sidebar">
		<?php if(is_active_sidebar('rb_blog_widget'))
				dynamic_sidebar('rb_blog_widget'); ?>
	</div>
	
	<?php get_footer(); ?>