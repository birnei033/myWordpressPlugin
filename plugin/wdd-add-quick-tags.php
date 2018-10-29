<?php 
function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script type="text/javascript">
    QTags.addButton( 'wdd_show_content', 'post-content', '[post-content]');
    QTags.addButton( 'wdd_show_excerpt', 'post-excerpt', '[post-excerpt length="-1"]');
    QTags.addButton( 'wdd_show_thumbnail', 'post-thumbnail', '[post-thumbnail size="full"]');
    QTags.addButton( 'wdd_show_permalink', 'post-link', '[post-link]');
    QTags.addButton( 'wdd_show_title', 'title', '[title]');
    QTags.addButton( 'divi_button_shortcode', 'divi_button', '[divi_button alignment="left" href="#"]','[/divi_button]');
    QTags.addButton( 'wdd_get_acf_field', 'get-field', '[get-field key=""]');
    QTags.addButton( 'wdd_get_acf_field', 'pagination', '[pagination]');
    
    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );
if ($_GET['page'] === 'wdd-setting') {
function et_add_simple_buttons2(){
    wp_print_scripts( 'quicktags' );
	$output = "<script type='text/javascript'>\n
	/* <![CDATA[ */ \n";
	$buttons = array();
	$buttons[] = array('name' => 'raw',
					'options' => array(
						'display_name' => 'raw',
						'open_tag' => '\n[raw]',
						'close_tag' => '[/raw]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'one_half',
					'options' => array(
						'display_name' => 'one half',
						'open_tag' => '\n[one_half]',
						'close_tag' => '[/one_half]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'one_half_last',
					'options' => array(
						'display_name' => 'one half last',
						'open_tag' => '\n[one_half_last]',
						'close_tag' => '[/one_half_last]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'one_third',
					'options' => array(
						'display_name' => 'one third',
						'open_tag' => '\n[one_third]',
						'close_tag' => '[/one_third]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'one_third_last',
					'options' => array(
						'display_name' => 'one third last',
						'open_tag' => '\n[one_third_last]',
						'close_tag' => '[/one_third_last]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'one_fourth',
					'options' => array(
						'display_name' => 'one fourth',
						'open_tag' => '\n[one_fourth]',
						'close_tag' => '[/one_fourth]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'one_fourth_last',
					'options' => array(
						'display_name' => 'one fourth last',
						'open_tag' => '\n[one_fourth_last]',
						'close_tag' => '[/one_fourth_last]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'two_third',
					'options' => array(
						'display_name' => 'two third',
						'open_tag' => '\n[two_third]',
						'close_tag' => '[/two_third]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'two_third_last',
					'options' => array(
						'display_name' => 'two third last',
						'open_tag' => '\n[two_third_last]',
						'close_tag' => '[/two_third_last]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'three_fourth',
					'options' => array(
						'display_name' => 'three fourth',
						'open_tag' => '\n[three_fourth]',
						'close_tag' => '[/three_fourth]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'three_fourth_last',
					'options' => array(
						'display_name' => 'three fourth last',
						'open_tag' => '\n[three_fourth_last]',
						'close_tag' => '[/three_fourth_last]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'three_fourth_last',
					'options' => array(
						'display_name' => 'three fourth last',
						'open_tag' => '\n[three_fourth_last]',
						'close_tag' => '[/three_fourth_last]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'box',
					'options' => array(
						'display_name' => 'box',
						'open_tag' => '\n[box type="shadow"]',
						'close_tag' => '[/box]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'tooltip',
					'options' => array(
						'display_name' => 'tooltip',
						'open_tag' => '[tooltip text="Tooltip Text"]',
						'close_tag' => '[/tooltip]',
						'key' => ''
					));
	$buttons[] = array('name' => 'learn_more',
					'options' => array(
						'display_name' => 'learn_more',
						'open_tag' => '\n[learn_more caption="Click here to learn more"]',
						'close_tag' => '[/learn_more]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'slider',
					'options' => array(
						'display_name' => 'slider',
						'open_tag' => '\n[slider]',
						'close_tag' => '[/slider]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'slide',
					'options' => array(
						'display_name' => 'slide',
						'open_tag' => '\n[slide]',
						'close_tag' => '[/slide]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'button',
					'options' => array(
						'display_name' => 'button',
						'open_tag' => '\n[button link="#"]',
						'close_tag' => '[/button]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'digg',
					'options' => array(
						'display_name' => 'digg',
						'open_tag' => '\n[digg]',
						'close_tag' => '[/digg]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'stumble',
					'options' => array(
						'display_name' => 'stumble',
						'open_tag' => '\n[stumble]',
						'close_tag' => '[/stumble]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'facebook',
					'options' => array(
						'display_name' => 'facebook',
						'open_tag' => '\n[facebook]',
						'close_tag' => '[/facebook]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'twitter',
					'options' => array(
						'display_name' => 'twitter',
						'open_tag' => '\n[twitter name="name"]',
						'close_tag' => '[/twitter]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'retweet',
					'options' => array(
						'display_name' => 'retweet',
						'open_tag' => '\n[retweet]',
						'close_tag' => '[/retweet]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'feedburner',
					'options' => array(
						'display_name' => 'feedburner',
						'open_tag' => '\n[feedburner name="name"]',
						'close_tag' => '[/feedburner]\n',
						'key' => ''
					));
	$buttons[] = array('name' => 'protected',
					'options' => array(
						'display_name' => 'protected',
						'open_tag' => '\n[protected]',
						'close_tag' => '[/protected]\n',
						'key' => ''
					));
	for ($i=0; $i <= (count($buttons)-1); $i++) {
		$output .= "edButtons[edButtons.length] = new edButton('ed_{$buttons[$i]['name']}'
			,'{$buttons[$i]['options']['display_name']}'
			,'{$buttons[$i]['options']['open_tag']}'
			,'{$buttons[$i]['options']['close_tag']}'
			,'{$buttons[$i]['options']['key']}'
		); \n";
	}
	$output .= "\n /* ]]> */ \n
	</script>";
	echo $output;
}

	# code...
add_action('admin_head','et_add_simple_buttons2');
}