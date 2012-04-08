<?php

// Remove things from the top admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    //Remove the WordPress logo menu
    $wp_admin_bar->remove_menu('wp-logo');
    //Remove the "My Account" item
    $wp_admin_bar->remove_menu('my-account');
    //Remove the "Site Name" menu
    $wp_admin_bar->remove_menu('site-name');
    //Remove the "My Sites/[Site Name]" menu and all submenus
    $wp_admin_bar->remove_menu('my-sites');
    //Remove the Shortlink menu
    $wp_admin_bar->remove_menu('get-shortlink');
    //Remove the view link
    $wp_admin_bar->remove_menu('view');
    //Remove the edit link for posts and terms
    $wp_admin_bar->remove_menu('edit');
    //Remove te "Add New" menu
    $wp_admin_bar->remove_menu('new-content');
    //Remove edit comments link with awaiting moderation count bubble
    $wp_admin_bar->remove_menu('comments');
    //Remove the update link for theme/plugin/core updates
    $wp_admin_bar->remove_menu('updates');
    //Remove the search form.
    $wp_admin_bar->remove_menu('search');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

?>