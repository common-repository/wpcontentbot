<?php 

/**
 * Load the appropriate template in the backend
 * 
 * @version 1.0.0
 */
function wpcb_load_template(){

    wpcb_header();
    

    if(isset($_GET['tab'])):
        $tab = sanitize_text_field($_GET['tab']);
    else:
        $tab = '';
    endif;

    $license = get_option('wpcb_license_key');
    
    if($tab == 'account' || ! $license):

        include WPCB_PATH.'/templates/account.php';

    elseif($tab == 'previous'):

            include WPCB_PATH.'/templates/previous.php';

    else:

        include WPCB_PATH.'/templates/generate.php';

    endif;

}