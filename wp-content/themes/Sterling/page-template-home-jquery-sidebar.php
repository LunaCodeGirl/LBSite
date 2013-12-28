<?php
/*
Template Name: Homepage - jQuery + Sidebar
*/
?>
<?php get_header(); ?>

<section class="banner-slider">
	<div class="center-wrap">
    <div id="slides">
    	<div class="slides_container">      
      <?php get_template_part('template-part-home-slider','childtheme'); ?>    
      </div><!-- END slides_container -->
		</div><!-- END slides -->
	</div><!-- END center-wrap --> 
<div class="shadow top"></div>
<div class="shadow bottom"></div>
<div class="tt-overlay"></div>
</section>

<section id="content-container" class="clearfix">   
  <div id="main-wrap" class="main-wrap-slider clearfix">
    <div class="two_thirds">
      <?php wp_reset_query(); if(have_posts()) : while(have_posts()) : the_post(); the_content(); truethemes_link_pages(); endwhile;endif; ?>
      <?php get_template_part('template-part-inline-editing','childtheme'); ?>
    </div><!-- END two_thirds -->   
    
    <div class="one_third">
      <div class="home-vertical-sidebar">
    <?php dynamic_sidebar("Homepage Sidebar"); ?>
      </div><!-- END home-vertical-sidebar -->
    </div><!-- END one_third -->   
  </div><!-- END main-wrap -->

<?php get_footer(); ?>