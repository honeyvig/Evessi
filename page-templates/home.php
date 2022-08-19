<?php
/* Template Name: Home */ 
?>
<?php 
get_header();
?>
<div id="main-content" class="main-content home-page <?php echo esc_attr(wntr_sidebar_position()); ?> <?php echo esc_attr(wntr_page_layout()); ?> ">
<?php if (get_option('wntr_home_sidebar') == 'yes') : ?>
<div id="primary" class="content-area col-md-9 col-sm-8">
<?php else : ?>
<div id="primary" class="main-content-inner-full">
<?php endif; ?> 
    <div id="content" class="site-content" role="main">
      <?php
		// Start the Loop.
	   while ( have_posts() ) : the_post();
		// Include the page content template.
		get_template_part( 'content', 'page' ); ?>
      <?php endwhile;
			?>
    </div><!-- #content -->
</div><!-- #primary -->
   <?php 
if (get_option('wntr_home_sidebar') == 'yes') : 
	get_sidebar( 'content' );
	get_sidebar();
endif;  ?><!-- #main-content -->
</div>
<?php get_footer(); ?>