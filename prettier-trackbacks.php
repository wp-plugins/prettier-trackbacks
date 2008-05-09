<?php
/*
Plugin Name: Prettier Trackbacks
Plugin URI: http://wpguy.com/tips/customize-the-ellipsis-in-the-trackbacks/
Description: Replaces the "[...]" for just "...". Feel free to customize it by editing the plugin in the plugin editor
Version: 1.0.1
Author: Wessley Roche
Author URI: http://wpguy.com/
*/


// CHANGE THIS TO WHATEVER YOU WANT
$pt_replacement = "...";


// Prettier Trackbacks Function
function prettier_trackbacks($comment){
	global $pt_replacement;
	return str_replace("[...]", $pt_replacement, $comment);
}


// Hook the function
add_filter('comment_text', 'prettier_trackbacks');


?>