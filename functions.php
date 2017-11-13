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
    add_image_size('medium', 350, '', true); // Medium Thumbnail
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
if(!function_exists('buTheme_setup'))
{
	function buTheme_setup(){}
}
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
	// In both cases we display svg icon logo
	if (empty($output))
	$output = '<a class="logo" href="' . esc_url(home_url('/')) . '">
	<svg class="logo__img"><use xlink:href="#bu_logo"></use></svg><span class="nostyle">LinkedIn</span>
	</a>';
    echo $output;
}

// Changing the length of the post excerpt
function custom_excerpt_length( $length ) {
	return 12;
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
// "Advanced Custom Fields" stylesheet override
function my_head_input()
{
	wp_register_style('buTheme_css', get_template_directory_uri() . '/css/acf_custom.css', array(), '1.0', 'all');
	wp_enqueue_style('buTheme_css'); // Enqueue it!
}
// Adding "Advanced Custom Field" fields (ACF Plugin MUST be installed)

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_programs-info',
		'title' => 'Информация о курсе',
		'fields' => array (
			array (
				'key' => 'field_59f0c90f30e1f',
				'label' => 'Старт курса',
				'name' => 'start',
				'type' => 'date_picker',
				'display_format' => 'dd MM yy',
				'first_day' => 1,
				'required' => 1,
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
				'key' => 'field_5a0079ebe250a',
				'label' => 'Идет набор',
				'name' => 'current',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 0,
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
			// array (
			// 	'key' => 'field_59f0cb9b30e23',
			// 	'label' => 'Стоимость',
			// 	'name' => 'price',
			// 	'type' => 'number',
			// 	'required' => 1,
			// 	'default_value' => '',
			// 	'placeholder' => '',
			// 	'prepend' => '',
			// 	'append' => 'грн',
			// 	'min' => '',
			// 	'max' => '',
			// 	'step' => '',
			// ),
			array (
				'key' => 'field_59f5de861bfb1',
				'label' => 'Дни недели',
				'name' => 'week',
				'type' => 'checkbox',
				'choices' => array (
					'пн' => 'пн',
					'вт' => 'вт',
					'ср' => 'ср',
					'чт' => 'чт',
					'пт' => 'пт',
					'сб' => 'сб',
					'вс' => 'вс',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5a00c4cc6d6d1',
				'label' => 'Сложность курса',
				'name' => 'level',
				'type' => 'radio',
				'choices' => array (
					1 => 'start',
					2 => 'medium',
					3 => 'pro',
					4 => 'advanced',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '1',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5a036b5a7beb9',
				'label' => 'Учитель',
				'name' => 'teacher',
				'type' => 'user',
				'role' => array (
					0 => 'teacher',
				),
				'field_type' => 'multi_select',
				'allow_null' => 0,
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
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));	
}
// if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_programs-price',
		'title' => 'Стоимость курса',
		'fields' => array (
			array (
				'key' => 'field_59fb563822517',
				'label' => 'Стоимость',
				'name' => 'price',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'price_all' => 'весь курс',
					'month_price' => 'за месяц',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_59fb56ac9edff',
				'label' => 'Стоимость в месяц',
				'name' => 'month_price',
				'type' => 'number',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_59fb563822517',
							'operator' => '==',
							'value' => 'month_price',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_59fb56c79ee00',
				'label' => 'Стоимость всего курса',
				'name' => 'price_all',
				'type' => 'number',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_59fb563822517',
							'operator' => '==',
							'value' => 'price_all',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_59fb57156f0df',
				'label' => 'Валюта',
				'name' => 'currency',
				'type' => 'select',
				'choices' => array (
					'UAH' => 'UAH',
					'$' => 'USD',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
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
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_events-info',
		'title' => 'Информация о мероприятии',
		'fields' => array (
			array (
				'key' => 'field_59f4ccaaa2948',
				'label' => 'Дата мероприятия',
				'name' => 'start',
				'type' => 'date_picker',
				'display_format' => 'dd MM yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_59f4cd3ba7bd7',
				'label' => 'Время мероприятия',
				'name' => 'time',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			 array (
				'key' => 'field_59f5de861bfb1',
				'label' => 'Дни недели',
				'name' => 'week',
				'type' => 'checkbox',
				'choices' => array (
					'пн' => 'пн',
					'вт' => 'вт',
					'ср' => 'ср',
					'чт' => 'чт',
					'пт' => 'пт',
					'сб' => 'сб',
					'вс' => 'вс',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_59fe612bbac11',
				'label' => 'Ссылка на регистрацию',
				'name' => 'btn_url',
				'type' => 'text',
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
					'value' => buTheme_slugid('events'),
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_projects',
		'title' => 'Информация о проекте',
		'fields' => array (
			array (
				'key' => 'field_5a0363234fbdd',
				'label' => 'Ссылка',
				'name' => 'link',
				'type' => 'text',
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
					'value' => buTheme_slugid('projects'),
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
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
add_action('acf/input/admin_head', 'my_head_input'); // "Advanced Custom Fields" stylesheet override

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
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); // Changing the length of the post excerpt (number of words set in the function)

/*------------------------------------*\
	 Custom user role
\*------------------------------------*/
// Add a custom user role
  
$result = add_role( 'teacher', __(
	
  'Учитель' ),
	
  array(
	
  'read' => true, // true allows this capability
  'edit_posts' => false, // Allows user to edit their own posts
  'edit_pages' => false, // Allows user to edit pages
  'edit_others_posts' => false, // Allows user to edit others posts not just their own
  'create_posts' => false, // Allows user to create new posts
  'manage_categories' => false, // Allows user to manage post categories
  'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
  'edit_themes' => false, // false denies this capability. User can’t edit your theme
  'install_plugins' => false, // User cant add new plugins
  'update_plugin' => false, // User can’t update any plugins
  'update_core' => false // user cant perform core updates
	
  )
	
  );


?>