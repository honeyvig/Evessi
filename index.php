<?php
/*
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Pixeltemplate
 * @since Pixeltemplate 1.0
 */
get_header(); ?>
<div id="main-content" class="main-content blog-page blog-list <?php echo esc_attr(wntr_sidebar_position()); ?> <?php echo esc_attr(wntr_page_layout()); ?>">
	<?php if (get_option('wntr_page_sidebar') == 'yes') : ?>
<div id="primary" class="content-area col-md-9 col-sm-8">
<?php else : ?>
<div id="primary" class="main-content-inner-full">
<?php endif; ?>
<div class="page-title"><div class="page-title-inner">
	<h1 class="entry-title-main">
	<?php	    
			if(wntr_is_blog()){  
				 esc_html_e( 'All Blog', 'firezy' ); 
			}else if(is_search()) { 
				printf( esc_html__( 'Search Results for: "%s"', 'Evessi' ), get_search_query() ); 
			}else {
				    the_title();
			}
		?>
	</h1>
	<?php wntr_breadcrumbs(); ?></div>
</div>
<div id="content" class="site-content" role="main">
	<div class="blog">
      <?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				endwhile;
				// Previous/next post navigation.
				
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );
			endif;
		?>
     </div>
		<?php the_posts_pagination();?>
    <!-- #content -->
  </div><!-- #primary -->
  </div>
<?php
if (get_option('wntr_page_sidebar') == 'yes') : 
	get_sidebar( 'content' );
	get_sidebar();
endif;  ?>
</div><!-- #main-content -->
<?php 
get_footer(); ?>