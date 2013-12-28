<!--///////////////////////////////
	Single Project Page Template
////////////////////////////////////////-->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<h1 class="center"><?php the_title(); ?></h1>
	<div class="intro center"><?php echo get_post_meta($post->ID, 'rb_meta_box_tagline_set', true); ?></div>

</div>

<div class="zetaSlider" id="zetaSlider">

	<div class="zetaHolder">
		<div class="zetaWrapper">
			<div class="zetaEmpty">
				<?php rb_attachment_gallery($post->ID); ?>
			</div>
		</div>
	</div>

	<div class="zetaControls">
		<a class="zetaBtnPrev" href="#">Previous</a>
		<a class="zetaBtnNext" href="#">Next</a>
	</div>

	<div class="zetaWarning">
	    <div class="navigate"><?php _e('Navigate by', 'ikaros'); ?></div>
	    <div class="drag"><?php _e('Dragging', 'ikaros'); ?></div>
	    <div class="arrow"><?php _e('Arrows', 'ikaros'); ?></div>
	    <div class="keys"><?php _e('Keyboard', 'ikaros'); ?></div>
	    <div class="clear"><?php _e('', 'ikaros'); ?></div>
	</div>

</div>

<div class="wrapper">

	<div class="three-fourth">
		<?php the_content(); ?>
	</div>

	<div class="one-fourth last">

		<div class="item-info">

			<ul class="portfolio-meta">
		        <li><span><?php _e('Date:', 'ikaros'); ?></span> <?php echo get_post_meta($post->ID, 'rb_post_date', true); ?></li>
		        <li><span><?php _e('Skills:', 'ikaros'); ?></span> <?php echo get_post_meta($post->ID, 'rb_post_skill', true); ?></li>
		        <li><span><?php _e('Client:', 'ikaros'); ?></span> <?php echo get_post_meta($post->ID, 'rb_post_client', true); ?></li>
		        <li><span><?php _e('Link:', 'ikaros'); ?></span> <a href="<?php echo get_post_meta($post->ID, 'rb_post_link', true); ?>"><?php echo get_post_meta($post->ID, 'rb_post_link', true); ?></a></li>
   			</ul>

	   		<div class="portfolio-nav">
	   			<h6><?php _e('Other Projects', 'ikaros'); ?></h6>
	   			<?php if(get_adjacent_post(false, '', false)) : ?>
	   				<span class="prev"><?php echo next_post_link('%link', '%title', false); ?></span>
	   			<?php endif; ?>
	   			<span class="up"><a href="<?php echo get_permalink(ot_get_option('rb_portfolio_page_link')); ?>">All</a></span>
	   			<?php if(get_adjacent_post(false, '', true)) : ?>
	   				<span class="next"><?php echo previous_post_link('%link', '%title', false); ?></span>
	   			<?php endif; ?>
	   		</div>

	   	</div>

   	</div>

   	<div class="clear"></div>
   	<br /><br />

   	<h3><?php _e('Related Projects', 'ikaros'); ?></h3>

   	<div class="portfolio">

   		<ul class="items">
   			<?php

				$tags = array();
			
				$post_terms = wp_get_object_terms($post->ID, 'portfolio_category');
				$tag = isset($post_terms[0] -> name) ? $post_terms[0] -> name : '';
				if(!empty($post_terms)){
					if(!is_wp_error( $post_terms ))
						foreach($post_terms as $term)
							array_push($tags, $term->name); 
				}

				endwhile;
		
				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'posts_per_page' => 3, 
					   'offset'=> 0,
					   'portfolio_category' => implode($tags, ','));

				$all_posts = new WP_Query($args);
				while($all_posts->have_posts()) : $all_posts->the_post();
					
			?>
				
			<li><a href="<?php the_permalink(); ?>">
				<div class="caption">
					<h3><?php the_title(); ?></h3>
					<span class="meta"><?php rb_get_categories($post->ID, 'portfolio_category'); ?></span>
				</div>
				<?php the_post_thumbnail('thumb-video'); ?>
			</a></li>

			<?php endwhile; ?>

   		</ul>

   	</div>
