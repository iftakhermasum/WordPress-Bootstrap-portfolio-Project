<?php


/*======= Title Tag ===========*/ 
add_theme_support('title-tag');



/*======= Thumbnail ===========*/ 
add_theme_support( 'post-thumbnails', array('page', 'post', 'owlslider', 'ourcntactivits', 'service', 'slider'));
add_image_size( 'owlslider', 300, 300, true );
add_image_size( 'post-thumbnails', 1000, 350, true );





/*======= Pagination ===========*/ 
function ifti_pagination(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var( 'paged' )) $current = 1;
    $args['base'] = str_replace(999999, '%#%', get_pagenum_link( 999999 ));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if($max > 1) echo '<div class="wp_pagenav">';
        if($total == 1 && $max > 1) $pages = '<p class="pagees"> Page'. $current .'<span>of</span>'. $max .' </p>';
        echo $pages . paginate_links( $args );
        if($max > 1) echo '</div>';
}
