<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Pixeltemplate
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,user-scalable=no">
<link rel="profile" href="https://gmpg.org/xfn/11"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>


 <?php wp_head();?> 
</head>
<body <?php body_class(); ?>>
	<div class="preloader"></div>
<?php if ( get_option('wntr_control_panel') == 'yes' ) do_action('wntr_show_panel'); ?>
<div id="page" class="hfeed site">
<?php if ( get_header_image() ) : ?>
<div id="site-header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php echo esc_attr_e('Siteheader','Evessi'); ?>"> </a> </div>
<?php endif; ?>
<!-- Header -->

<header id="masthead" class="site-header  site-header-fix <?php echo "header".esc_attr(get_option('wntr_header_layout'));  ?> <?php echo esc_attr(wntr_sidebar_position()); ?>">
	<div class="header-main header-fix">
		
		
		<div class="header-top">
			<div class="theme-container">

				<div class="wntr-topbar-menu-links">

					<!-- top bar contact -->
					<?php if (get_option('wntr_show_topbar_contact') == 'yes') : ?>
					<?php wntr_service_contact() ?>
					<?php endif; ?> 

					<div class="topbar-menu-toggle"></div>
					
					<?php if (is_active_sidebar('header-currency')) : ?>
					<div class="header-currency">
						<div class="header-toggle"></div>
						<?php wntr_get_widget('header-currency');  ?>
					</div>
					<?php endif; ?>	
				</div>
				<div class="header-left">
					<!-- Header LOGO-->
					<div class="header-logo">
						<?php if (get_option('wntr_logo_image') != '') : ?>
						<span class="site-icon">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
								<?php wntr_get_logo(); ?>
							</a>
						</span>
						<?php endif; ?>
						<?php if(get_option('wntr_showsite_description') == 'yes') : ?>
						<h2 class="site-description">
						<?php bloginfo( 'description' ); ?>
						</h2>
						<?php endif; // End wntr_showsite_description ?>
					</div>
					<!-- Header Mob LOGO-->
					<div class="header-mob-logo">
						<?php if (get_option('wntr_mob_logo_image') != '') : ?>
						<span class="site-icon">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
								<?php wntr_get_mob_logo(); ?>
							</a>
						</span>
						<?php endif; ?>
						<?php if(get_option('wntr_showsite_description') == 'yes') : ?>
						<h2 class="site-description">
						<?php bloginfo( 'description' ); ?>
						</h2>
						<?php endif; // End wntr_showsite_description ?>
					</div>
				</div>

				<div class="header-right">

					
					<?php if (is_active_sidebar('header-search')) : ?>
					<div class="header-search">
						<div class="header-toggle"></div>
						<div class="search-overlay">
						<?php wntr_get_widget('header-search');  ?>
						</div>
					</div>

					<div class="account-cart">
						
						<!-- account -->
						<?php if ( has_nav_menu('account-menu') ) { ?>
						<div class="topbar-link">
							<p class="account-block"><span class="account-label"><?php echo esc_attr_e('sign in','Evessi'); ?></span></p>
							<div class="topbar-link-wrapper">
								<div class="account-menu-links">
									<?php
									// Woo commerce Header Cart
									$wntr_header_menu =array(
									'menu' => esc_html__('wt Acount Links','Evessi'),
									'depth'=> 1,
									'echo' => false,
									'menu_class'      => 'account-menu',
									'container'       => '',
									'container_class' => '',
									'theme_location' => 'account-menu'
									);
										echo wp_nav_menu($wntr_header_menu);
									?>
									<?php
									$logout_url = '';
									if ( is_user_logged_in() ) {
										$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
										if ( $myaccount_page_id ) {
										$logout_url = wp_logout_url( get_permalink( $myaccount_page_id ) );
										if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )
										if (is_ssl()) {
										$logout_url = str_replace( 'http:', 'https:', $logout_url );
										}
									} ?>
									<a class="login-out" href="<?php echo esc_url($logout_url); ?>" ><?php echo esc_attr_e('Logout','Evessi'); ?></a>
									<?php }
									else { ?>
									<a class="login-out" href="<?php echo  get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php echo esc_attr_e('User Login','Evessi'); ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
						<?php }else if(in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )){ ?>
						 <div class="topbar-link">
							<p class="account-block"><span class="account-label"><?php echo esc_attr_e('sign in','Evessi'); ?></span></p>
							<div class="topbar-link-wrapper">
								<div class="account-menu-links">
									<?php
									// Woo commerce Header Cart
									$wntr_header_menu =array(
									'menu' => esc_html__('wt Acount Links','Evessi'),
									'depth'=> 1,
									'echo' => false,
									'menu_class'      => 'account-menu',
									'container'       => '',
									'container_class' => '',
									'theme_location' => 'account-menu'
									);
										echo wp_nav_menu($wntr_header_menu);
									?>
									<?php
									$logout_url = '';
									if ( is_user_logged_in() ) {
										$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
										if ( $myaccount_page_id ) {
										$logout_url = wp_logout_url( get_permalink( $myaccount_page_id ) );
										if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )
										if (is_ssl()) {
										$logout_url = str_replace( 'http:', 'https:', $logout_url );
										}
									} ?>
									<a class="login-out" href="<?php echo esc_url($logout_url); ?>" ><?php echo esc_attr_e('Logout','Evessi'); ?></a>
									<?php }
									else { ?>
									<a class="login-out" href="<?php echo  get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php echo esc_attr_e('User Login','Evessi'); ?></a>
									<?php } ?>
								</div>
							</div>
						</div>

						<?php } ?>
					</div>


					<?php else : 
					if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ){?>
						<div class="header-search">
							<div class="header-toggle"></div>
							<form method="get" class="woocommerce-product-search" action="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
							<div class="product-search-widget">
							    <select class="orderby" name="product_cat">
								<?php  	
								
											$taxonomy     = 'product_cat';
											  $orderby      = 'name';  
											  $show_count   = 0;      // 1 for yes, 0 for no
											  $pad_counts   = 0;      // 1 for yes, 0 for no
											  $hierarchical = 1;      // 1 for yes, 0 for no  
											  $title        = '';  
											  $empty        = 0;	
									
											 $args = array(
												 'taxonomy'     => $taxonomy,
												 'orderby'      => $orderby,
												 'show_count'   => $show_count,
												 'pad_counts'   => $pad_counts,
												 'hierarchical' => $hierarchical,
												 'title_li'     => $title,
												 'hide_empty'   => $empty
										  );
											$all_categories = get_categories( $args ); ?>
												<option value="<?php echo esc_attr_e( '', 'Evessi' );?>" selected="selected"><?php echo esc_attr_e( 'All Categories', 'Evessi' ); ?></option>
										<?php foreach ($all_categories as $cat) {   ?>
												<option value="<?php echo esc_attr($cat->slug); ?>" <?php if(isset($_GET['product_cat']) && $_GET['product_cat'] == $cat->slug){ echo esc_attr("selected='selected'");  } ?>><?php echo esc_html($cat->name);?></option>
										<?php } ?>
								</select>    
								<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'Evessi' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'Evessi' ); ?>" />
								<input type="hidden" name="post_type" value="product" />
								</div>
								<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'Evessi' ); ?>" />
							</form>
						</div>
					<?php } ?>
					<?php endif; ?>

					<div class="shop-cart">
						<!--Cart -->
						<?php
							// Woo commerce Header Cart
						if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && is_active_sidebar('header-widget') ) { ?>
						<div class="header-cart">
							<div class="cart-item togg">
								<?php global $woocommerce;
								ob_start();?>
								<div class="shopping_cart tog" title="<?php esc_attr_e('View your shopping cart', 'Evessi'); ?>">
									<div class="cart-qty">
										<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'Evessi'); ?>"><span class="quanitity"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'Evessi'), $woocommerce->cart->cart_contents_count);?></span><span><?php echo WC()->cart->get_cart_subtotal(); ?></span></a>
									</div>
								</div>
								<?php global $woocommerce; ?>
								<?php wntr_get_widget('header-widget'); ?>
							</div>
						</div>
						<?php }else if(in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )){ ?>
						<div class="header-cart">
							<div class="cart-item">
								<?php global $woocommerce;
								ob_start();?>
								<div class="shopping_cart tog" title="<?php esc_attr_e('View your shopping cart', 'Evessi'); ?>">
									<div class="cart-qty">
										<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'Evessi'); ?>"><span class="quanitity"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'Evessi'), $woocommerce->cart->cart_contents_count);?></span><span><?php echo WC()->cart->get_cart_subtotal(); ?></span></a>
									</div>
								</div>
								<?php global $woocommerce; ?>
								<?php wntr_get_widget('header-widget'); ?>
							</div>
						</div>

						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<div class="header-bottom">
			
							<!-- #site-navigation -->
				<div class="theme-container">
				<nav id="site-navigation" class="navigation-bar main-navigation">
					<h3 class="menu-toggle"><?php esc_html_e( 'Menu', 'Evessi' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'Evessi' ); ?>"><?php esc_html_e( 'Skip to content', 'Evessi' ); ?></a>
					<div class="mega-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'megamenu','menu_class' => 'mega' ) ); ?>
					</div>
					<div class="mobile-menu">
						<h3 class="mob-toggle"><?php esc_html_e( 'Menu', 'Evessi' ); ?></h3><span class="close-menu"></span>
						<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'mobile-menu-inner') ); ?>
					</div>
				</nav>
				</div>

		</div>
		
		
	</div>
</header>
<?php
	$wntr_page_layout = wntr_page_layout();
	if( isset( $wntr_page_layout) && !empty( $wntr_page_layout ) ):
	$wntr_page_layout = $wntr_page_layout;
	else:
	$wntr_page_layout = '';
	endif;
?>
<?php
$shop = '0';
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	if(is_shop())
		$wntr_page_layout = 'wide-page';
		$shop = '1';
	endif;
?>
<div id="main" class="site-main <?php if (get_option('wntr_show_topbar') == 'yes') echo "extra"; ?>">
	<div class="main_inner">
		<div class="main-inner-container">
		</div>
		<?php
			$wntr_page_layout = wntr_page_layout();
			if( isset( $wntr_page_layout) && !empty( $wntr_page_layout ) ):
			$wntr_page_layout = $wntr_page_layout;
			else:
			$wntr_page_layout = '';
			endif;
		if ( $wntr_page_layout == 'wide-page' ) : ?>
		<div class="main-content-inner-full">
			<?php else:
			if(is_archive() || is_tag() || is_404()) : ?>
			<div class="main-content">
				<?php else : ?>
				<div class="main-content-inner  <?php echo esc_attr(wntr_sidebar_position()); ?>">
					<?php endif; ?>
					<?php endif; ?>