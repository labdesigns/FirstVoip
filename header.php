<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title();?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>
	<div class="super--wrapper">

		<header class="nav-header">
			<div class="topbar-wrapper">
				<div class="topbar80">
					<div class="topbar-slogan">De eerste uitstraling naar uw klanten toe…</div>
					<div class="topbar-social">
						<a href="http://facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
						<a href="http://twitter.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
						<a href="http://linkedin.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
						<a href="http://vimeo.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-vimeo-v"></i></a>
						<a href="http://pinterest.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-pinterest-p"></i></a>
					</div>
					<div class="topbar-contact">
						<div class="topbar-phone"><a href="tel:+316xxxxxxxx"><i class="fas fa-phone-volume"></i>06xxxxxxxx</a></div>
						<div class="topbar-mail"><a href="mailto:support@dummymail.nl"><i class="far fa-envelope"></i>support@dummymail.nl</a></div>
					</div>
				</div>
			</div>
			<div class="nav-wrapper">
				<div class="nav80">
					<div class="site-branding">
						<?php
							if (function_exists('the_custom_logo')) {
								the_custom_logo();
							}
							if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
							else :
						?>
								<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
							endif;
							$theme_description = get_bloginfo('description', 'display');
							if ($theme_description || is_customize_preview()) :
						?>
								<p class="site-description"><?php echo $theme_description; /* WPCS: xss ok. */ ?></p>
																															<?php endif; ?>
					</div><!-- .site-branding -->
								<div id="nav-burger" class="nav-burger" onclick="openModal()"><hr>
								<hr>
								<hr></div>
					<nav class="main-navigation">
						<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
					</nav><!-- site-navigation -->
				</div><!-- nav80 -->
			</div> <!-- nav-wrapper -->
		</header><!-- nav-header -->