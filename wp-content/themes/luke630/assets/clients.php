<?php

add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'testimonial',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonials' ),
		'view_item'	=> __( 'View Testimonials')
      ),
	  'taxonomies' => array(),
      'public' => true,
      'has_archive' => true,
	  'supports'    => array( 'title', 'editor', 'thumbnail'),
      'rewrite' => array('slug' => 'testimonial'),
    )
  );
}