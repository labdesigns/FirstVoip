<?php get_header(); ?>
<section id="cat-main" class="main-section-wrapper">
	<main class="main">

		<?php
		if (have_posts()) :

			if (is_home() && !is_front_page()) :
				?>
				<header>
					<h1><?php single_post_title(); ?></h1>
				</header>
					<?php
			endif;

			/* Start the Loop */
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', 'cat');

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</main><!-- #main -->
</section><!-- #primary -->
<?php
		get_footer();
