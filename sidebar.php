<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package storefront
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<div class="banner-google-container-sidebar">
		<script data-ad-client="ca-pub-6490955290269477" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</div>

</div><!-- #secondary -->
