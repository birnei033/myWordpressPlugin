<?php 

function display_post( $atts ){

    extract(shortcode_atts(array(
        'post_type' =>'post',
        'posts_per_page' => '-1',
        'layout_id'=>0,
        'column'=>2,
        'class'=>''
        ),$atts));

    $tugz= new WP_Query(array(
        'post_type'=>$post_type,
        'posts_per_page' => $posts_per_page,
    ));
    $column_open = '';
    $column_closing = '';
    $col_open_last = '';
    $col_closing_last = '';
    $style = 'style="margin-bottom: 49px;"';
    switch ($column) {
        case 2:
            $col_open = '  <div class="one_half">';
            $column_closing = '</div>';
            $col_open_last = '<div class="one_half et_column_last">';
            $col_closing_last = '</div><div class="clear" '.$style.' ></div>';
            break;
        case 3:
            $col_open = '  <div class="one_third">';
            $column_closing = '</div>';
            $col_open_last = '<div class="one_third et_column_last">';
            $col_closing_last = '</div><div class="clear" '.$style.'></div>';
            break;
        case 4:
            $col_open = '  <div class="one_fourth">';
            $column_closing = '</div>';
            $col_open_last = '<div class="one_fourth et_column_last">';
            $col_closing_last = '</div><div class="clear" '.$style.'></div>';
            break;
        default:
            $col_open = '  <div class="">';
            $column_closing = '</div>';
            $col_open_last = '<div class="">';
            $col_closing_last = '</div><div class="clear" '.$style.'></div>';
            break;
    }

    $rows = 1;
    $list .= '<div style="text-align:center">';
    $closing ='</div>';
    $list = '<div class="wdd-wrapper '.$class.'">';
    while($tugz->have_posts())  : $tugz->the_post();

         if ($rows < $column) {
            $list .= $col_open; 
            $rows++;
            $closing = $column_closing;   
        }else{
            $list .= $col_open_last;
            $rows = 1;
            $closing =  $col_closing_last;
        }
       $list .= do_shortcode( get_post($layout_id)->post_content);
       $list .= $closing;
        
    endwhile;
    $list .= '</div>';

    wp_reset_query();
    return $list;

}
    add_shortcode( 'wdd_post', 'display_post' );