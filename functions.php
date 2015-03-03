<?php
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
	register_nav_menu('header-menu', __('Header Menu'));
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
?>