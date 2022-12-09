<?php

function theme_customize($wp_customize){

//// ===>- Logo Change function
$wp_customize-> add_section('logo_changfunc', array(
        'title'=> __('Logo Changing Area', 'layout'),
        'description' => 'please change your logo from this section'
    ));

    $wp_customize-> add_setting('logo_setingfunc', array( 
        'default'=> get_bloginfo( 'template_directory').'/img/logo.png',
    ));

    $wp_customize-> add_control( new WP_Customize_Image_Control($wp_customize, 'logo_setingfunc', array(
        'label'=> 'Upload Logo',
        'setting'=> 'logo_setingfunc',
        'section'=> 'logo_changfunc'
    )));






}
add_action( 'customize_register', 'theme_customize' );
