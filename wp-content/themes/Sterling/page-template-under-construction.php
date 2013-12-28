<?php
/*
Template Name: Under Construction
*/
?>
<?php get_header(); ?>

<body <?php body_class(); ?> <?php if (is_page_template('page-template-under-construction.php')){echo 'id="construction-body"';}?>>
<?php 

global $ttso;
$construction_main = stripslashes($ttso->st_construction_main);
$construction_year = $ttso->st_construction_year;
$construction_month = $ttso->st_construction_month;
$construction_day = $ttso->st_construction_day;
?>

<script type="text/javascript">
year = <?php echo $construction_year; ?>; month = <?php echo $construction_month; ?>; day = <?php echo $construction_day; ?>; hour= 18; min= 0; sec= 0;
</script>
<div class="construction-top-wrap clearfix">
    <div class="center-wrap">
        <h1 class="construction-heading"><?php echo $construction_main; ?></h1>
        <div id="countbox"></div><!-- END countbox -->
        
        <div class="time-info-wrap">
            <div id="days_text">Days</div>
            <div id="hours_text">Hours</div>
            <div id="mins_text">Minutes</div>
            <div id="secs_text">Seconds</div>
        </div><!-- END time-info-wrap -->   
    </div><!-- END center-wrap -->
</div><!-- end construction-top-wrap -->

<div class="construction-socialize">
<?php dynamic_sidebar("Under Construction Socialize"); ?>
</div><!-- END construction-socialize -->

<?php get_footer(); ?>