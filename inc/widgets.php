<?php
//----- footer widgets
function widgetall(){
    register_sidebar( array(
        'name' => __('Footer Widgets 1', 'layout'),
        'id' => 'ftrwdgts1',
        'description' => 'This widgets only for footer parts 1',
        'before_widget' => '<div class="widget_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => __('Footer Widgets 2', 'layout'),
        'id' => 'ftrwdgts2',
        'description' => 'This widgets only for footer parts 2',
        'before_widget' => '<div class="widget_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => __('Footer Widgets 3', 'layout'),
        'id' => 'ftrwdgts3',
        'description' => 'This widgets only for footer parts 3',
        'before_widget' => '<div class="widget_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );
}
add_action( 'widgets_init', 'widgetall' );




