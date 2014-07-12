<?php
/*
Plugin Name: DM Blog Switcher
Plugin URI: http://designmissoula.com/
Description: Used by millions, to make WordPress Better. Uses simple shortcode to switch between blogs on a multi blog network.
Version: 3.0.2
Author: Bradford Knowlton
Author URI: http://bradknowlton.com
License: GPLv2 or later
Text Domain: blog-switcher
GitHub Plugin URI: https://github.com/DesignMissoula/DM-blog-switcher
GitHub Branch:     master
*/

function blog_switch_function( $atts ){
	$a = shortcode_atts( array(
        'blog_id' => '1'
    ), $atts );
    	
	switch_to_blog($a['blog_id']);

	return '';
}

add_shortcode( 'blog-switch', 'blog_switch_function' );

function blog_restore_function( $atts ){
	restore_current_blog();
	return '';
}

add_shortcode( 'blog-restore', 'blog_restore_function' );