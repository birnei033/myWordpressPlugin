
<?php


function create_posttype() {
 
    register_post_type( 'wdd-cpt',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'WDD CPT' ),
                'singular_name' => __( 'WDD CPT' )
            ),
            'supports'  => array( 'title', 'editor'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'wdd-cpt'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
