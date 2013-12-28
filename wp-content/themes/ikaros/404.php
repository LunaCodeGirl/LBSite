<?php
/*---------------------------------
	Tags Page Template
------------------------------------*/
get_header(); 
?>
	
	<h1 class="center"><?php _e('404 Error', 'ikaros'); ?></h1>
	<div class="intro center"><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help. Additionally you can return to our home page and start over.', 'ikaros' ); ?></div>
	<?php rewind_posts(); ?>
<?php get_footer(); ?>