<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;
// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php post_class(); ?>>
 <span class="product-loading"></span>
	<div class="container-inner">
		<div class="product-block-inner">
			<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
			<div class="image-block">	<a href="<?php esc_url(the_permalink()); ?>">
				<?php
					/**
					 * woocommerce_before_shop_loop_item_title hook
					 *
					 * @hooked woocommerce_show_product_loop_sale_flash - 10
					 * @hooked woocommerce_template_loop_product_thumbnail - 10
					 */
					do_action( 'woocommerce_before_shop_loop_item_title' );
				?>
				</a></div><div class="product-detail-wrapper">
				
			<a href="<?php esc_url(the_permalink()); ?>"><h3 class="product-name"><?php the_title(); ?></h3></a>
			<?php
					/**
					 * woocommerce_after_shop_loop_item_title hook
					 *
					 * @hooked woocommerce_template_loop_rating - 5
					 * @hooked woocommerce_template_loop_price - 10 
					 */
					 do_action( 'woocommerce_after_shop_loop_item_title' );
				?>
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
			
			<div class="pro-btn"></div><div class="product-block-outer"><div class="product-block-hover"></div></div>
			</div>
		</div>
	</div>
</li>