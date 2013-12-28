<?php
/*---------------------------------
	Template Name: Gallery
------------------------------------*/
	get_header();
?>

	<h1 class="center"><?php the_title(); ?></h1>
	<div class="intro center"><?php echo get_post_meta($post->ID, 'rb_meta_box_tagline_set', true); ?></div>

	<div id="portfolio">

		<ul class="filter">
			<li><a class="active" href="#" data-filter="*">All</a></li>
			<?php 
			$portfolio_categories = get_categories(array('taxonomy'=>'gallery_category'));
			foreach($portfolio_categories as $portfolio_category)
				echo '<li><a href="#" data-filter=".' . $portfolio_category->slug . '">' . $portfolio_category->name . '</a></li>';
			?>
		</ul>

		<ul class="items">

			<?php 

				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'posts_per_page' => -1, 
					   'offset'=> 0,
					   'post_type' => 'gallery');

				$all_posts = new WP_Query($args);

				while($all_posts->have_posts()) : $all_posts->the_post();

				$the_gallery = rb_attachment_gallery2($post->ID);

			?>

			<li class="item <?php rb_get_categories($post->ID, 'gallery_category', ' ', 'slug'); ?>">
				<a href="<?php echo $the_gallery[0]['img']; ?>" class="fancybox-media" data-title-id="gallery-title<?php echo $post->ID; ?>-0" rel="gallery<?php echo $post->ID; ?>">
					<div class="caption">
						<h3><?php the_title(); ?></h3>
						<span class="meta"><?php rb_get_categories($post->ID, 'gallery_category') ?></span>
					</div>
					<?php the_post_thumbnail('thumb-video'); ?>
				</a>
		        <div id="gallery-title<?php echo $post->ID; ?>-0" class="info hidden">
		          <h2><?php echo $the_gallery[0]['title']; ?></h2>
		          <div class="fancybox-desc"><?php echo $the_gallery[0]['caption']; ?></div>
		        </div>
				<?php if(sizeof($the_gallery) > 1) : ?>
					<div class="hidden">
						<?php for($k = 1; $k < sizeof($the_gallery); $k++) : ?>
							<a href="<?php echo $the_gallery[$k]['img']; ?>" class="fancybox-media" rel="gallery<?php echo $post->ID; ?>" data-title-id="gallery-title<?php echo $post->ID; ?>-<?php echo $k; ?>">img</a>
					        <div id="gallery-title<?php echo $post->ID; ?>-<?php echo $k; ?>" class="info hidden">
					          <h2><?php echo $the_gallery[$k]['title']; ?></h2>
					          <div class="fancybox-desc"><?php echo $the_gallery[$k]['caption']; ?></div>
					        </div>
						<?php endfor; ?>
					</div>
				<?php endif; ?>
			</li>

			<?php endwhile; ?>

		</ul>

	</div>

	<?php get_footer(); ?>