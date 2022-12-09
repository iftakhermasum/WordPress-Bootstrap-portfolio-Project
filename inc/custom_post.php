<?php

// Slider Custom post registration
function slider_post(){    
    register_post_type( 'owlslider', array(
        'labels' => array(
            'name' => ('Owl Slider'),
            'singular_name' => ('New item'),
            'add_new' => ('Add new item'),
            'add_new_item' => ('Slider New Item'),
            'edit_item' => ('Edit item'),
            'new_item' => ('New item'),
            'view_item' => ('View item'),
            'not_found' => ('Sorry no new slider item post found'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-image-flip-horizontal',
        'publicly_queryable' => true,
        'exclude_form_search' => true,
        'menu_position' => 6,
        'has_archive' => true, 
        'hirearchical' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array( 'slag' => 'owlslider' ),
        'supports' => array('title', 'thumbnail', 'editor'),

    ));
}
add_action( 'init', 'slider_post' );



function our_activities(){
    register_post_type( 'ourcntactivits', array(
        'labels' => array(
            'menu_name' => 'Recent Activities',
            'name' => 'Use this shortcode = [ourcntactivits]',
            'all_items' => 'all items',
            'add_new' => 'New Recent Post',
            'edit_item' => 'Make edit',
            'not_found' => ('Sorry no new activities post found'),
            'featured_image' => 'Here image',
            'remove_featured_image' => 'You can remove image',
            'item_link_description' => 'item_link_description',

        ),
        'public' => true,
        'menu_icon' => 'dashicons-admin-multisite',
        'menu_position' => 7,
        'supports' => array('title', 'thumbnail', 'editor'),
    ));
}
add_action( 'init', 'our_activities' );



