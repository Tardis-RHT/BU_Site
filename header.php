<head>
	<title><?php wp_title(''); if ( is_single() ) echo ' — ', bloginfo('name'); ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="<?php bloginfo('template_directory');?>/css/stylemin.css" rel="stylesheet" />
	<link href="<?php bloginfo('template_directory');?>/css/fonts.css" rel="stylesheet" />
	<?php wp_head() ?>
</head>