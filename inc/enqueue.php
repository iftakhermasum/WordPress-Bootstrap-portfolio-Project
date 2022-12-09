<?php
function csjsincludfunc(){
/*------css-----*/
    wp_enqueue_style( 'rusbdorg-style', get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.2.2', 'all' );
    wp_register_style( 'owl.carousel.css', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '2.3.4', 'all' );
    wp_register_style( 'owl.carousel.theme', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '2.3.4', 'all' );
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.1', 'all' );
//--------
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'owl.carousel.css' );
    wp_enqueue_style( 'owl.carousel.theme' );
    wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;1,400&display=swap', false );
    wp_enqueue_style( 'custom' );

/*------js-----*/ 
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '5.2.2', true );
    wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '2.3.4', true );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'csjsincludfunc' );
