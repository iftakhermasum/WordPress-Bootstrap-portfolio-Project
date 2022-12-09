jQuery(document).ready(function(){

    //-----> owl carousel
    jQuery('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: true,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });



    
    //-----> Menu hambarger
    jQuery(".hambargerbox").click(function(){
        jQuery(".mainmenuwrap").toggle();
    });
});