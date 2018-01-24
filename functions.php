<?php

require get_template_directory() . '/inc/cleanup.php';
// require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
// Tablas personalizadas y otras funciones
require get_template_directory() . '/inc/database.php';
// Funciiones para la reservaciones
require get_template_directory() . '/inc/reservaciones.php';
//require get_template_directory() . '/inc/core/walkernav.php';
// Crear opciones para el Template
require get_template_directory() . '/inc/opciones.php';

/**********************************************************/
/* Filtrar Tours ATRACTIVOS */
/**********************************************************/
function filtrar_tours($busqueda) {
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'tours',
		'orderby' => 'rand',
		'tax_query' => array(
			array(
				'taxonomy'	=> 'tipo-actividad',
				'field'	=> 'slug',
				'terms'		=> $busqueda,
			)
		)
	);

	$tour = new WP_Query($args);
	echo '<div id="' . $busqueda . '">';
	while($tour -> have_posts() ): $tour -> the_post();
	echo '<div class="all_box_tour_list">';
	echo '<div class="row">';
	// IMG BOX TOUR LIST
	echo '<div class="col-lg-4 col-md-4 col-sm-4">';
	echo '<div class="box_img_list">';
	echo '<a href="' .get_the_permalink() . '">';
	echo '<img src="' . get_the_post_thumbnail_url() . '">';
	echo '</a>';
	echo '</div>';
	echo '</div>';
	// CONTENT BOX TOUR LIST
	echo '<div class="col-lg-6 col-md-6 col-sm-6">';
	echo '<div class="box_content_list">';
	echo '<h3><a href="'. get_the_permalink() .'">' . get_the_title() .'</a></h3>';
	echo '<p>' . get_the_excerpt() .'</p>';
	echo '<ul class="add_info_icon">';
	echo '<li><i class="fa fa-train"></i></li>';
	echo '<li><i class="fa fa-car"></i></li>';
	echo '<li><i class="fa fa-hotel"></i></li>';
	echo '</ul>';
	echo '</div>';
	echo '</div>';
	// PRICE BOX TOUR LIST
	echo '<div class="col-lg-2 col-md-2 col-sm-2">';
	echo '<div class="box_price_list">';
	echo '<div>';
	$precioTour =  get_post_meta( get_the_ID(), 'ema_campos_tours_price', true );
	if($precioTour) {
	echo '<sup>$</sup>'. $precioTour.'*';
	}
	echo '<span class="normal_price_list">$' . $precioTour += ($precioTour * 0.15);
	echo '</span>';
	echo '<small>*Per Person</small>';
	echo '<p><a href="' .get_the_permalink() . '" class="btn_price">Ver mas</a></p>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>'; // end row
	echo '</div>'; // end all_box_tour_list
	endwhile; wp_reset_postdata();
	echo '</div>';
	/*-- Siempre q se utilize WP_Query se tiene q terminar con wp_reset_postdata */
}

/**********************************************************/
/* Menu */
/**********************************************************/
/* Enlaces
    - http://codex.wordpress.org/Function_Reference/wp_nav_menu
    - http://codex.wordpress.org/Navigation_Menus#Menus_Panel
*/
add_theme_support('menus');

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu', 'ema_theme' ),
			'social-menu' => __( 'Social Menu', 'ema_theme' ),
			'mega-menu'		=> __( 'Mega Menu', 'ema_theme' )
    )
  );
}
add_action( 'init', 'register_menus' );


/**********************************************************/
/* Thumbnails */
/**********************************************************/
/* Enlaces
    - https://codex.wordpress.org/Post_Thumbnails
    - http://codex.wordpress.org/Navigation_Menus#Menus_Panel
*/
//crear una funcion para lanzar despues del tema
function ema_setup() {
	add_theme_support( 'post-thumbnails' );
	//add_theme_support( 'title-tag' );  Agrega title a las pages


	// filtro de pagina de Atractivos
	add_image_size( 'tour_buscado', 800, 533, true );
	// Imagens de la portada de Blogs
	add_image_size( 'main_slides', 960, 500, true );
	add_image_size( 'header_img_blog', 960, 533, true );

	//Imagnes de Single tours
	add_image_size( 'single_tour_img_header', 960, 450, true );
	add_image_size( 'tour_img_portada', 320, 270, true );
	add_image_size( 'tour_img_slide', 750, 380, true );
	add_image_size( 'tab_img_description', 445, 255, true );

	// BLOG IMG
	add_image_size( 'blog_img_header', 445, 255, true );
	add_image_size( 'blog_img_list', 950, 375, true );

	// Front Page
	add_image_size( 'adv_img_big', 575, 580, true );
	add_image_size( 'adv_img_small', 280, 285, true );

}
add_action( 'after_setup_theme', 'ema_setup' );

function ema_custom_logo() {
	$logo = array (
		'width'	=> 160,
		'height' => 34
	);
	add_theme_support( 'custom-logo', $logo );
}
add_action( 'after_setup_theme', 'ema_custom_logo' );

/**********************************************************/
/* Wiggets */
/**********************************************************/
function ematours_widgets() {
	register_sidebar( array(
		'name'												=> 'Blog Sidebar',
		'id'													=> 'blog_sidebar',
		'before_widget'								=> '<div class="widget">',
		'after_widget'								=> '</div><hr>',
		'before_title'								=> '<h4>',
		'after_title'									=> '</h4>'
	) );
	// tHE MOST WANTED TOURS OF PAGE MACHUPICCHU NEW
	register_sidebar( array(
		'name'												=> 'Lista de tour Lateral',
		'id'													=> 'sidebar-list_tour',
		'before_widget'								=> '<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"><div class="list_wanted">',
		'after_widget'								=> '</div></div>',
		'before_title'								=> '<h4>',
		'after_title'									=> '</h4>'
	) );

	// This section is to Change or Edit number phone
	register_sidebar( array(
		'name'												=> 'Informacion de Telefonos',
		'id'													=> 'sidebar-phones',
		'before_widget'								=> '<div class="top_contact">',
		'after_widget'								=> '</div>',
		'before_title'								=> '<h4>',
		'after_title'									=> '</h4>'
	) );

}
add_action( 'widgets_init', 'ematours_widgets' );
