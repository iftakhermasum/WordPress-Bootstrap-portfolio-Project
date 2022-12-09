<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header class="mainhead <?php echo get_theme_mod( 'ifti_mpchng_set' ); ?>">
    <div class="container">
        <div class="row customrow">
            <div class="col-md-2">
                <div class="logosec">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_theme_mod( 'logo_setingfunc' ); ?>" alt="brand logo" />
                    </a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="hambargerbox">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hambarger.svg" alt="hambarger image"> 
                </div>

                <div class="mainmenuwrap">
                    <?php wp_nav_menu( array('menu_location'=>'main_menu', 'menu_id'=>'topmenu' ) ); ?>
                </div>
            </div>
        </div>
    </div>
</header>