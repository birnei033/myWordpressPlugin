
<?php


function create_posttype() {
 
    register_post_type( 'wdd-cpt',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'WDD CPT' ),
                'singular_name' => __( 'WDD CPT' )
            ),
            'supports'  => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'wdd-cpt'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
