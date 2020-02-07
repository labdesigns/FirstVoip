</div><!-- #content -->

<footer class="footer--wrapper">
	<hr>
	<div class="footer80">
		<div class="footer-row">
			<div class="footer-post1">
				<h3>
					<p>First</p>
					<p class="footer-voip">&nbsp;Voip</p>
				</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu mollis mauris, id tristique nibh. Etiam ut libero cursus, tristique odio eu, sodales dui. </p>
			</div>
			<?php
			function get_menu_by_location($location)
			{
				if (empty($location)) return false;

				$locations = get_nav_menu_locations();
				if (!isset($locations[$location])) return false;

				$menu_obj = get_term($locations[$location], 'nav_menu');

				return $menu_obj;
			}


			$location = 'footer-menu';
			$menu_obj = get_menu_by_location($location);
			wp_nav_menu(array('theme_location' => $location, 'items_wrap' => '<h3>' . esc_html($menu_obj->name) . '</h3><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>'));

			$location = 'footer-menu2';
			$menu_obj = get_menu_by_location($location);
			wp_nav_menu(array('theme_location' => $location, 'items_wrap' => '<h3>' . esc_html($menu_obj->name) . '</h3><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>'));
			?>
			<div class="footer-post2">
				<h3>Subscribe</h3>
				<p>Abonneer u om korte updates over wat er nieuw is bij First Voip.</p>
				<p>nieuwsbrief form</p>
			</div>
		</div><!-- .footer-row -->
		<div class="footer-row">
			<div class="footer-copyr">© 2019 First Voip. Developed by <a href="https://labdesigns.nl" target="_blank">Labdesigns</a></div>
			<div class="footer-priv"><?php $location = 'footer-menu3';
										$menu_obj = get_menu_by_location($location);
										wp_nav_menu(array('theme_location' => $location, 'before' => "|&nbsp;&nbsp;&nbsp;&nbsp;"));
										?> </div>
			<div class="footer-social">
				<a href="http://facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
				<a href="http://twitter.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
				<a href="http://linkedin.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
				<a href="http://vimeo.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-vimeo-v"></i></a>
				<a href="http://pinterest.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-pinterest-p"></i></a>
			</div>
		</div>
	</div><!-- .footer80 -->
</footer><!-- #footer -->
</div><!-- #main-page-container -->

<?php wp_footer(); ?>

</body>

</html>