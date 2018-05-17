<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header(); ?>

		<div class="row slider">
			<div class="col-12 p-0">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/slider.jpg')">
							<div class="row">
								<div class="col-12 col-md-6 p-0 text-center">
									<div class="bg-color">
										<div class="text-holder">
											<h1>Mare Forum</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="text-center">
												<a href="">Read more<br><i class="fas fa-angle-double-down"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/consultancy.jpg')">
							<div class="row">
								<div class="col-12 offset-md-6 col-md-6 p-0 text-center">
									<div class="bg-color">
										<div class="text-holder">
											<h1>Mare Consultancy</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="text-center">
												<a href="">Read more<br><i class="fas fa-angle-double-down"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
									<li><i class="fas fa-anchor"></i> Duis aute irure dolor in velit esse</li>
									<li><i class="fas fa-anchor"></i> Reprehenderit in voluptate</li>
									<li><i class="fas fa-anchor"></i> Velit esse cillum dolore</li>
									<li><i class="fas fa-anchor"></i> Cillum dolore eu fugiat nulla pariatur</li>
								</ul>
							</div>
							<div class="col-12 col-md-6">
								<ul>
									<li><i class="fas fa-anchor"></i> Excepteur sint occaecat</li>
									<li><i class="fas fa-anchor"></i> Cupidatat non proident</li>
									<li><i class="fas fa-anchor"></i> Sunt in culpa qui officia deserunt</li>
									<li><i class="fas fa-anchor"></i> Mollit anim id est laborum</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row content-alt" id="about">
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
				<!-- <div class="col-12 bottom text-center">
					<div class="row limit">
						<div class="col-12">
							<h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
						</div>
					</div>
				</div> -->
			</div>
		</div>

<?php get_footer();
