<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

		the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');

		if ('post' === get_post_type()) :
			?>
			<div class="entry-meta">

			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
			<?php
				the_excerpt();
			?>
		<a href="<?php echo get_permalink(); ?>"> Read More...</a>

		<?php

			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'startertheme'),
				'after'  => '</div>',
			));
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->