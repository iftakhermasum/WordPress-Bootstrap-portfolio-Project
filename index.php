<?php get_header(); ?>



<section class="blogpostsec">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blogpostbox_txt">

 
                
                    <?php get_template_part( 'template/blog_loop'); ?>



                </div>                
            </div>

            <div class="col-md-4">           
                <div class="blgpstbox_sidbr">
                    <h2>Sidebar Part</h2>
                </div>
            </div>         
        </div>
    </div>
</section>



<?php get_footer(); ?>