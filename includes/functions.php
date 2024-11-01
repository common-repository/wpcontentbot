<?php 
/**
 * Retieve the Backend admin page header
 * 
 * @version 1.0.0
 * @return null
 */
function wpcb_header(){
    include WPCB_PATH.'/templates/header.php';
}

/**
 * Parse URL query strings
 * 
 * @version 1.0.0
 * @return null
 */
function wpcb_parse_url_query_strings(){
    
    if(isset($_GET['set_wpcb_license_key'])):
        update_option('wpcb_license_key', sanitize_text_field($_GET['set_wpcb_license_key']));
        $redirect = sanitize_url(wpcb_clean_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
        wp_redirect($redirect);
    endif;

    if(isset($_GET['remove_wpcb_license_key'])):
        update_option('wpcb_license_key', '');
        $redirect = sanitize_url(wpcb_clean_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
        wp_redirect($redirect);
    endif;

}
add_action('admin_init', 'wpcb_parse_url_query_strings');

/**
 * Clean URL before sending any API requests.
 * Stops the same URL parameter being added twice.
 * 
 * @version 1.0.0
 * @param string | URL
 * @return string | Clean String
 */
function wpcb_clean_url($url){

    $key = 'page';
    $url = preg_replace('~(\?|&)set_wpcb_license_key=[^&]*~', '$1', $url);
    $url = preg_replace('~(\?|&)remove_wpcb_license_key=[^&]*~', '$1', $url);
    $url = preg_replace('~(\?|&)wpcb_error=[^&]*~', '$1', $url);
    return esc_url($url);

}