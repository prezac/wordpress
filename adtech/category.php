<?php get_header(); ?>

	<main class="center-content-full" role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Categories for ', 'adtech' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
