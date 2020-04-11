<?php
/**
 * The loop template file.
 *
 * Included on pages like index.php, archive.php and search.php to display a loop of posts
 * Learn more: https://codex.wordpress.org/The_Loop
 *
 * @package sk8spotsmx
 */

do_action( 'storefront_loop_before' );


$counter = 0;
while ( have_posts() ) :
	the_post();

	/**
	 * Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */
	get_template_part( 'content', get_post_format() );

	$counter++;
	if($counter == 6  || $counter == 12){ ?>
		<div class="col-xs-12 col-md-12 text-center">
			<div class="banner-google-container-feed">
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-6490955290269477"
				     data-ad-slot="1652665079"
				     data-ad-format="auto"
				     data-full-width-responsive="true"></ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
			</div>
		</div><?php
	}

endwhile;

/**
 * Functions hooked in to storefront_paging_nav action
 *
 * @hooked storefront_paging_nav - 10
 */
do_action( 'storefront_loop_after' );
