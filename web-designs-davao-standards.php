
<?php


/*
Plugin Name: Web Designs Davao Standards
Description:  This plugin must be always activated for this holds the primary needs for development. NOTE that in only works with DIVI child theme.
Author:       <a href="https://webdesigndavao.xyz" target="_blank">Web Design Davao</a>
Author URI:   https://webdesigndavao.xyz

*/
// --------MAIN--------------------------------------------------------------------------------------------------------------------------------------------

if (!defined('ABSPATH')) die();
 // var_dump(wp_get_theme()->Template);


include_once 'wdd-customposttype.php';
function menupage(){
    // displaying/adding menu in admin dashboard
    add_menu_page( 'WDD Settings', 'WDD Settings', 'manage_options', 'wdd-setting', 'wdd_page_setting', '', 200 );
}add_action( 'admin_menu', 'menupage' );


// what you see in admin menu wdd setting page
if (wp_get_theme()->Template !== 'divi') {
    function wdd_page_setting(){
        ?>
         <h1 style="color: red">Please install divi theme and create its child theme</h1><hr>
         <span>If already done go </span><a class="button button-primary" href="<?php echo get_site_url(); ?>/wp-admin/themes.php">Select theme</a>
        <?php 
    }
}else{
include_once 'wdd-update-options.php';
include_once 'wdd-custom-post-type.php';
include_once 'wdd-shortcodes.php';
include_once 'wdd-enques.php';
include_once 'wdd-divi-builder-on-all-types.php';
include_once 'wdd-add-quick-tags.php';
}
