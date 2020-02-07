<?php 
/*
*
Template Name: page-sidebar
*/
get_header(); ?>
<?php if (has_post_thumbnail()) {?>
<section  id="page-hero" class="hero-wrapper">
    <div class="hero-img">
    
       <?php  the_post_thumbnail('full'); ?>
    </div>
    <article class="hero-content">
	<h2><?php the_field('header_titel'); ?></h2>
    <?php the_field('header_content'); ?>
    </article>
</section><?php } ?>
<section  id="aside-main" class="main-section-wrapper">
	<main class="main">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'page');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<?php get_sidebar(); ?>
</section><!-- #primary -->
<?php
		get_footer();
