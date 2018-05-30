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
						<div class="swiper-slide" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/group.jpg')">
							<div class="row">
								<div class="col-12 col-md-6 p-0 text-center">
									<div class="bg-color">
										<div class="text-holder">
											<h1>Mare Group</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="text-center">
												<a href="#about">Read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/slider.jpg')">
							<div class="row">
								<div class="col-12 col-md-6 p-0 text-center">
									<div class="bg-color">
										<div class="text-holder">
											<h1>Mare Forum</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="text-center">
												<a href="#mare-forum">Read more</a>
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
											<h1>Mare Consultants</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="text-center">
												<a href="#mare-consultants">Read more</a>
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

		<div id="about" class="row content alt-bg">
			<div class="col-12">
				<div class="row limit">
					<div class="col-12 text-center">
						<h1>Mare Group</h1>
					</div>
					<div class="col-12 offset-md-3 col-md-6">
						<p>The epicenter of the Maritime industry. Mare Group offers combines multiple maritime disciplines to create one powerhouse.</p>
						<p>Our mission is to accelerate the development of better information in the maritime sector. We build and support maritime companies by leveraging our insights and network.</p>
						<div class="text-center">
							<a href="mailto:hi@mare.group">hi@mare.group</a>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="maregroup" echelon="-1" role="dialog" aria-labelledby="maregroupModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
									<form class="text-left">
										<div class="form-group">
											<label for="exampleInputEmail1">Name</label>
											<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Email</label>
											<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Phone</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone">
										</div>
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Message</label>
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										</div>
									</form>
									</div>
									<div class="modal-footer">
										<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
										<button type="button" class="btn btn-success">Send</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row slider-alt" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/maregroup.jpg" data-speed="0.6">
			<div class="col-12"></div>
		</div>

		<div id="mare-forum" class="row content">
			<div class="col-12">
				<div class="row limit">
					<div class="col-12 text-center">
						<h1>Mare Forum (International)</h1>
					</div>
					<div class="col-12">
						<p>The Mare Forum conferences are considered by many to be among the most global and influential forums for the maritime industry. Currently events are held in Europe, North, Central and South America, Asia and the Middle East.</p>
						<p>Views are shared and debated from shipowners and ship-operators, charterers, traders, analysts, bankers, consultants and entrepreneurs, classification societies, regulators, maritime lawyers, port and terminal operators, yacht owners and yacht services representatives, the media and other members of the maritime community from the region and all over the world who take an active part at these prestigious conferences. The conferences provide an interactive forum to participants to network, learn, discuss and debate all contemporary and future themes in the shipping, marine, yachting  and maritime industries and the world.</p>
						<p>High level session chairmen, speakers, session panelists, discussion panelists and audience contribute to a day packed with knowledge transfer, exchange of visions, experience and stimulating discussions. The openly approach of this type of Mare Forum conferences produces a wonderful environment for brainstorming, sharing and improving knowledge and intelligence.</p>
						<p>Mare Forum collaborates with a large scope of international organizations, and in the process of expanding its research and promoting new projects, maintains an active network of forward-thinking, high-level individuals in a range of sectors.</p>
						<p>Mare Forum has frequently created groundbreaking and progressive concepts, developing them into conferences on an international level, and drawing worldwide attention. The international conferences of Mare Forum have attracted the active participation of governmental officers, policy makers and executives of the industry, and have resulted in the creation of new policy, effective networks and fresh perspectives of the future.</p>
						<p>Mare Forum’s goal is to bring together policy makers and chief executives of industry in a decisive dialogue and debate, where business strategy and policy-making for today and tomorrow’s issues can be realized with optimal results.</p>
						<div class="text-center">
							<a href="http://mareforum.com" target="_blank">www.mareforum.com</a><br class="mb-3"><a href="mailto:global@mareforum.com">global@mareforum.com</a>
						</div>
					</div>
					<!-- <div class="col-12 text-center">
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
					</div> -->
				</div>
			</div>
		</div>
		<div class="row slider-alt" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/mareforum.jpg" data-speed="0.6">
			<div class="col-12"></div>
		</div>

		<div id="mare-consultants" class="row content alt-bg">
			<div class="col-12">
				<div class="row limit">
					<div class="col-12 text-center">
						<h1>Mare Consultants</h1>
					</div>
					<div class="col-12 offset-md-3 col-md-6">
						<p>An independent boutique consultancy firm with over 25 years of experience in the maritime sector. Mare Consultants promises to blur the lines between ship-owning, operating, building, chartering & finance. Mare Consultants is Hong Kong based, but operates the seven seas</p>
						<div class="text-center">
							<a href="http://www.mare.consulting" target="_blank">www.mare.consulting</a><br class="mb-3"><a href="mailto:hello@mare.consulting">hello@mare.consulting</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row slider-alt" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/maregroup.jpg" data-speed="0.6">
			<div class="col-12"></div>
		</div>

		<div class="row content-alt">
			<div class="col-12 top">
				<div class="row limit">
					<div class="col-12 offset-md-3 col-md-6">
						<p style="margin:70px 0 130px; color:transparent">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<div class="col-12 bottom">
				<div class="row limit">
					<div class="col-12 offset-md-3 col-md-6">
						<p style="margin:130px 0 70px; color:transparent">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
			<div class="col-12 bg" style="height:100%; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/ship.png')"></div>
			<div style="position:absolute; width:100%">
				<div class="col-12 top" style="background:transparent">
					<div class="row limit">
						<div class="col-12 offset-md-3 col-md-6">
							<p style="margin:70px 0 130px; color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				</div>
				<div class="col-12 bottom" style="background:transparent">
					<div class="row limit">
						<div class="col-12 offset-md-3 col-md-6">
							<p style="margin:130px 0 70px">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php get_footer();
