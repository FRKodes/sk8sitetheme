<?php
/**
 * Template used to display post content.
 *
 * @package sk8spotsmx
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-photo" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
		<a href="<?php the_permalink() ?>"></a>
	</div>
	<div class="post-info">
		<div class="post-title">
			<a class="bold" href="<?php the_permalink() ?>">
				<?php the_title() ?>
			</a>
		</div>
		<div class="post-description">
			<a href="<?php the_permalink() ?>">
				<i><?php the_excerpt() ?></i>
			</a>
		</div>
	</div>
	<?php
	/**
	 * Functions hooked in to storefront_loop_post action.
	 *
	 * @hooked storefront_post_header          - 10
	 * @hooked storefront_post_content         - 30
	 */
	// do_action( 'storefront_loop_post' );
	?>

</article><!-- #post-## -->
