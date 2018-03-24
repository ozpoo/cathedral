<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/fav.png?v=2" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png?v=2" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="format-detection" content="telephone=no">
		<meta name="keywords" content="<?php echo get_option( 'key_words', 'Default Text Optional' ); ?>">

		<meta property="og:title" content="<?php bloginfo('name'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/share.jpg?v=2">
		<meta property="og:url" content="<?php echo home_url( $wp->request ); ?>">
		<meta name="twitter:card" content="summary_large_image">

		<?php wp_head(); ?>
		<script>document.createElement( "picture" );</script>
	</head>

	<body <?php body_class(); ?>>
		<header></header>
