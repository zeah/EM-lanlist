<?php
defined( 'ABSPATH' ) or die( 'Blank Space' ); 
/*
	REGISTERING TAXONOMY
*/
final class Lan_taxonomy {
	/* singleton */
	private static $instance = null;

	public static function get_instance() {
		if (self::$instance === null) self::$instance = new self();

		return self::$instance;
	}

	private function __construct() {
		/* creates taxonomy: korttype */
		add_action('init', array($this, 'create_tax'));
	}
	
	/*
		creates taxonomy: korttype 
		for custom post type: emkort
	*/
	public function create_tax() {
		$plur = 'Lånlist Type';
		$sing = 'Lånlist Type';
		$labels = array(
			'name'                  => _x( $plur, 'Taxonomy plural name', 'text-domain' ),
			'singular_name'         => _x( 'Singular Name', 'Taxonomy singular name', 'text-domain' ),
			'search_items'          => __( 'Search '.$plur, 'text-domain' ),
			'popular_items'         => __( 'Popular '.$plur, 'text-domain' ),
			'all_items'             => __( 'All '.$plur, 'text-domain' ),
			'parent_item'           => __( 'Parent '.$sing, 'text-domain' ),
			'parent_item_colon'     => __( 'Parent '.$sing, 'text-domain' ),
			'edit_item'             => __( 'Edit '.$sing, 'text-domain' ),
			'update_item'           => __( 'Update '.$sing, 'text-domain' ),
			'add_new_item'          => __( 'Add New '.$sing, 'text-domain' ),
			'new_item_name'         => __( 'New '.$sing.' Name', 'text-domain' ),
			'add_or_remove_items'   => __( 'Add or remove '.$plur, 'text-domain' ),
			'choose_from_most_used' => __( 'Choose from most used '.$plur, 'text-domain' ),
			'menu_name'             => __( $sing, 'text-domain' ),
		);
	
		$args = array(
			'labels'            => $labels,
			'public'            => true,
			'show_in_nav_menus' => false,
			'show_admin_column' => true,
			'hierarchical'      => true,
			// 'show_tagcloud'     => true,
			// 'show_ui'           => true,
			// 'query_var'         => false,
			'rewrite'           => false,
			// 'query_var'         => false,
			'capabilities'      => array(),
		);
	
		register_taxonomy('emlanlisttype', 'emlanlist', $args );
	}
}