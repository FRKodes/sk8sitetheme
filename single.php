<?php
/**
 * The template for displaying all single posts.
 *
 * @package sk8spotsmx
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php
		while ( have_posts() ) :
			the_post();

			do_action( 'storefront_single_post_before' );

			get_template_part( 'content', 'single' );

			do_action( 'storefront_single_post_after' );

		endwhile; // End of the loop.
		?>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 text-center" style="margin-top: 40px;">
					<div class="banner-google-container-feed">
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-6490955290269477"
						     data-ad-slot="1652665079"
						     data-ad-format="auto"
						     data-full-width-responsive="true"></ins>
						<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
					</div>
				</div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
do_action( 'storefront_sidebar' );
get_footer();
