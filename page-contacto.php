<?php
/**
 * The contact template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sk8spotsmx
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content', 'page' );
			endwhile; // End of the loop.
			?>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-lg-8 ml-auto mr-auto">
						
						<form action="/sendmail" method="post" id="contactForm">
							<div class="form-group">
								<input type="text" name="nombre" class="form-control" placeholder="Nombre*" data-validate="required">
							</div>
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Email*" data-validate="required|email">
							</div>
							<div class="form-group">
								<input type="text" name="asunto" class="form-control" placeholder="Asunto" >
							</div>
							<div class="form-group">
								<textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje" cols="30" rows="10"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" name="enviar" value="ENVIAR" class="btn btn-primary">
							</div>
							<div class="sent_mail_alert text-center">🤙🏼😎<br>Tu mensaje ha sido enviado con éxito, nos pondremos en contacto contigo a la brevedad.</div>
						</form>

					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
