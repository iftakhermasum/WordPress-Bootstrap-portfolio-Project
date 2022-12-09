<?php 
/****
 * Single page template
 * ****/
get_header(); ?>

    
    <section id="bodysectin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php get_template_part( 'template/page_loop' ); ?>                    

                </div>
            </div>
        </div>
    </section>
 




<?php get_footer(); ?>