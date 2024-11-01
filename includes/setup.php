<?php 
/** 
 * Add a menu item to the WP backend sidebar
 * 
 * @version 1.0.0
 * @return null
 */
function wpcb_add_menu(){
    add_menu_page('WPContentBot', 'WPContentBot', 'edit_posts', 'wpcb', 'wpcb_load_template', WPCB_DIR_URL.'assets/menu-icon.svg' );
}
add_action('admin_menu', 'wpcb_add_menu');