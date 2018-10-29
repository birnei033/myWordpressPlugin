<?php 

function wdd_page_setting(){

    // updating options---------
    if (array_key_exists('submit_custom_post_type', $_POST)) {

        update_option( 'wdd_child_theme_css_path', $_POST['style_path']);
        update_option( 'wdd_child_theme_custom_js_path', $_POST['js_path']);

        ?>

        <div id="setting-error-settings-updated" class="updated_settings_error notice is-dismissable">
            <strong>Setting have been saved.</strong>
        </div>

        <?php 
    }
    //end updating options----------

   include_once 'wdd-option-ui.php';
}