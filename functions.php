<?php

function mSetThemeSupport() {
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mSetThemeSupport');

function mSetPageSupport() {
	add_post_type_support('page', 'excerpt');
}

add_action('init', 'mSetPageSupport');

function mSetMenus() {
	$menus = array(
		'footer' => 'footer menu'
	);
	register_nav_menus($menus);
}

add_action('init', 'mSetMenus');

function mGetStyles() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style('m-css-init', get_template_directory_uri() . "/css/init.css", array('m-css-bootstrap'), $version, 'all');
	wp_enqueue_style('m-css-index', get_template_directory_uri() . "/css/index.css", array('m-css-bootstrap'), $version, 'all');
	wp_enqueue_style('m-css-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), '4.5.2', 'all');
}

add_action('wp_enqueue_scripts', 'mGetStyles');

function mGetScripts() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_script('m-js-jquery', "https://code.jquery.com/jquery-3.5.1.js", array(), '3.5.1');
	wp_enqueue_script('m-js-masonry', "https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js", array(), '1.0.0', true);
	wp_enqueue_script('m-js-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.16.1', true);
	wp_enqueue_script('m-js-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), '4.5.2', true);
	wp_enqueue_script('m-js-init', get_template_directory_uri() . "/js/init.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'mGetScripts');
?>