<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
	wp_dequeue_style( 'storefront-style' );
	wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

function sk8_enqueue_styles() {
	// wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/sk8-styles.css', array(), 999);
	wp_enqueue_style('bootstrap-styles', get_stylesheet_directory_uri() .'/assets/css/bootstrap.css', array(), 1);
	wp_enqueue_style('sk8-styles', get_stylesheet_directory_uri() .'/assets/css/main.css', array(), 10);
	
	
}
add_action('wp_enqueue_scripts', 'sk8_enqueue_styles');


function sk8_remove_actions_parent_theme() {
   remove_action('storefront_header', 'storefront_secondary_navigation', 30);
   remove_action('storefront_header', 'storefront_product_search', 40);
   remove_action('storefront_header', 'storefront_header_cart', 60);
   remove_action('storefront_header', 'storefront_header_container_close', 41);
   remove_action('storefront_header', 'storefront_primary_navigation_wrapper', 42);
   // remove_action('storefront_footer', 'storefront_credit', 20);
};

add_action( 'init', 'sk8_remove_actions_parent_theme', 1);


/*
* Creating a function to create our CPT
*/
 
function banner_post_type() {
	$labels = array(
		'name'                => _x( 'Banners', 'Post Type General Name' ),
		'singular_name'       => _x( 'Banner', 'Post Type Singular Name' ),
		'menu_name'           => __( 'Banners' ),
		'parent_item_colon'   => __( 'Parent Banner' ),
		'all_items'           => __( 'Todos los Banners' ),
		'view_item'           => __( 'Ver Banner' ),
		'add_new_item'        => __( 'Agregar Nuevo Banner' ),
		'add_new'             => __( 'Agregar Nuevo' ),
		'edit_item'           => __( 'Editar Banner' ),
		'update_item'         => __( 'Actualizar Banner' ),
		'search_items'        => __( 'Buscar Banner' ),
		'not_found'           => __( 'No encontrado' ),
		'not_found_in_trash'  => __( 'No encontrado en el Basurero' ),
	);
	 
	$args = array(
		'label'               => __( 'banners' ),
		'description'         => __( 'Banners del home' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'author', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'categorias' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
 
	);
	 
	// Registering your Custom Post Type
	register_post_type( 'banner', $args );
 
}
 
add_action( 'init', 'banner_post_type', 0 );




if ( ! function_exists( 'storefront_site_branding' ) ) {
	/**
	 * Site branding wrapper and display
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_site_branding() {
		?>
		<div class="site-branding">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sk8spotsmx.png" alt="sk8spotsmx Logo">
		</div>
		<?php
	}
}