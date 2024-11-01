jQuery(window).ready(function(){

    jQuery('.wpcb-signin-trigger').on('click', function(){
        jQuery('.wpcb-sign-up-relative').addClass('wpcb-signin-instead');
    });
    jQuery('.wpcb-signup-trigger').on('click', function(){
        jQuery('.wpcb-sign-up-relative').removeClass('wpcb-signin-instead');
    })

})