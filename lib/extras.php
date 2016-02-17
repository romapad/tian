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
  return ' <a href="' . get_permalink() . '">' . __('Читать далее...', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * the_excerpt() lenght
 */
function custom_excerpt_length( $length ) {
    return 20;
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
		'show_in_admin_bar'     => false,
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