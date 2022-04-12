<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;


/**
 * Preloads the main web font to improve performance.
 * @return void
**/

add_action( 'wp_head', function() {
		?>
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap">
        <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap">
		<?php
} );


add_action( 'wp_head', function() {
    echo get_field('gtag_script', 'option');
} );



/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);


/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls'
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'copyright_navigation' => __('Bottom Footer Navigation', 'sage')
    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable wide alignment support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
     */
    add_theme_support('align-wide');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style'
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary'
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer'
    ] + $config);
});

// Register Custom Post Type
function reviews_post_type() {

	$labels = array(
		'name'                  => _x( 'Reviews', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Review', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Reviews', 'sage' ),
		'name_admin_bar'        => __( 'Reviews', 'sage' ),
		'archives'              => __( 'Item Archives', 'sage' ),
		'attributes'            => __( 'Review Attributes', 'sage' ),
		'parent_item_colon'     => __( 'Parent Review:', 'sage' ),
		'all_items'             => __( 'All Reviews', 'sage' ),
		'add_new_item'          => __( 'Add NewReview', 'sage' ),
		'add_new'               => __( 'Add New Review', 'sage' ),
		'new_item'              => __( 'New Review', 'sage' ),
		'edit_item'             => __( 'Edit Review', 'sage' ),
		'update_item'           => __( 'Update Review', 'sage' ),
		'view_item'             => __( 'View Reviews', 'sage' ),
		'view_items'            => __( 'View Reviews', 'sage' ),
		'search_items'          => __( 'SearchReview', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into item', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this review', 'sage' ),
		'items_list'            => __( 'Items list', 'sage' ),
		'items_list_navigation' => __( 'Items list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter items list', 'sage' ),
	);
	$args = array(
		'label'                 => __( 'Review', 'sage' ),
		'description'           => __( 'Kick ass reviews', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
        'menu_icon'           => 'dashicons-awards',
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'reviews', $args );

}
add_action( 'init', 'App\reviews_post_type', 0 );



add_action( 'after_setup_theme', function() {
        add_image_size( 'card', 400, 225 );
    }
);
