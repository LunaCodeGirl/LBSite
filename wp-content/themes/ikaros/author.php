<?php
/*---------------------------------
	Tags Page Template
------------------------------------*/
get_header(); 
?>
	
	<h1 class="center"><?php _e('Author Archives', 'ikaros'); ?></h1>
	<div class="intro center"><?php _e( 'You are currently viewing all posts published by <strong>' . get_userdata(get_query_var('author'))->nickname . '</strong>.', 'ikaros' ); ?></div>

	<div class="post-container">
	
		<?php get_template_part( 'loop', 'author' ); ?>
				
		<div id="navigation">
			<?php rb_pagination('', 3) ?>
		</div>

	 </div>

	<div class="sidebar">
		<?php if(is_active_sidebar('rb_blog_widget'))
				dynamic_sidebar('rb_blog_widget'); ?>
	</div>
	
	<?php get_footer(); ?>