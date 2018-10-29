<?php 
function ds_ct_enqueue_parent() { 
    $wdd_child_theme_css_path = get_option( 'wdd_child_theme_css_path', 'none' ); 
    if ($wdd_child_theme_css_path) {
        # code...
    }
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . $wdd_child_theme_css_path ); }

function ds_ct_loadjs() {
    $wdd_child_theme_js_path = get_option( 'wdd_child_theme_custom_js_path', '/wdd-script.js' );
    wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . $wdd_child_theme_js_path,
        array( 'jquery' ), false, true
    );
}
add_action( 'wp_enqueue_scripts', 'ds_ct_enqueue_parent' );
add_action( 'wp_enqueue_scripts', 'ds_ct_loadjs' );
