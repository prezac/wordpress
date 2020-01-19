<?php
get_header();
if ((get_post_meta( $post->ID, "sidebar-layout-dropdown", true)=="left")||(get_post_meta( $post->ID, "sidebar-layout-dropdown", true)=="both")){
?>
<aside class="left-sidebar" role="complementary">
	<?php get_template_part( 'sidebar', 'left' ); ?>
</aside>
<?php
}
switch (get_post_meta( $post->ID, "sidebar-layout-dropdown", true)){
	case "full":
		$cls="center-content-full";
	break;
	case "left":
		$cls="center-content-one";
	break;
	case "right":
		$cls="center-content-one";
	break;
	case "both":
		$cls="center-content-both";
	break;
}
?>
	<main class="<?php echo $cls;?>" role="main">
		<!-- section -->
		<section>
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'adtech' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php
if ((get_post_meta( $post->ID, "sidebar-layout-dropdown", true)=="right")||(get_post_meta( $post->ID, "sidebar-layout-dropdown", true)=="both")){
?>
<aside class="right-sidebar" role="complementary">
	<?php get_template_part( 'sidebar', 'right' ); ?>
</aside>
<?php
}
get_footer();
?>
