<?php 

// Add divi_button shortcode
function divi_button_shortcode( $atts , $content = null ) {
    ob_start();
    // Attributes
    $a = shortcode_atts(
        array(
            'alignment' => '',
            'href' => '#'
        ),
        $atts);

    switch ($a['alignment']) {
        case 'left':
            break;
        case 'center':
            $alignment = 'et_pb_button_alignment_center';
            break;
        case 'right':
            $alignment = 'et_pb_button_alignment_right';
            break;
        default:
            $alignment = '';
            break;
    }
    ?> 
    <div class="et_pb_button_module_wrapper et_pb_module <?php echo $alignment ?>">
        <a class="et_pb_button  et_pb_module et_pb_bg_layout_light" href="<?php echo $a['href']; ?>">
            <?php echo $content ?>
        </a>
    </div>
    <?php
    return ob_get_clean();
   
}
add_shortcode( 'divi_button', 'divi_button_shortcode' );

// ----------------------------------------------------------------------------------------------------------------------------------------------------


//Shortcode to show the module
function showmodule_shortcode($moduleid) {
extract(shortcode_atts(array('id' =>'*'),$moduleid)); 
return do_shortcode('[et_pb_section global_module="'.$id.'"][/et_pb_section]');
}
add_shortcode('showmodule', 'showmodule_shortcode');


 include_once 'yoast-breadcrumb.php';
// ----------------------------------------------------------------------------------------------------------------------------------------------------

 function wdd_show_title( $atts ){
    return get_the_title();
}
add_shortcode( 'title', 'wdd_show_title' );

 function wdd_show_permalink( $atts ){
    return get_permalink();
}
add_shortcode( 'post-link', 'wdd_show_permalink' );

 function wdd_show_thumbnail( $atts ){
     extract(shortcode_atts(
        array(
            'size' => 'full',
        ),
        $atts));
    return get_the_post_thumbnail( $post->ID, $size );
}
add_shortcode( 'post-thumbnail', 'wdd_show_thumbnail' );

 function wdd_show_excerpt( $atts ){
    extract(shortcode_atts(
        array(
            'length' => '-1',
        ),
        $atts));
    if ($length != -1) {
        return substr(get_the_excerpt(), 0, $length);
    }
    return get_the_excerpt();
}
add_shortcode( 'post-excerpt', 'wdd_show_excerpt' );

function wdd_show_content( $atts ){
    return get_the_content();
}
add_shortcode( 'post-content', 'wdd_show_content' );

function wdd_getField($atts){
    extract(shortcode_atts(array(
        'key'=>''
    ),$atts));
    if ($key == '') {
        $key = 'attribute key is required.';
    }
    return get_field($key);
}add_shortcode( 'get-field', 'wdd_getField' );

function pagination($atts){
   
   ?>
    <div class="alignleft"><?php next_posts_link(esc_html__('&laquo; Older Entries','Divi')); ?></div>
    <div class="alignright"><?php previous_posts_link(esc_html__('Next Entries &raquo;', 'Divi')); ?></div>

    <?php
      
   
}add_shortcode( 'pagination', 'pagination');