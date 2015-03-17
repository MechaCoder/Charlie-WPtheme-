<?php
//import Boostrap
function MT1_theme_style(){
	wp_enqueue_style( 'boot_strap1' , get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'boot_strap2' , get_template_directory_uri() . '/css/bootstrap-theme.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'MT1_theme_style' );

function themes_JS(){
	global $wp_script;
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '','' , false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '','', false);
	//
	$wp_script->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_script->add_data( 'respond_js', 'conditional', 'lt IE 9' );
	wp_enqueue_script('bootstrap_js', get_template_directory() . '/js/bootstrap.min.js', array('jquery'),'',true );
}

// *** --- Menu --- ***
function reg_header_menu(){	
	register_nav_menu('header-menu', 'header Menu');
}
add_action('init','reg_header_menu');

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div id="cust_menu_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function Foot_left() {

	register_sidebar( array(
		'name'          => 'Footer Left',
		'id'            => 'FootLeft',
		'before_widget' => '<div id="cust_menu_widgetL">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'Foot_left' );


//Footer Widget Areas
function Foot_center() {

	register_sidebar( array(
		'name'          => 'Footer Center',
		'id'            => 'FootCenter',
		'before_widget' => '<div id="cust_menu_widgetC">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'Foot_center' );

function Foot_right() {

	register_sidebar( array(
		'name'          => 'Footer Right',
		'id'            => 'Footright',
		'before_widget' => '<div id="cust_menu_widgetR">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'Foot_right' );


function blog_sidebar() {

	register_sidebar( array(
		'name'          => 'blog sidebar',
		'id'            => 'blog_sidebar',
		'before_widget' => '<div id="cust_menu_widgetR">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'blog_sidebar' );

// Admin Customization 
function Charile1_admin_color_scheme(){
	$key = 'Prouders-Color';
	$name = 'mats scheme';
	$url = (get_stylesheet_directory_uri() . '/Admin-Color/my-colors/colors2.css');
	$colors = array( '#384047', '#5BC67B', '#838cc7', '#ffffff' );
	wp_admin_css_color( $key, $name, $url, $colors );
};
add_action( 'admin_init',  'Charile1_admin_color_scheme');

function Charile1_admin_page_block(){
	remove_menu_page( 'themes.php' );
	remove_menu_page( 'plugins.php' );
	remove_menu_page( 'tools.php' );
	remove_menu_page( 'options-general.php' );
}
//add_action( 'admin_menu', 'Charile1_admin_page_block' );


?>