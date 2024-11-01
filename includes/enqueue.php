<?php 
/**
 * Enqueue appropriate styles and scripts for CG
 * 
 * @version 1.0.0
 * @param null
 * @return null
 */

function wpcb_scripts($hook){
    if($hook == 'toplevel_page_wpcb'):
        wp_enqueue_script('wpcb_script', WPCB_DIR_URL.'js/content-generator.js', array('jquery'), WPCB_VERSION);
        wp_localize_script('wpcb_script', 'cg_license', array('key' => get_option('wpcb_license_key')));

        wp_enqueue_script('wpcb_signup', WPCB_DIR_URL.'js/signup.js', array('jquery'), WPCB_VERSION);
        wp_enqueue_style('wpcb_style', WPCB_DIR_URL.'style.css', array(), WPCB_VERSION);

        wp_enqueue_script('wpcb_account', WPCB_DIR_URL.'js/account.js', array(), WPCB_VERSION);
        wp_localize_script('wpcb_account', 'wpcb_license', array('key' => get_option('wpcb_license_key')));

        if(isset($_GET['tab']) && sanitize_text_field($_GET['tab']) == 'previous'):
            wp_enqueue_script('wpcb_previous_articles', WPCB_DIR_URL.'js/previous-articles.js', array(), WPCB_VERSION);
            wp_localize_script('wpcb_previous_articles', 'wpcb_license', array('key' => get_option('wpcb_license_key')));
        endif;

        wp_enqueue_script('wpcb_plans', WPCB_DIR_URL.'js/plans.js', array(), WPCB_VERSION);
    endif;
}
add_action('admin_enqueue_scripts', 'wpcb_scripts');