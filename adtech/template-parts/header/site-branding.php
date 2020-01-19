<?php
/** Displays header site branding */
?>
<!-- site-branding -->
<div class="site-branding">
        <!-- logo -->
	<?php if ( has_custom_logo() ) { ?>
		<?php the_custom_logo();
	      }else{
		?>
	        <a class="custom=logo=link" href="<?php echo home_url(); ?>">
        		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="custom-logo">
                </a>
        <!-- /logo -->
	<?php } ?>
	<!-- site-branding-text -->
	<div class="site-branding-text">
		<?php if ( is_front_page() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
		<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) :
		?>
			<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- /site-branding-text -->
?>
</div><!-- /site-branding -->
