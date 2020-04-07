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
						<h1 class="title text-center bold">ÚLTIMAS NOTICIAS</h1>
					</div>	
				</div>

		    	<div class="row"><?php
				$the_query = new WP_Query( $args );
				$counter = 0;
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$counter++;
						$the_query->the_post();
						if($counter == 7 ){ ?>
							<div class="col-xs-12 col-md-12 text-center">
								<div class="banner-google-container-feed">
									<script data-ad-client="ca-pub-6490955290269477" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								</div>
							</div><?php
						}?>
						<div class="col-xs-12 col-md-6 item-news" data-counter="<?php echo $counter; ?>">
							<div class="inner-container">
								<div class="image" style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">
									<a title="Ver <?php echo get_the_title() ?>" href="<?php the_permalink() ?>"></a>
								</div>
								<div class="info">
									<h3 class="title">
										<a title="Ver <?php echo get_the_title() ?>" href="<?php the_permalink() ?>">
											<?php echo get_the_title(); ?>
										</a>
									</h3>
								</div>
							</div>
						</div><?php
					} 
				}
				wp_reset_postdata();?>
				
				<div class="col-xs-12 col-md-12 text-center">
					<div class="banner-google-container-feed">
						<script data-ad-client="ca-pub-6490955290269477" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					</div>
				</div>

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
