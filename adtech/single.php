<?php get_header(); ?>

	<main class="center-content-full" role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<?php the_content(); // Dynamic Content ?>

			<!-- post details -->
			<span class="post-detail">
			<?php _e( 'Published by', 'adtech' ); ?> <?php the_author_posts_link(); ?> <?php the_date(); ?> <?php the_time(); ?> | 
			<?php _e( 'Categorised in: ', 'adtech' ); the_category(', ') ?> | <?php _e( 'This post was written by ', 'adtech' ); the_author_posts_link(); ?> | 
			<?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'adtech' ), __( '1 Comment', 'adtech' ), __( '% Comments', 'adtech' )); ?> | 
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			</span>
			<!-- /post details -->
			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'adtech' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
<?php get_footer(); ?>
