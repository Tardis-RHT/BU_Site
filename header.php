<head>
	<title><?php wp_title(''); if ( is_single() ) echo ' — ', bloginfo('name'); ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/stylemin.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet" />
	<?php wp_head() ?>
</head>