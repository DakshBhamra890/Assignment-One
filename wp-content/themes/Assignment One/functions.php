<?php
//Our Navigation
function mytheme_theme_setup(){
	register_nav_menus(array(
		'header' => 'Header menu',
		'Footer' => 'Footer menu'));
}
add_action( 'after_setup_theme', 'mytheme_theme_setup');
add_theme_support('post-thumbnails');
?>