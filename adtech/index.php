<?php
get_header();
//$pageID = get_option('page_on_front');
$pageID = get_option( 'page_for_posts' );
if ((get_post_meta( $pageID, "sidebar-layout-dropdown", true)=="left")||(get_post_meta( $pageID, "sidebar-layout-dropdown", true)=="both")){
?>
<aside class="left-sidebar" role="complementary">
        <?php get_template_part( 'sidebar', 'left' ); ?>
</aside>
<?php
}
switch (get_post_meta( $pageID, "sidebar-layout-dropdown", true)){
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

               <?php
                if ( have_posts() ) {

                        // Load posts loop.
                        while ( have_posts() ) {
                                the_post();
                                get_template_part( 'template-parts/content/content' );
                        }

                        // Previous/next page navigation.
			get_template_part('pagination');

                } else {

                        // If no content, include the "No posts found" template.
                        get_template_part( 'template-parts/content/content', 'none' );

                }
                ?>
		</section>
		<!-- /section -->
	</main>
<?php
if ((get_post_meta( $pageID, "sidebar-layout-dropdown", true)=="right")||(get_post_meta( $pageID, "sidebar-layout-dropdown", true)=="both")){
?>
<aside class="right-sidebar" role="complementary">
        <?php get_template_part( 'sidebar', 'right' ); ?>
</aside>
<?php
}
get_footer();
?>

