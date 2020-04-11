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
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-6490955290269477"
		     data-ad-slot="1652665079"
		     data-ad-format="auto"
		     data-full-width-responsive="true"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>

</div><!-- #secondary -->
