<?php
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Usama Soomi
 * @copyright         2023 Usama Soomi or WPBrigade
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       News Post Plugin
 * Plugin URI:        https://example.com/plugin-name
 * Description:       This is the Plugin for News CPT.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Usama Soomi
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */


function custom_post_type() {
  
    $labels = array(
        'name'                => _x( 'News', 'Post Type General Name', 'customchildtheme' ),
        'singular_name'       => _x( 'News', 'Post Type Singular Name', 'customchildtheme' ),
        'menu_name'           => __( 'News', 'customchildtheme' ),
        'all_items'           => __( 'All News', 'customchildtheme' ),
        'view_item'           => __( 'View News', 'customchildtheme' ),
        'add_new_item'        => __( 'Add New News', 'customchildtheme' ),
        'add_new'             => __( 'Add New', 'customchildtheme' ),
        'edit_item'           => __( 'Edit News', 'customchildtheme' ),
        'update_item'         => __( 'Update News', 'customchildtheme' ),
        'search_items'        => __( 'Search News', 'customchildtheme' ),
        'not_found'           => __( 'Not Found', 'customchildtheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'customchildtheme' ),
    );
        
    // Set other options for Custom Post Type
    $news_post_args = array(
        'label'               => __( 'News', 'customchildtheme' ),
        'description'         => __( 'News news and reviews', 'customchildtheme' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'date'),
        'taxonomies'          => array( 'News_Category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-book',
        'show_in_rest' => true,
    
    );
    // Registering your Custom Post Type
    register_post_type( 'news', $news_post_args );
}
    
add_action( 'init', 'custom_post_type');

function create_custom_taxonomy() {
    $labels = array(
        'name' => 'News_Category',
        'singular_name' => 'News_Category',
        'search_items' => 'Search News_Category',
        'all_items' => 'All News_Category',
        'parent_item' => 'Parent News_Category',
        'parent_item_colon' => 'Parent News_Category:',
        'edit_item' => 'Edit News_Category',
        'update_item' => 'Update News_Category',
        'add_new_item' => 'Add New News_Category',
        'new_item_name' => 'New News_Category Name',
        'menu_name' => 'News_Category',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'News_Category'),
    );
    register_taxonomy('News_Category', array('news'), $args);
}
add_action('init', 'create_custom_taxonomy');

?>

