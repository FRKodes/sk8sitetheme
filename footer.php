<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3 mr-auto redes-footer">
					<h3>SÍGUENOS EN REDES</h3>
					<ul>
						<li><a class="icon-fb" target="_blank" href="https://www.facebook.com/sk8SpotsMx"></a></li>
						<li><a class="icon-tw" target="_blank" href="https://twitter.com/Sk8SpotsMx"></a></li>
						<li><a class="icon-ig" target="_blank" href="https://www.instagram.com/sk8spotsmx/"></a></li>
						<li><a class="icon-yt" target="_blank" href="https://www.youtube.com/channel/UCh_POGdpvel-NML9LJQkWmg?sub_confirmation=1"></a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-md-3 logo-footer">
					<a href="/" title="Volver al home">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sk8spotsmx-white.png" alt="sk8spotsmx Logo">
					</a>
				</div>
				<div class="col-xs-12 col-md-3 ml-auto newsletter-footer">
					<h3>LAS MEJORES NOTICIAS EN TU CORREO</h3>
					<div id="mc_embed_signup">
						<form action="https://sk8spots.us19.list-manage.com/subscribe/post?u=67321d89b5272443b5ab943e4&amp;id=2553ebd96f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll" class="form-group">
								<input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="Pon aquí tu correo ;)" required>
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_67321d89b5272443b5ab943e4_2553ebd96f" tabindex="-1" value=""></div>
							</div>
							<div class="form-group">
								<input type="submit" value="SUSCRIBIRME" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
		

	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>
	
</div><!-- #page -->

<?php wp_footer(); ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</body>
</html>
