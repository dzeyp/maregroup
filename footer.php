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
					<div class="col-12">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/anchor.png">
						<p><i class="fas fa-map-marker-alt"></i> 905 Prime Tower, Business Bay<br>Dubai, United Arab Emirates, PO Box 414195<br><br><i class="fas fa-phone"></i> +971 50 937 0380<br><i class="fas fa-envelope"></i> info@mare.group</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row post-footer" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/map.png')">
			<div class="col-12 text-center"></div>
		</div>
	</div>
</div><!-- #page we need this extra closing tag here -->

<div class="goto-top">
	<a data-scroll href="#home"><i class="fas fa-arrow-up"></i></a>
</div>

<?php wp_footer(); ?>

<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

</body>

</html>

