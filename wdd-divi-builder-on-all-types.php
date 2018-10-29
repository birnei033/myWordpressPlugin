<?php 

/* Enable Divi Builder on all post types with an editor box */
function myprefix_add_post_types($post_types) {
    foreach(get_post_types() as $pt) {
        if (!in_array($pt, $post_types) and post_type_supports($pt, 'editor')) {
            $post_types[] = $pt;
        }
    } 
    return $post_types;
}
add_filter('et_builder_post_types', 'myprefix_add_post_types');



/* Add Divi Custom Post Settings box */
function myprefix_add_meta_boxes() {
    foreach(get_post_types() as $pt) {
        if (post_type_supports($pt, 'editor') and function_exists('et_single_settings_meta_box')) {
            add_meta_box('et_settings_meta_box', __('Divi Custom Post Settings', 'Divi'), 'et_single_settings_meta_box', $pt, 'side', 'high');
        }
    } 
}
add_action('add_meta_boxes', 'myprefix_add_meta_boxes');


/* Ensure Divi Builder appears in correct location */
function myprefix_admin_js() { 
    $s = get_current_screen();
    if(!empty($s->post_type) and $s->post_type!='page' and $s->post_type!='post') { 
?>
<script>
jQuery(function($){
    $('#et_pb_layout').insertAfter($('#et_pb_main_editor_wrap'));
});
</script>
<style>
#et_pb_layout { margin-top:20px; margin-bottom:0px }
 .single-nascomms_packages .et_post_meta_wrapper {
    display: none !important;
}
</style>
<?php
    }
}
add_action('admin_head', 'myprefix_admin_js');


function myprefix_et_pb_show_all_layouts_built_for_post_type($post_type) {

    $similar_post_types = get_post_types();

    if ( in_array( $post_type, $similar_post_types ) ) {
        return $similar_post_types;
    }

    return $post_type;
}
add_filter('et_pb_show_all_layouts_built_for_post_type', 'myprefix_et_pb_show_all_layouts_built_for_post_type');

// ----------------------------------------------------------------------------------------------------------------------------------------------------
