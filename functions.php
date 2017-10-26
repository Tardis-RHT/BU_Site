<?php
/*
 *  Author: Tardis| @tardis
 *  URL: bu.com | @butheme
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
	add_theme_support('menus');
	
	//Add custom logo support
	add_theme_support('custom-logo');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('buTheme', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// buTheme navigation
function buTheme_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Register buTheme Blank Navigation
function register_buTheme_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'buTheme'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'buTheme'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'buTheme') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

//Adding custom logo in Theme Customizer
function buTheme_custom_logo() {
    // Try to retrieve the Custom Logo
    $output = '';
    if (function_exists('get_custom_logo'))
        $output = get_custom_logo();

    // Nothing in the output: Custom Logo is not supported, or there is no selected logo
	// In both cases we display svg icon logo and if there is no svg logo - the site's name
	if (empty($output))
	$output = '<a class="logo" href="' . esc_url(home_url('/')) . '"><img class="logo__img" src="' . get_template_directory_uri() . '/img/icons/svg_logo.svg" alt="' . get_bloginfo('name') . '"></a>';

    echo $output;
}

// SrcSet Images
function buTheme_src_set() {
	if( has_post_thumbnail() ) {
		$thumb_id = get_post_thumbnail_id();
		$thumb_alt = get_the_title( $thumb_id );
		$output = '';
		
		$output = 'alt="' . $thumb_alt . '" src="' . wp_get_attachment_image_url( $thumb_id ) . '" srcset="' . wp_get_attachment_image_srcset( $thumb_id, 'full' ) . '" sizes="' . wp_get_attachment_image_sizes( $thumb_id, 'full' ) . '"';
		
		echo $output;
	}
}

// Get the slug ID
function buTheme_slugid($slugid){
	$category = get_category_by_slug( $slugid );
	$catid = $category->term_id;
	return $catid;
}

//Adding Advanced Custom Field for News Caption (ACF Plugin Needed)
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_programs-info',
		'title' => 'programs-info',
		'fields' => array (
			array (
				'key' => 'field_59f0c90f30e1f',
				'label' => 'Старт',
				'name' => 'start',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59f0cab030e20',
				'label' => 'Время',
				'name' => 'time',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59f0cb2a30e21',
				'label' => 'Месяцев',
				'name' => 'month',
				'type' => 'number',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_59f0cb5130e22',
				'label' => 'Часов',
				'name' => 'hours',
				'type' => 'number',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_59f0cb9b30e23',
				'label' => 'Стоимость',
				'name' => 'price',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59f0cddbf4cd3',
				'label' => 'Дни',
				'name' => 'days',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => buTheme_slugid('programs'),
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));	
}



/*------------------------------------*\
	Actions
\*------------------------------------*/
add_action('init', 'register_buTheme_menu'); // Add buTheme Blank Menu
add_action('after_setup_theme', 'buTheme_setup'); //Adding custom logo in Theme Customizer

/*------------------------------------*\
	Filters
\*------------------------------------*/
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter( 'get_custom_logo', 'change_logo_class' ); // Changing "custom-logo-link" class to "logo" class in Site Logo
	function change_logo_class( $html ) {
		$html = str_replace( 'custom-logo', 'your-custom-class', $html );
		$html = str_replace( 'custom-logo-link', 'logo', $html );
		return $html;
	}
	




?>