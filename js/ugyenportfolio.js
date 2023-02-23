jQuery(document).ready(function(){
    jQuery('#top-navi > div > ul > li:first-child').on('click', function(){
        jQuery('#top-navi > div > ul > li:not(first-child)').slideToggle(400);
    })
    jQuery(window).resize(function(){
        if(jQuery(window).width() > 650){
            jQuery('#top-navi > div > ul > li:not(:first-child)').show();
        }
        else{
            jQuery('#top-navi > div > ul > li:not(:first-child)').hide();
        }
    });
});