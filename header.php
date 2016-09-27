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

	<meta charset="<?php bloginfo('charset'); ?>">

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
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />


	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

		
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/funciones.js"></script>
	<?php wp_head(); ?>


	<?php wp_head(); ?>

	</script>
</head>

<body>
<div class="container-fluid">

	<!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->
	<div id="wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="site-navigation" role="navigation">
				<a class="mobile-trigger" href="javascript:void(0);"><span></span></a>
						<?php wp_nav_menu( array('theme_location' => 'primary', 'menu_id' => 'primary-menu') ); ?>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-lg-3">
			<header class="header" role="banner">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-foianini.jpg"></a>
				</a>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-6 vcenter">
			<div class="col-xs-6 col-sm-6 col-lg-5">
				<div class="col-xs-12 telefono">
					<div class="col-xs-12 col-sm-3 col-lg-3">
						<a href="tel:+591-3-3362211"><span class="icon-telefono"></span></a>
					</div>
					<div class="col-xs-12 col-sm-6 col-lg-9">
						<span id="numero">
						<a href="tel:+591-3-3362211">
							+591(3)<br /><span class="grande">336 2211<span>
						</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-lg-7">
				<div class="col-xs-12 direccion">
					<div class="col-xs-12 col-sm-3 col-lg-2">
						<a href="#"><span class="icon-pin"></span></a>
					</div>
					<div class="col-xs-12 col-sm-9 col-lg-10 direccion-texto">
						<a href="https://goo.gl/maps/7MXmJnAmm4s" target="_blank">
							<span><strong>Ingreso principal: </strong>Calle Chuquisaca #737<br><strong>Emergencias:</strong> Av. Irala # 468</span><br>
							Santa Cruz - Bolivia

					
						</a>
					</div>

				</div>	
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-3 vcenter">
				<div class="social">
					<a href="http://jlarteaga.com/foianini/blog"><span class="icon-blog"></span></a>
					<a href="https://www.facebook.com/clinicafoianini/"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="http://jlarteaga.com/foianini/contacto"><span class="icon-mail"></span></a>
						<form id="search" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
					        <div id="label"><label for="s" id="search-label">Buscar</label></div>
					        <div id="input"><input type="text" name="s" id="search-terms" placeholder="Buscar..."></div>
						</form>
				</div>
		</div>
		</header>
	</div>




