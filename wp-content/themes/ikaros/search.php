<?php
/*---------------------------------
	Search Page Template
------------------------------------*/

get_header(); 

?>

	<h1 class="center"><?php _e('Search Results', 'ikaros'); ?></h1>

	<?php 

		$allsearch = &new WP_Query("s=$s&showposts=-1"); 
		$key = esc_html($s, 1); 
		$count = $allsearch->post_count;
		wp_reset_query(); 

	?>

	<?php if ( have_posts() ) : ?>

		<div class="intro center"><?php echo __('Your search for ', 'ikaros') . '<strong>'.get_search_query().'</strong>' . __(' returned ', 'ikaros') . $count . __(' results.', 'ikaros'); ?></div>

		<div class="post-container">
			<?php get_template_part( 'loop', 'search' ); ?>
			<div id="navigation">
				<?php rb_pagination('', 3) ?>
			</div>
		</div>

	<?php else : ?>

		<div class="intro center"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'ikaros' ); ?></div>
		<?php wp_reset_query(); wp_reset_postdata(); rewind_posts(); ?>
	
	<?php endif; ?>
	 
	<div class="sidebar">
		<?php if(is_active_sidebar('rb_blog_widget'))
				dynamic_sidebar('rb_blog_widget'); ?>
	</div>
	
<?php get_footer(); ?>