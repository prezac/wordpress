<?php get_header(); ?>

	<main class="center-content-full" role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>

			<h1><?php _e( 'Author Archives for ', 'adtech' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'adtech' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<!-- post title -->
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /Post title -->
				<?php adtechwp_excerpt('adtechwp_index'); // Build your custom callback length in functions.php ?>

				<!-- post details -->
               		        <span class="post-detail">
	                        <?php _e( 'Published by', 'adtech' ); ?> <?php the_author_posts_link(); ?> <?php the_date(); ?> <?php the_time(); ?> | 
        	                <?php _e( 'Categorised in: ', 'adtech' ); the_category(', ') ?> | <?php _e( 'This post was written by ', 'adtech' ); the_author_posts_link(); ?> | 
                	        <?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'adtech' ), __( '1 Comment', 'adtech' ), __( '% Comments', 'adtech' )); ?> | 
                        	<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
	                        </span>
				<!-- /post details -->

				<br class="clear">

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

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
