<?php
/**
 * underscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscore
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function mon_31w_setup() {


	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
        add_theme_support( 'title-tag' );

    /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
}
add_action( 'after_setup_theme', 'mon_31w_setup' );

/**
 * Enqueue scripts and styles.
 */
function underscore_scripts() {

	// wp_enqueue_style( 'underscore-style', 
    //                     get_stylesheet_uri(), 
    //                     array(), 
    //                     _S_VERSION );

    wp_enqueue_style('underscore-style',
                        get_template_directory_uri() . '/style.css',        
                        array(),
                        filemtime(get_template_directory() . '/style.css'), false);
                
	
}
add_action( 'wp_enqueue_scripts', 'underscore_scripts' );

/*-------------------------Initialisation de la fonction menu-----------------------------*/

function kamba_theme_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'text_domain' ),
        //'footer_menu' => __( 'Footer Menu', 'text_domain' ),
    ) );
}
add_action('after_setup_theme', 'kamba_theme_register_nav_menu', 0);