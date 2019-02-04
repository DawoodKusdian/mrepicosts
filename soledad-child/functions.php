<?php
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array(), rand(111,9999), 'all' );
}

/* Link & load custom child style */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

/* Remove website field from comments */
add_filter('comment_form_default_fields', 'remove_url');
 function remove_url($fields){
	 if(isset($fields['url']))
	 unset($fields['url']);
	 return $fields;
 }

/* Link & load custom child scripts
function wpb_adding_scripts() {
	wp_register_script('read-more', plugins_url('/js/read-more.js', __FILE__), array('jquery'),'1.1', true);
	wp_enqueue_script('read-more');
}	  
	add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  
	
*/
?>