<?php
/**
* AD-min Custom
*
* Customize your admin area (the dashboard) in WordPress, easily.
* 
* Please note: this is NOT a fully functional theme, but rather a functions.php template to use in your themes.
* It helps you to remove the uneccessary parts (menus, submenus, links) from the dashboard and/or add new custom ones.
* Just put it into your theme directory if you don't have a functions.php or append to yours if you already have one.
* Then simply edit and comment out the uneccesary parts to customize it to your needs.
* And finally: don't forget to replace the 'mytheme' strings with your theme name.
* Tested on WordPress version 3.3.1
* 
* @package WordPress
* @subpackage ad-min-custom
* @author agriadesign
*/

// Remove menus from the TOOLBAR (top admin bar)
add_action('wp_before_admin_bar_render', 'mytheme_remove_menus');
function mytheme_remove_menus() {
    global $wp_admin_bar;
    $items = array(
        'wp-logo',          // Remove the WORDPRESS LOGO menu
        'my-account',       // Remove the MY ACCOUNT item
        'site-name',        // Remove the SITE NAME menu
        'my-sites',         // Remove the MY SITES menu
        'get-shortlink',    // Remove the SHORTLINK menu
        'view',             // Remove the VIEW link
        'edit',             // Remove the EDIT link for posts and terms
        'new-content',      // Remove the ADD NEW menu
        'comments',         // Remove the EDIT COMMENTS link
        'updates',          // Remove the UPDATE link for theme/plugin/core updates
        'search',           // Remove the SEARCH form
    );
    foreach ($items as $value) {
        $wp_admin_bar->remove_menu($value);;
    }
}
?>