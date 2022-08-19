<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Pixeltemplate
 * @since Pixeltemplate 1.0
 */
get_header(); ?>

<div class="main-content-inner">	
<?php if (get_option('wntr_page_sidebar') == 'yes') : ?>
<div id="primary" class="content-area col-md-9 col-sm-8">
<?php else : ?>
<div id="primary" class="main-content-inner-full">
<?php endif; ?>
<div class="page-title"><div class="page-title-inner"><?php the_archive_title( '<h1 class="entry-title-main">', '</h1>' ); ?><?php wntr_breadcrumbs(); ?></div></div>
  <div id="content" class="site-content" role="main">
    <div class="page-content">
      <p>
        <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'Evessi' ); ?>
      </p>
      <?php get_search_form(); ?>
    </div><!-- .page-content -->
  </div><!-- #content -->
</div><!-- #primary -->
<?php
if (get_option('wntr_page_sidebar') == 'yes') : 
	get_sidebar( 'content' );
	get_sidebar();
endif;  ?>
<?php get_footer(); ?>