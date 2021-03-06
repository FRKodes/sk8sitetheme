<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-60609625-2"></script>
<meta name="google-site-verification" content="E04iBql2ry9aAtZXcrBIHUv_v8Y2GxTY8UIgM61fnZ4" />
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-60609625-2');
</script>
<link rel="icon" type="image/png" href="/sk8-favicon.png">
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">

	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' );
		?>

	</header><!-- #masthead -->
	
	<?php 
	if (is_front_page()) {
		$args = array('post_type' => 'banner', 'post_status' => 'publish', 'posts_per_page' => 1 );
		$loop = new WP_Query( $args ); 
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="main-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
				<div class="line-credits">
					<div class="skater">
						<b class="mayus"><?php echo get_field('truco'); ?></b> - <a target="_blank" title="Ver el perfil de <?php echo get_field('nombre_skater'); ?>" href="<?php echo get_field('link_skater'); ?>"><?php echo get_field('nombre_skater'); ?></a>
					</div>
					<div class="photographer">
						<b>Foto: </b><a target="_blank" title="Ver el perfil de <?php echo get_field('nombre_fotografo'); ?>" href="<?php echo get_field('link_fotografo'); ?>"><?php echo get_field('nombre_fotografo'); ?></a>
					</div>
				</div>
			</div><?php
		endwhile;
		wp_reset_postdata();
	}

	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
