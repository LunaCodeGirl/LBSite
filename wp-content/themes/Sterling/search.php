<?php get_header(); ?>

<section class="small_banner">
<?php get_template_part('template-part-small-banner','childtheme'); ?>
</section>

<section id="content-container" class="clearfix">	
<div id="main-wrap" class="clearfix">
	<div class="page_content">
    <ol class="search-list">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
      <li><strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></strong><br />
      <?php
			ob_start();
			the_content();
			$old_content = ob_get_clean();
			$new_content = strip_tags($old_content);
			echo substr($new_content,0,300).'...';
			?>
			</li>
			
			<?php endwhile; echo '</ol>'; else: ?>
      
			<?php global $ttso; $tt_results_fallback = stripslashes($ttso->st_results_fallback); echo $tt_results_fallback; ?>
			<?php endif; ?>
      
        
      
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		</div><!-- end of page_content-->
    
		<aside class="sidebar right-sidebar">
			<?php generated_dynamic_sidebar("Search Results Sidebar"); ?>
		</aside><!-- end sidebar-->	
</div><!-- END main-wrap -->
<?php get_footer(); ?>