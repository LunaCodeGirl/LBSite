<?php get_header(); ?>

<?php
global $ttso;
$error_message = stripslashes($ttso->st_404message);
?>

<section class="small_banner">
<?php get_template_part('template-part-small-banner','childtheme'); ?>
</section>

<section id="content-container" class="clearfix">  
  <div id="main-wrap" class="clearfix">
    <div class="page-not-found clearfix">
      <?php echo $error_message; ?>
    </div><!-- END page-not-found -->
  </div><!-- END main-wrap -->

<?php get_footer(); ?>