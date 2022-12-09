<?php 

/*======= Theme default requirements ===========*/ 
include_once('inc/dealult.php');



/*======= Theme css and jQuer File enqueue ===========*/ 
include_once('inc/enqueue.php');



/*======= Custom post File enqueue ===========*/ 
include_once('inc/custom_post.php');



/*======= Menu registration ===========*/ 
include_once('inc/menu_opiton.php');



/*======= Theme Customize ===========*/ 
include_once('inc/theme_customize.php');


/*======= Theme Customize ===========*/ 
include_once('inc/shortcode.php');


/*========== Widgets ==============*/
include_once('inc/widgets.php');

function foobar_func( $atts ){
	return "Foo and bar";
}
add_shortcode( 'foobar', 'foobar_func' );

// shortcode register
function shortcde(){
    return 'this is txt';
}
add_shortcode('ift', 'shortcde');




