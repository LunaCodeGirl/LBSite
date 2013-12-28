<?php get_header(); ?>

<section class="small_banner">
<?php get_template_part('template-part-small-banner','childtheme'); ?>
</section>

<section id="content-container" class="clearfix">
  <div id="main-wrap" class="clearfix">
  <?php get_template_part('template-part-page-banner','childtheme');
  if(have_posts()) : while(have_posts()) : the_post(); the_content(); truethemes_link_pages(); endwhile;endif; ?>
  <?php get_template_part('template-part-inline-editing','childtheme'); ?>
  </div><!-- END main-wrap -->   
<?php get_footer(); ?>