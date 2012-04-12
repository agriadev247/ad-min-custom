<?php
/**
* AD-min Custom
*
* Customize your admin area (the dashboard) in WordPress, easily.
* 
* Please note: this is NOT a fully functional theme, but rather a functions.php template to use it in your themes.
* It helps you to remove the uneccessary parts (menus, submenus, links) from the dashboard and/or add new custom ones.
* Just put it into your theme directory if you don't have a functions.php or append to yours if you already have one.
* Then simply edit and comment out the uneccesary parts to customize it to your needs.
* Important: We NOT change/modify the current user's role, we only hide these items (as not render them).
* So if a user has the proper right, he/she still will be able to access these links directly.
* We remove ONLY the core menus/items. If you need to remove any plugin generated menu/item, you can add it by hand.
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
        // Remove the WORDPRESS LOGO menu
        'wp-logo',
        // OR remove some if its submenu items
        //->'about',            // Remove "About WordPress" link
        //->'wp-logo-external',
            //->'wporg',            // Remove WordPress.org link
            //->'documentation',    // Remove codex link
            //->'support-forums',   // Remove forums link
            //->'feedback',         // Remove feedback link

        // Remove the TOP SECONDARY menu
        'top-secondary',
        // OR remove some if its submenus or submenu items
        //->'my-account',
            //->'user-actions',
                //->'user-info',
                //->'edit-profile',
                //->'logout',
        //->'search',

        // Remove the SITE NAME menu
        'site-name',
        // OR remove some if its submenus or submenu items
        //->'view-site',
        //->'dashboard',
        //->'appearance',
            //->'themes',
            //->'widgets',
            //->'menus',
            //->'background',
            //->'header',

        // Remove the MY SITES menu
        'my-sites',
        // OR remove some if its submenus or submenu items
        //->'my-sites-super-admin',
            //->'network-admin',
                //->'network-admin-d',
                //->'network-admin-s',
                //->'network-admin-u',
                //->'network-admin-v',
        //->'my-sites-list',

        // Remove the SHORTLINK menu
        'get-shortlink',

        // Remove the VIEW link
        'view',

        // Remove the EDIT link for posts and terms
        'edit',

        // Remove the ADD NEW menu
        'new-content',
        //->'new-post',
        //->'new-media',
        //->'new-link',
        //->'new-page',
        //->'new-user',
        //->'new-CUSTOM_POST_TYPE', // Replace with your actual 'custom_post_type' names

        // Remove the EDIT COMMENTS link
        'comments',

        // Remove the UPDATE link for theme/plugin/core updates
        'updates',
    );
    foreach ($items as $value) {
        $wp_admin_bar->remove_menu($value);;
    }
}
?>