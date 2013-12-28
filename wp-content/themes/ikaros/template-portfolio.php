<?php
/*---------------------------------
	Template Name: Portfolio
------------------------------------*/
	get_header();
?>

	<h1 class="center"><?php the_title(); ?></h1>
	<div class="intro center"><?php echo get_post_meta($post->ID, 'rb_meta_box_tagline_set', true); ?></div>

	<div id="portfolio">

		<ul class="filter">
			<li><a class="active" href="#" data-filter="*">All</a></li>
			<?php 
			$portfolio_categories = get_categories(array('taxonomy'=>'portfolio_category'));
			foreach($portfolio_categories as $portfolio_category)
				echo '<li><a href="#" data-filter=".' . $portfolio_category->slug . '">' . $portfolio_category->name . '</a></li>';
			?>
		</ul>

		<ul class="items">

			<?php 

				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'posts_per_page' => -1, 
					   'offset'=> 0,
					   'post_type' => 'portfolio');

				$all_posts = new WP_Query($args);

				while($all_posts->have_posts()) : $all_posts->the_post();

			?>

			<li class="item <?php rb_get_categories($post->ID, 'portfolio_category', ' ', 'slug'); ?>">
				<a href="<?php the_permalink(); ?>">
					<div class="caption">
						<h3><?php the_title(); ?></h3>
						<span class="meta"><?php rb_get_categories($post->ID, 'portfolio_category') ?></span>
					</div>
					<?php the_post_thumbnail('thumb-video'); ?>
				</a>
			</li>

			<?php endwhile; ?>

		</ul>

	</div>

	<?php get_footer(); ?>