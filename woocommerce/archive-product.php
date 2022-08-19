<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
get_header( 'shop' );
global $wp_query;
$page_id = wc_get_page_id('shop');
$wntr_sidebar_position = get_post_meta($page_id, 'wntr_sidebar_position', true);
if(isset($wntr_sidebar_position) && $wntr_sidebar_position == 'left'){
$div_class = 'left-sidebar';
}elseif(isset($wntr_sidebar_position) && $wntr_sidebar_position == 'right'){
$div_class = 'right-sidebar';
}elseif(isset($wntr_sidebar_position) && $wntr_sidebar_position == 'full'){
$div_class = 'full-width';
}else{
$div_class = wntr_sidebar_position();
} ?>

<div class="main-content-inner <?php esc_attr($div_class); ?>" >
	<div id="main-content" class="main-content <?php echo esc_attr(wntr_page_layout()); ?> <?php echo esc_attr($div_class); ?>">
		<?php if (get_option('wntr_page_sidebar') == 'yes') : ?>
		<div class="content-area">
			<?php else : ?>
			<div class="main-content-inner-full">
				<?php endif; ?>
				<?php
					/**
					* woocommerce_before_main_content hook
					*
					* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					* @hooked woocommerce_breadcrumb - 20
					*/
					do_action( 'woocommerce_before_main_content' );
				?>
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
				<div class="page-title">
					<div class="page-title-inner">
						<h3 class="entry-title-main"><?php woocommerce_page_title(); ?></h3>
					</div>
				</div>
				<?php endif;  ?>
				<?php do_action( 'woocommerce_archive_description' ); ?>
				<?php
				if ( have_posts() ) {
					/**
				* Hook: woocommerce_before_shop_loop.
					*
				* @hooked wc_print_notices - 10
					* @hooked woocommerce_result_count - 20
					* @hooked woocommerce_catalog_ordering - 30
					*/
					do_action( 'woocommerce_before_shop_loop' );
				woocommerce_product_loop_start();
				if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
				the_post();
				/**
				* Hook: woocommerce_shop_loop.
				*
				* @hooked WC_Structured_Data::generate_product_data() - 10
				*/
				do_action( 'woocommerce_shop_loop' );
				wc_get_template_part( 'content', 'product' );
				}
				}
				woocommerce_product_loop_end();
					/**
				* Hook: woocommerce_after_shop_loop.
					*
					* @hooked woocommerce_pagination - 10
					*/
					do_action( 'woocommerce_after_shop_loop' );
				} else {
				/**
				* Hook: woocommerce_no_products_found.
				*
				* @hooked wc_no_products_found - 10
				*/
				do_action( 'woocommerce_no_products_found' );
				}
				/**
				* Hook: woocommerce_after_main_content.
				*
				* @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				*/
				do_action( 'woocommerce_after_main_content' );
				if (get_option('wntr_page_sidebar') == 'yes'){
				/**
				* Hook: woocommerce_sidebar.
				*
				* @hooked woocommerce_get_sidebar - 10
				*/
				do_action( 'woocommerce_sidebar' );
				}
				?>
			</div>
		</div>
	</div>
	<?php get_footer( 'shop' ); ?>