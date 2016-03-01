<?php 
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(300, 300, true);
 ?>