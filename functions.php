<?php
/**
 * Enqueue scripts and styles.
 */
function include_style_scripts()
{
	wp_enqueue_style('include_style-style', get_stylesheet_uri());
	wp_enqueue_style('UIkit css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css');
	wp_enqueue_style('main stylesheet', get_template_directory_uri() . '/css/main.css', false, '1.1', 'all');
	wp_enqueue_style('prefix-font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '4.6.1');

	wp_enqueue_script('UIkit minJs', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js');
	wp_enqueue_script('UIkit icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js');

	wp_enqueue_script('include_style-skip-link-focus-fix', get_template_directory_uri() . '/js/main.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'include_style_scripts');



function register_my_menu()
{
	register_nav_menu('header-menu', __('Header Menu'));
	register_nav_menu('footer-menu', __('footer Menu'));
	register_nav_menu('footer-menu2', __('footer Menu2'));
	register_nav_menu('footer-menu3', __('footer Menu3'));
}

add_action('init', 'register_my_menu');



function add_google_fonts()
{
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Barlow+Condensed|Poppins&font-display=auto', false);
}

add_action('wp_enqueue_scripts', 'add_google_fonts');


function theme_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'firstvoip'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'firstvoip'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'theme_widgets_init');


add_theme_support('custom-logo');
function themename_custom_logo_setup()
{
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array('site-title', 'site-description'),
	);
	add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

add_theme_support('post-thumbnails');
