<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<div class="ff-hero">
			<object data="<?php echo get_template_directory_uri() ?>/img/heros/header-geometry-1.svg" type="image/svg+xml"></object>
			<div class="lb-max-20 lb-header-container">
				<?php if ( get_theme_mod( 'your_theme_header_menu' ) ) : ?>
					<div class="lb-left-column">
						<div class="lb-hero-text lb-align-vertical lb-max-4">
							<h1 class="lb-light">FRESH FIT</h1>
							<h1>MENU</h1>
						</div>
					</div>
					<div class="lb-right-column">
						<div class="lb-hero-image" style="background-image: url('<?php echo get_theme_mod( 'your_theme_header_menu' ); ?>')"></div>
					</div>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'your_theme_header_menu' ) ) : ?>
					<div class="lb-left-column single-column">
						<div class="lb-hero-text lb-align-vertical lb-max-6">
							<h1 class="lb-light">FRESH FIT</h1>
							<h1>MENU</h1>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<?php get_sidebar(); ?>
		<div class="lb-sidebar-inline">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="lb-left-nav">
						<?php the_content(); ?>
					</div>

					<?php comments_template( '', true ); // Remove if you don't want comments ?>

					<br class="clear">

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>
		</div>
		<h2 style="text-align:center" class="lb-padding-bottom-10 lb-faq-link"><a href="http://localhost/wp/faq/">QUESTIONS? <strong>VISIT OUR FAQ PAGE!</strong></a></h2>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
