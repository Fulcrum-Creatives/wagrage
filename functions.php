<?php

//add new image size for Sponsors and Affiliates

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'affiliate-thumb', 150, 150); //300 pixels wide (and unlimited height)
}

function wagrage_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Property Search Area'),
		'id' => 'buy-search',
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	
		register_sidebar( array(
		'name' => __( 'IDX Page Sidebar'),
		'id' => 'idx-sidebar',
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	
}
add_action( 'init', 'wagrage_widgets_init' );