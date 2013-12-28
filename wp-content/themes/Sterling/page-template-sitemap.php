<?php
/*
Template Name: Sitemap
*/
?>
<?php get_header(); ?>

<section class="small_banner">
<?php get_template_part('template-part-small-banner','childtheme'); ?>
</section>

<section id="content-container" class="clearfix">
<div id="main-wrap" class="clearfix">
<?php get_template_part('template-part-page-banner','childtheme'); ?>
  <div class="sitemap-col s-one">
    <p class="sitemap-title"><?php _e('Pages List', 'framework_localize') ?></p>
    <ul>
      <?php wp_nav_menu( array('container' => false, 'theme_location' => 'Main Menu','depth' => 0 )); ?>
    </ul>
  </div><!-- END sitemap-col -->
  
  <div class="sitemap-col s-two">
    <p class="sitemap-title"><?php _e('Latest Blog Posts', 'framework_localize') ?></p>
    <?php echo do_shortcode('[hardcode_blog_posts count="3" character_count="150" post_category=""]'); ?>
  </div><!-- END sitemap-col -->
  
  
  <div class="sitemap-col s-three">
    <p class="sitemap-title"><?php _e('Blog Archives', 'framework_localize') ?></p>
    <ul>
      <?php wp_get_archives('type=monthly&show_post_count=true'); ?>
    </ul>
  </div><!-- END sitemap-col -->
</div><!-- END main-wrap -->
    
<?php get_footer(); ?>