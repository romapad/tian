<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return '';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * the_excerpt() lenght
 */
function custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\custom_excerpt_length', 999 );

// Register Custom Post Type
function custom_partners_post_type() {

	$labels = array(
		'name'                  => _x( 'Партнеры', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Партнер', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Партнеры', 'sage' ),
		'all_items'             => __( 'Все партнеры', 'sage' ),
		'add_new_item'          => __( 'Добавить партнера', 'sage' ),
		'add_new'               => __( 'Добавить нового', 'sage' ),
		'new_item'              => __( 'Новый партнер', 'sage' ),
		'edit_item'             => __( 'Редактировать', 'sage' ),
		'update_item'           => __( 'Обновить', 'sage' ),
		'view_item'             => __( 'Просмотреть', 'sage' ),
		'search_items'          => __( 'Поиск', 'sage' ),
		'not_found'             => __( 'Не найдены', 'sage' ),
		'not_found_in_trash'    => __( 'В корзине не найдено', 'sage' ),
	);
	$args = array(
		'label'                 => __( 'Партнер', 'sage' ),
		'description'           => __( 'Партнеры', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'thumbnail', ),
		'taxonomies'            => array( 'region' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'partners', $args );

}
add_action( 'init', __NAMESPACE__ . '\\custom_partners_post_type', 0 );

// Register Custom Taxonomy
function custom_region_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Регионы', 'Taxonomy General Name', 'sage' ),
		'singular_name'              => _x( 'Регион', 'Taxonomy Singular Name', 'sage' ),
		'menu_name'                  => __( 'Регионы', 'sage' ),
		'all_items'                  => __( 'Все регионы', 'sage' )
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'region', array( 'partners' ), $args );

}
add_action( 'init', __NAMESPACE__ . '\\custom_region_taxonomy', 0 );


/** Ajax Post */
add_action( 'wp_ajax_theme_post_example', __NAMESPACE__ . '\\theme_post_example_init' );
add_action( 'wp_ajax_nopriv_theme_post_example', __NAMESPACE__ . '\\theme_post_example_init' );
function theme_post_example_init() {
  /** Made Query */
  $args = array (
  	'post_type' => array( 'catalog' ),
      'p'         => $_POST['id']
  );    
  $theme_post_query = new \WP_Query( $args );    
  
    while( $theme_post_query->have_posts() ) : $theme_post_query->the_post();
       
      get_template_part('templates/content', 'catalog');
    
    endwhile;         
    
  exit;
}


function get_pdf_array() {
    $args = array( 
	  'post_mime_type' => array('application/pdf', 'application/zip'),
      'post_type'      => 'attachment', 
      'numberposts'    => -1, 
      'post_status'    => null
    );
    $attachments = get_posts($args);
    
    foreach ( $attachments as $attachment ) {
    
      $attach_link = str_replace( WP_HOME, '', wp_get_attachment_url($attachment->ID) );  ;
      $attach_title = apply_filters( 'the_title' , $attachment->post_title );
      $attach_array[$attach_link] = $attach_title;
    
    }
    return $attach_array;
}


// Register Slider Post Type
function custom_slider_post_type() {

	$labels = array(
		'name'                  => _x( 'Слайды', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Слайд', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Слайды', 'sage' ),

	);
	$args = array(
		'label'                 => 'Слайд',
		'description'           => 'Слайды',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true
	);
	register_post_type( 'slider', $args );

}
add_action( 'init', __NAMESPACE__ . '\\custom_slider_post_type', 0 );