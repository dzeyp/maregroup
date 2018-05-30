<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

		<div class="row footer">
			<div class="col-12 text-center">
				<div class="row limit">
					<div class="col-12 col-md-4">
						<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/anchor.png"> -->
						<img src="https://d30y9cdsu7xlg0.cloudfront.net/png/455410-200.png">
						<p>Coolsingel 104<br>3011 AG Rotterdam<br>The Netherlands<br>+31.10.842 57 97<br><a href="mailto:global@mareforum.com">global@mareforum.com</a></p>
					</div>
					<div class="col-12 col-md-4">
						<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/anchor.png"> -->
						<img src="http://www.takiwall.com/img/html5switch/485-9.png">
						<p>905 Prime Tower<br>Business Bay, Dubai<br>United Arab Emirates<br>+971 50 937 0380<br><a href="mailto:info@mare.group">info@mare.group</a></p>
					</div>
					<div class="col-12 col-md-4">
						<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/anchor.png"> -->
						<img src="http://www.backyardtravel.com/wp-content/uploads/2015/07/China-18.png">
						<p>1705 Bonham Trade Centre<br>50 Bonham Strand, Sheung Wan<br>Hong Kong<br>+852 2661 0847<br>info@startupregistry.hk</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row post-footer" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/map.jpg" data-speed="0.4">
			<div class="col-12"></div>
		</div>
	</div>
</div><!-- #page we need this extra closing tag here -->

<div class="goto-top">
	<a data-scroll href="#home"><i class="fas fa-arrow-up"></i></a>
</div>

<?php wp_footer(); ?>

<script>
	var scroll = new SmoothScroll('a[href*="#"]');

	var mySwiper = new Swiper ('.swiper-container', {
		loop: true,
		autoplay: {
			delay: 4000,
		},
		effect: 'fade',
	})
</script>

</body>

</html>

