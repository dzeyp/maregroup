<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/smooth-scroll/src/js/smooth-scroll.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/css/swiper.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.min.js"></script>
	<?php wp_head(); ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax/parallax.min.js"></script>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
	<div class="container-fluid" id="home">
		<div class="row main-nav d-none d-md-block">
			<div class="col-12">
				<div class="row limit">
					<div class="col-5 text-right">
						<ul>
							<li><a data-scroll href="#about">ABOUT</a></li>
							<li><a data-scroll href="#mare-forum">MARE FORUM</a></li>
						</ul>
					</div>
					<div class="col-2 text-center logo">
						<h1 style="margin:0">MARE<br>GROUP</h1>
					</div>
					<div class="col-5">
						<ul>
							<li><a data-scroll href="#mare-consultants">MARE CONSULTANTS</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="row main-nav-mobile d-md-none">
			<div class="col-6 logo">
				<h1 style="margin:0">MARE<br>GROUP</h1>
			</div>
			<div class="col-6 text-right">
				<i class="fas fa-bars" data-toggle="collapse" href="#mobile-menu" role="button" aria-expanded="false" aria-controls="mobile-menu"></i>
			</div>
			<div class="col-12 text-center collapse" id="mobile-menu"">
				<ul>
					<li><a data-scroll href="#about">ABOUT</a></li>
					<li><a data-scroll href="#mare-forum">MARE FORUM</a></li>
					<li><a data-scroll href="#mare-consultants">MARE CONSULTANTS</a></li>
				</ul>
			</div>
		</div>
