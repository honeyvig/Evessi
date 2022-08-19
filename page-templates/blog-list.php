<?php  /* Template Name: Blog List */  ?>
<?php get_header(); 
$wntr_content_position = wntr_content_position();
?>
<!-- Start blog-list -->
<div id="main-content" class="main-content blog-page blog-list  <?php echo esc_attr(wntr_sidebar_position()); ?>">
<div id="primary" class="content-area col-md-9 col-sm-8">
<div class="page-title"><div class="page-title-inner"><h1 class="entry-title-main"><?php  the_title();?></h1>
  <?php wntr_breadcrumbs(); ?></div>
  </div>
    <div id="content" class="site-content" role="main">
  <div id="container" class="blog-list-container">
        <?php if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }     
      wp_reset_postdata();  // re-sets query
        $last_class = "";
        $blog_args = array(
          'posts_per_page'  => wntr_blog_list_posts_per_page(), 
          'paged'       => $paged,
          'post_type'     => 'post',
          'status'      => 'publish',
        );
        $wp_query = new WP_Query();
          $wp_query->query( $blog_args );
        if ( $wp_query->have_posts() ): ?>
        <?php 
        while( $wp_query->have_posts() ): $wp_query->the_post(); ?>
        <div class="item">
          <?php  $post_format = get_post_format();
          get_template_part( 'content', $post_format );
        ?>
        </div>
        <?php endwhile; ?>
        <?php else: ?>
        <p>
          <?php  esc_html_e( 'Sorry, no posts matched your criteria.', 'Evessi' ); ?>
        </p>
        <?php endif;
         ?>
        <?php // Post navigation.
         the_posts_pagination();
         wp_reset_postdata();  ?>
      </div>
      <?php if($wntr_content_position == 'below') : 
        // Page thumbnail
        wntr_post_thumbnail();
        the_content(); 
      endif; ?>
    </div><!-- #content -->
  </div><!-- #primary -->
<?php 
  get_sidebar();
  ?>
</div>
<!-- End blog-list -->
<?php get_footer(); ?>