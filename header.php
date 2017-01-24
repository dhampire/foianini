<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>

	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. Todos los derechos reservados.">

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />


	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/funciones.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<?php wp_head(); ?>




	</script>
</head>

<body>
<div class="container-fluid">
<div id="wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="site-navigation" role="navigation">
				<a class="mobile-trigger" href="javascript:void(0);"><span></span></a>
					<div class="clinica__icon">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-clinica.png" alt="">
						</a>
					</div>
					<?php wp_nav_menu( array('theme_location' => 'primary', 'menu_id' => 'primary-menu') ); ?>
			        <div class="icon__blog">
			        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog"><span class="icon-blog"></span></a>
			        </div>
		
				</a>
			</div>
		</div>
	</div>
	<div class="row top__cabecera">
		<div class="col-xs-12 col-sm-12 col-lg-3">
			<header class="header" role="banner">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-foianini.jpg"></a>
				</a>
			</header>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-4 col-lg-offset-5 vcenter">
				<div class="telefono">
					<a href="tel:3-3362211">
						<span class="numero">
							<span class="icon-telefono"></span>
							<span class="numero-chico">+591(3)</span><br /><span class="grande">336 2211<span>
						</span>
					</a>
				</div>
				<div class="social">
					<a href="https://goo.gl/maps/7MXmJnAmm4s" target="_blank">
							<span class="fa fa-map-marker pin"></span>
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>contacto"><span class="fa fa-envelope"></span></a>
					
					<a href="https://www.facebook.com/clinicafoianini/"><span class="fa fa-facebook"></span></a>
					<a href="#"><span class="fa fa-youtube"></span></a>
					<form id="search" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
					        <div id="label"><label for="s" id="search-label">Buscar</label></div>
					        <div id="input"><input type="text" name="s" id="search-terms" placeholder="Buscar..."></div>
					</form>
				</div>
		</div>
	</div>
	<main class="main">




