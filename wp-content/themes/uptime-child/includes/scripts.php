<?php
/**
 * Setup function for the project
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 *
 * @package Allervie
 * @since 1.0.0
 */


/**
 * Theme assets
 *
 * Define variable to store asset directory folder in it.
 *
 * That can be used afterward to call stylesheet / scripts etc
 */

// Time format for the_time()
DEFINE( 'project_dtformat', 'F j, Y' );

// Define assets folder
DEFINE( 'assetDir', get_stylesheet_directory_uri() . '/assets' );

// Define bundle version
DEFINE( 'ASSET_VERSION_JS', filemtime( get_stylesheet_directory() . '/assets/js/bundle.js' ) );
DEFINE( 'ASSET_VERSION_CSS', filemtime( get_stylesheet_directory() . '/assets/css/bundle.css' ) );

/**
 * Theme assets
 *
 * Enqueue and Dequeue required files
 */
function uptime_assets() {

	// Enqueue theme styles
	wp_enqueue_style( 'uptime-theme-stylesheet', assetDir . '/css/bundle.min.css?v=' . ASSET_VERSION_CSS, false, null );

	// Eliminate the emoji script
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Enqueue comments reply script on single post pages
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( ! is_admin() && ! is_user_logged_in() ) {

		// Deregister dashicons on frontend
		wp_deregister_style( 'dashicons' );
	}
	wp_enqueue_script( 'jquery' );

	// Register project scripts
	wp_register_script( 'uptime-theme-scripts', assetDir . '/js/bundle.min.js?v=' . ASSET_VERSION_JS, array( 'jquery' ), null, false );

	// Localize
	wp_localize_script(
		'uptime-theme-scripts',
		'localVars',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
		)
	);

	// Enqueue project scripts
	wp_enqueue_script( 'uptime-theme-scripts' );

}

add_action( 'wp_enqueue_scripts', 'uptime_assets' );
