<?php
/**
 * Front Page Template 
 **/
get_header(); ?>

<section class="herosec homehero">
    <div class="container">
        <div class="row">
            <div class="heromainwrp">
                <h1>Lorem Ipsum is simply text</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <a href="" class="btn">Lorem Ipsum</a>
            </div>
        </div>
    </div>
</section>


<section class="coltoactionbox">
    <div class="container">
        <div class="row">
            <div class="coltobox">
                <div class="coltobox_txt">
                    <h2>Lorem Ipsum is simply text</h2>
                    <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text ever since the 1500s</p>
                </div>
                <div class="coltobox_btn">
                    <a href="" class="btn">Lorem Ipsum</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ourservicesec">
    <div class="container">
        <div class="row ourservicesec_row">
            <div class="col-md-6">
                <div class="servicetxtbox">
                    <span class="span_big">OUR SERVICES</span>
                    <h2>Lorem Ipsum is simply text </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="btn">Lorem Ipsum</a>
                </div>                
            </div>

            <div class="col-md-6">
                <div class="srviceboxwrp">
                    <div class="sericebox">
                        <div class="sericebox_inr">
                            <img src="img/svgexport-15.svg" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum is simply text Lorem Ipsum is simply text</p>
                        </div>
                    </div>                    
                    <div class="sericebox">
                        <div class="sericebox_inr">
                            <img src="img/svgexport-16.svg" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum is simply text Lorem Ipsum is simply text</p>
                        </div>
                    </div>                                        
                    <div class="sericebox">
                        <div class="sericebox_inr">
                            <img src="img/svgexport-17.svg" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum is simply text Lorem Ipsum is simply text</p>
                        </div>
                    </div>                                        
                    <div class="sericebox">
                        <div class="sericebox_inr">
                            <img src="img/svgexport-18.svg" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum is simply text Lorem Ipsum is simply text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="featuredsec">
    <div class="container">
        <div class="row">
            <div class="featuredsectxtbox">
                <span class="span_big">FEATURED ACTIVITIES</span>
                <h2>Our Recent Activities</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div> 

            <div class="featuredsecboxwrp">

            <?php query_posts( 'post_type=ourcntactivits&post_status=publish&posts_per_page=10&order=ASC&paged='. get_query_var('post') );
                    
                    if(have_posts()) :
                        while(have_posts()) : the_post();               
                    ?>           

                <div class="featuredsecbox">
                    <div class="featuredsecbox_inr">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </div> 

                    <?php
                        endwhile;
                    endif;
                    ?>

            </div>
        </div>
    </div>
</section>





<section class="teamsec">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="teamsectxtbox">
                    <h2>Professional Team</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>                
            </div>

            <div class="">
                <div class="teamsecboxwrp">
                    <div class="teamsecbox">
                        <div class="teamsecbox_inr">
                            <img src="img/profile-person.jpg" alt="">
                            <h3>Lorem Ipsum </h3>
                            <p>Simply text</p>
                            <div class="socialbox">
                                <a href="#"><img src="img/svgexport-26.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-22.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-3.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-4.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-5.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-6.svg" alt=""></a>
                            </div>
                        </div>
                    </div>                    
                    <div class="teamsecbox">
                        <div class="teamsecbox_inr">
                            <img src="img/profile-person.jpg" alt="">
                            <h3>Lorem Ipsum </h3>
                            <p>Simply text</p>
                            <div class="socialbox">
                                <a href="#"><img src="img/svgexport-26.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-22.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-3.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-4.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-5.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-6.svg" alt=""></a>
                            </div>
                        </div>
                    </div>                                        
                    <div class="teamsecbox">
                        <div class="teamsecbox_inr">
                            <img src="img/profile-person.jpg" alt="">
                            <h3>Lorem Ipsum </h3>
                            <p>Simply text</p>
                            <div class="socialbox">
                                <a href="#"><img src="img/svgexport-26.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-22.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-3.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-4.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-5.svg" alt=""></a>
                                <a href="#"><img src="img/svgexport-6.svg" alt=""></a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>




<section class="trustedcompanysec">
    <div class="container">
        <div class="row">
            <div class="trstcompsecinr">
                <div class="upcountbox">
                    <h2><span>127</span> + </h2>
                    <p>Lorem Ipsum text</p>
                </div>
                    <img src="img/svgexport-19.svg" alt="">
                    <img src="img/svgexport-20.svg" alt="">
                    <img src="img/svgexport-21.svg" alt="">
                    <img src="img/svgexport-22.svg" alt="">
            </div>
        </div>
    </div>
</section>




<section class="blogsec">
    <div class="container">
        <div class="row">
            <div class="blogprtwrap">
                <div class="blogprttitlee">
                    <h2>News & Updates </h2>
                </div>

                <div class="blogbox">
                    <div class="blogboxinr">
                        <div class="blogboxinrwrap">
                            <img src="img/partimg.jpg" alt="">
                        </div>    
                        <div class="blogboxtxtwrp">
                            <div class="blogcatwrp">
                                <a href="#">AGENCY</a>
                                <a href="#">NEWS</a>
                            </div>
                            <a href="#"><h3>Lorem Ipsum is simply text</h3></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>    
                </div>
                <div class="blogbox">
                    <div class="blogboxinr">
                        <div class="blogboxinrwrap">
                            <img src="img/partimg.jpg" alt="">
                        </div> 
                        <div class="blogboxtxtwrp">
                            <div class="blogcatwrp">
                                <a href="#">AGENCY</a>
                                <a href="#">NEWS</a>
                            </div>
                            <a href="#"><h3>Lorem Ipsum is simply text</h3></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>    
                </div>
                <div class="blogbox">
                    <div class="blogboxinr">
                        <div class="blogboxinrwrap">
                            <img src="img/partimg.jpg" alt="">
                        </div> 
                        <div class="blogboxtxtwrp">
                            <div class="blogcatwrp">
                                <a href="#">AGENCY</a>
                                <a href="#">NEWS</a>
                            </div>
                            <a href="#"><h3>Lorem Ipsum is simply text</h3></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>




<section class="carouselsec">
    <div class="container">
        <div class="row">
            <div class="carouselwrap">
                <!-- Set up your HTML -->
                <div class="owl-carousel owl-theme">

                    <?php query_posts( 'post_type=owlslider&post_status=publish&posts_per_page=10&order=ASC&paged='. get_query_var('post') );
                    
                    if(have_posts()) :
                        while(have_posts()) : the_post();               
                    ?>                

                    <div class="owlcontbox"> 
                        <?php echo the_post_thumbnail('owlslider'); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                    

                    <?php
                        endwhile;
                    endif;
                    ?>


                </div>
                <!-- end up your HTML -->
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>