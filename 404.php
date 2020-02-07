<?php get_header(); ?>
<section id="err-main" class="main-section-wrapper">
	<main class="main">

<p><h1>Hello there !</h1></p>		
<p><h2>This is not the page you are looking for !</h2></p>
<p><h3>please use the menu's to navigate this website</h3></p>
<p>
	<div class="err-menu_flex">
		<?php wp_nav_menu(array('menu' => '6')); ?>
		<?php wp_nav_menu(array('menu' => '5')); ?>
		<?php wp_nav_menu(array('menu' => '7')); ?>
	</div>
</p>
	</main><!-- #main -->
</section><!-- #primary -->
<?php
		get_footer();
