<?php
/*---------------------------------
	The loop that displays all posts
------------------------------------*/
global $more;
?>

<?php //If there are no posts to display, such as an empty archive page ?>
<?php if ( ! have_posts() ) : ?>
		<h1><?php _e( 'Not Found', 'ikaros' ); ?></h1>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'ikaros' ); ?></p>
		<?php get_search_form(); ?>

<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php //Display All Posts ?>

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

<?php endwhile;
	wp_reset_query();
 ?>