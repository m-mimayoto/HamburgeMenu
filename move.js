jQuery(function(){
    jQuery('.c-button__menu').click(function(){
        jQuery('.l-nav').addClass('is-nav--open'); 
        jQuery('.l-aside__layer').addClass('is-aside__layer--open');
    });


    jQuery('.c-button--close').click(function(){
       jQuery('.l-nav').removeClass('is-nav--open');
       jQuery('.l-aside__layer').removeClass('is-aside__layer--open');
    });
});
