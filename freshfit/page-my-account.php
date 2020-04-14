<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<div class="ff-hero my-account-alt" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/heros/Account-bg.png)">
			<div class="ff-my-account-hero" style="background-image: url('<?php echo get_theme_mod( 'your_theme_header' ); ?>')"></div>
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

		</section>
		<!-- /section -->
	</main>
