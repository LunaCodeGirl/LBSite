<?php get_header(); ?>

<?php if (get_post_type() != 'portfolio' && get_post_type() != 'gallery'){ ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<?php setPostViews(get_the_ID()); ?>

	<div class="post-container">

	  	<div id="post-<?php the_ID();?>" <?php post_class('post'); ?>>

	    	<div class="post-info">

		        <div class="date">
		        	<div class="day"><?php the_time('j'); ?></div>
		        	<div class="month"><?php the_time('M'); ?></div>
		        </div>

		        <div class="title-meta">
		          <h1 class="post-title"><?php the_title(); ?></h1>
		          <div class="meta"><?php _e('Posted on', 'ikaros'); ?> <?php the_time('F j, Y'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a> in <?php the_category(', '); ?> with <?php comments_number(__('No Comments', 'ikaros')); ?></div>
		      	</div>

	    	</div>

	       	<?php the_content(); ?>

	        <?php if(has_tag()) : ?><div class="tags"><span></span> <?php the_tags('Tags: ', ', '); ?></div><?php endif; ?>

	   	</div>

	   	<div class="related">

	   		<h3><?php _e('Related Posts', 'ikaros'); ?></h3>
	   		<ul>

				<?php
				
					$pops_k = 0;
					$tags = array();
			
					$post_terms = wp_get_object_terms($post->ID, 'post_tag');
					$tag = isset($post_terms[0] -> name) ? $post_terms[0] -> name : '';
					if(!empty($post_terms)){
						if(!is_wp_error( $post_terms ))
							foreach($post_terms as $term)
								array_push($tags, $term->name); 
					}

					endwhile;
			
					$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
					$args = array( 'posts_per_page' => 4, 
						   'offset'=> 0,
						   'tag' => implode($tags, ','));

					$all_posts = new WP_Query($args);
					while($all_posts->have_posts()) : $all_posts->the_post();
						$pops_k++;
				?>
				
					<li><div class="featured"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div></li>
					
				<?php endwhile; ?>
				
	   		</ul>

	   		<?php echo '<p class="hidden">' . $pops_k . '</p>'; ?>

	   	</div>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post();
			comments_template( '', true );
		endwhile; ?>

	</div>

	<div class="sidebar">
		<?php if(is_active_sidebar('rb_blog_widget'))
				dynamic_sidebar('rb_blog_widget'); ?>
	</div>

<?php } else if(get_post_type() == 'portfolio') { 
		include('single-project.php');
	} else if(get_post_type() == 'gallery') { 
		include('single-gallery.php');
	} 
	
?>

<?php get_footer(); ?>