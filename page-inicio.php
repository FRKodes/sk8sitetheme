<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php
			$args = array('post_type'=> 'post', 'post_status' => 'publish', 'posts_per_page' => 12, 'order'    => 'DESC');?>
			<div class="container last-news-container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<h2 class="title">ÚLTIMAS NOTICIAS</h2>
					</div>	
				</div>

		    	<div class="row"><?php
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();?>
						<div class="col-xs-12 col-md-6 col-lg-4 item-news">
							<div class="inner-container">
								<div class="image"></div>
								<div class="info">
									<h3 class="title"><?php echo get_the_title() ?></h3>
								</div>
							</div>
						</div><?php
					} 
				}
				wp_reset_postdata();?>
				</div>	
			</div>

		<?php
		if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
