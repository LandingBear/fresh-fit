<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
		<?php require get_template_directory() . '/inc/customizer-style-injection.php'; ?>
		<link rel="stylesheet" href="https://use.typekit.net/aji1ugy.css">
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
					<!-- nav -->
					<nav class="ff-nav" role="navigation">
						<!-- logo -->
						<div class="ff-logo-container">
							<a href="<?php echo home_url(); ?>">
								<?php if ( get_theme_mod( 'your_theme_logo_alt' ) ) : ?>
										<img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" class="ff-logo" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
										<img src="<?php echo get_theme_mod( 'your_theme_logo_alt' ); ?>" class="ff-logo ff-logo-alternate" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
								<?php endif; ?>
							</a>
						</div>
						<!-- /logo -->
						<div class="ff-nav-links">
							<div class="ff-nav-links-left">
								<?php html5blank_nav(); ?>
							</div>
							<div class="ff-nav-links-right">
								<div class="social-block">
									<?php // check to see if the logo exists and add it to the page
										if ( get_theme_mod( 'your_facebook' ) ) : ?>
											<a href="<?php echo get_theme_mod( 'your_fb_link' ); ?>">
												<img src="<?php echo get_theme_mod( 'your_facebook' ); ?>" class="icon-img" alt="facebook" >
											</a>
										<?php endif; ?>
									<?php // check to see if the logo exists and add it to the page
										if ( get_theme_mod( 'your_insta' ) ) : ?>
											<a href="<?php echo get_theme_mod( 'your_insta_link' ); ?>">
												<img src="<?php echo get_theme_mod( 'your_insta' ); ?>" class="icon-img" alt="instagram" >
											</a>
										<?php endif; ?>
									<?php // check to see if the logo exists and add it to the page
										if ( get_theme_mod( 'your_linkedIn' ) ) : ?>
											<a href="<?php echo get_theme_mod( 'your_linkedIn_link' ); ?>">
												<img src="<?php echo get_theme_mod( 'your_linkedIn' ); ?>" class="icon-img" alt="linkedin" >
											</a>
										<?php endif; ?>
								</div>
							</div>
						</div>
					</nav>			
					<nav class="nav-mobile" role="navigation">
						<!-- logo -->
						<div class="nav-mobile-fixed">
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<?php
										// check to see if the logo exists and add it to the page
										if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
										
										<img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" class="logo-img" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
										
										<?php endif; ?>

								</a>
							</div>
							<div class="nav-mobile-right lb-align-vertical"><a class="nav-mobile-toggle">&#9776;</a></div>
						</div>
						<div class="nav-dropdown">
							<?php html5blank_nav(); ?>
						</div>
					</nav>

			</header>
			<!-- /header -->
