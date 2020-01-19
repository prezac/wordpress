<?php
/** Displays the footer widget area  */

if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'adtech' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-footer' ) ) {
			?>
					<div class="widget-column footer-widget-1">
					<?php dynamic_sidebar( 'sidebar-footer' ); ?>
					</div>
				<?php
		}
		?>
	</aside><!-- .widget-area -->

<?php endif; ?>
