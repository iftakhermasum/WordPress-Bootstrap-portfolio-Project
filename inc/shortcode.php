

<?php

// Owl Carousel custom shot code registration
function owlslidershortcode($atts){
    ob_start();  

    $quariy = new WP_Query( array(
        'post_type' => 'owlslider',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'order_by' => 'title'
    ));

    if($quariy -> have_posts()) { ?>

        <section class="slider_sec">
            <div class="container">
                <div class="row">
                    <div class="bxslider">

                        <?php 
                            while($quariy-> have_posts()) : $quariy -> the_post();
                        ?>

                        <div><?php echo the_post_thumbnail('owlslider'); ?></div>
                        
                        <?php
                            endwhile;
                            wp_reset_postdata();                    
                        ?>

                    </div>  
                </div>
            </div>
        </section>

    <?php }
    
    $obendloop = ob_get_clean();
    return $obendloop;
}
add_shortcode( 'owlslider', 'owlslidershortcode' );



//***** Recent activitiees
function our_recentactivities($atts){
    ob_start();
        $ourctivit = New WP_Query( array(
            'post_type'=>'ourcntactivits',
            'post_per_page' => -1,
            'order' => 'ASC', 
            'order_by' => 'title'             
        ));
        if($ourctivit-> have_posts()) { ?>

<section class="featuredsec">
    <div class="container">
        <div class="row">
            <div class="featuredsecboxwrp">

                <?php 
                    while($ourctivit-> have_posts()) : $ourctivit-> the_post(); 
                ?>

                    <div class="featuredsecbox">
                        <div class="featuredsecbox_inr">
                            <div class="featuredsecbox_img">
                                <?php echo the_post_thumbnail('ourcntactivits'); ?>
                            </div>    
                            <div class="featuredsecbox_txt">
                                <h3> <?php the_title(); ?> </h3>
                                <p> <?php the_content(); ?> </p>
                            </div>    
                        </div>
                    </div> 

                <?php
                    endwhile;
                    wp_reset_postdata();  
                ?>                    

            </div>
        </div>
    </div>
</section>           

        <?php }

    $boloops = ob_get_clean();
    return $boloops;
}
add_shortcode( 'ourcntactivits', 'our_recentactivities' );


