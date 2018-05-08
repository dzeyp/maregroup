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
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Oswald:600" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
	<div class="container-fluid">
		<div class="row main-nav">
			<div class="col-12">
				<div class="row limit">
					<div class="col-5 text-right">
						<ul>
							<li><a href="">HOME</a></li>
							<li><a href="">ABOUT US</a></li>
						</ul>
					</div>
					<div class="col-2 text-center">
						<h1 style="margin:0">MARE<br>GROUP</h1>
					</div>
					<div class="col-5">
						<ul>
							<li><a href="">OUR SERVICES</a></li>
							<li><a href="">CONTACT US</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="row slider" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/slider.jpg')">
			<div class="col-12"></div>
		</div>

		<div class="row content alt-bg">
			<div class="col-12">
				<div class="row limit">
					<div class="col-12 text-center">
						<h1>LOREM IPSUM</h1>
					</div>
					<div class="col-12 offset-md-2 col-md-8 text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row slider-alt" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/tanker.jpg')">
			<div class="col-12"></div>
		</div>

		<div class="row content">
			<div class="col-12">
				<div class="row limit">
					<div class="col-12 text-center">
						<h1>LOREM IPSUM</h1>
					</div>
					<div class="col-12 offset-md-2 col-md-8 text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-12 text-center">
						<div class="row">
							<div class="col-12 col-md-6">
								<ul>
									<li>Duis aute irure dolor in velit esse</li>
									<li>Reprehenderit in voluptate</li>
									<li>Velit esse cillum dolore</li>
									<li>Cillum dolore eu fugiat nulla pariatur</li>
								</ul>
							</div>
							<div class="col-12 col-md-6">
								<ul>
									<li>Excepteur sint occaecat</li>
									<li>Cupidatat non proident</li>
									<li>Sunt in culpa qui officia deserunt</li>
									<li>Mollit anim id est laborum</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row content-alt">
			<div class="col-12 top text-center">
				<div class="row limit">
					<div class="col-12">
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
						<!-- <div class="col-12 img text-center">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ship.png">
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-12 bottom text-center">
				<div class="row limit">
					<div class="col-12">
						<h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
					</div>
				</div>
			</div>
			<div class="col-12 bg" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/ship.png')">
				<div class="col-12 top text-center">
					<div class="row limit">
						<div class="col-12">
							<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
							<!-- <div class="col-12 img text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ship.png">
							</div> -->
						</div>
					</div>
				</div>
				<div class="col-12 bottom text-center">
					<div class="row limit">
						<div class="col-12">
							<h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
						</div>
					</div>
				</div>
			</div>
		</div>