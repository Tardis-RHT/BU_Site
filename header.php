<head>
	<title><?php wp_title(''); if ( is_single() ) echo ' — ', bloginfo('name'); ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/stylemin.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet" />
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N5WW265');</script>
	<!-- End Google Tag Manager -->
	<!-- add custom css for IE -->
	<?php
	$user_agent = $_SERVER["HTTP_USER_AGENT"];
	if (strpos($user_agent, "rv:11.0") !== false) {
		$uri = get_template_directory_uri();
		$html .= "<link href='{$uri}/ie.css' rel='stylesheet' />";
		echo $html;
	}	
	?>
	<!--[if IE 11]>
	<link href="<?php echo get_template_directory_uri(); ?>/ie.css" rel="stylesheet" />
	<![endif]-->
	<?php wp_head() ?>
</head>

