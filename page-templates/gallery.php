<?php
/* Template Name: Gallery */ 
?>
<?php get_header(); ?>
<!--Start gallery-page-->
<div id="main-content" class="main-content blog-page blog-filter <?php echo esc_attr(wntr_sidebar_position()); ?>">	
 	<?php if (get_option('wntr_page_sidebar') == 'yes') : ?>
	<div class="content-area">
	<?php else : ?>
	<div class="main-content-inner-full">
	<?php endif; ?>
	<div class="page-title"><div class="page-title-inner"><h3 class="entry-title-main"><?php  the_title();?></h3>
	<?php wntr_breadcrumbs(); ?></div>
	</div>
    <div id="content" class="site-content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
       <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
  </div><!-- #primary -->
<?php 
  	if (get_option('wntr_page_sidebar') == 'yes') : 
	get_sidebar();
endif;  ?>
</div><!-- End blog-filter -->
<?php get_footer(); ?>