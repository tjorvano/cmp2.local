<?php

    /* In dit bestand komen onze theme specifieke functies */



function register_menu_locations() {
    register_nav_menus(
        array(
            'primary' => __( 'Navigatie' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_menu_locations' );

function register_sidebar_locations() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'Handig zijmenu' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'register_sidebar_locations' );

if ( 
    function_exists('register_sidebar') 
    ) { 
        register_sidebar(
            array( 
                'name' => 'Secondary Sidebar', 
                'id' => 'secondary-sidebar', 
                'description' => 'Handig zijmenu 2', 
                'before_widget' => '<div style="height: 280px"></div><li id="%1$s" class="widget %2$s">', 
                'after_widget' => '</li>', 
                'before_title' => '<h2 class="widgettitle">', 
                'after_title' => '</h2>', )); }


the_excerpt_max_charlength(140);

function the_excerpt_max_charlength($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo $subex;
        }
        echo '[...]';
    } else {
        echo $excerpt;
    }
}

function my_bbp_verify_nonce_request_url( $requested_url ){
    return 'http://localhost:8080' . $_SERVER['REQUEST_URI'];
}
add_filter( 'bbp_verify_nonce_request_url', 'my_bbp_verify_nonce_request_url', 999, 1 );

function my_wp_nav_menu_args( $args = '' ) {
    if( is_user_logged_in() ) {
        $args['menu'] = 'logged-in';
    } else {
        $args['menu'] = 'logged-out';
    }
    return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// Our custom post type function
function create_posttype() {
    register_post_type( 'acties',
    // CPT Options
        array(
            'labels' => array(
        'name'                  => _x( 'acties', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'actie', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'actie', 'text_domain' ),
		'name_admin_bar'        => __( 'actie', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'acties'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

