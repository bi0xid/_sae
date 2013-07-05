<?php	 	
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _SAE
 */
?>

	  </div><!-- #main -->
	</div><!-- #page -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-inner">

      <div id="widget-footer" class="widget-area fleft" role="complementary">
        <?php	 	 if ( ! dynamic_sidebar( 'footer-widgets' ) ) : ?>
     
        <?php	 	 endif; // end sidebar widget area ?>
      </div><!-- #widget-footer -->

      <nav id="site-navigation-two" class="navigation-main" role="navigation">
        <?php	 	 wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
      </nav><!-- #site-navigation -->
      
    </div><!-- /.footer-inner -->
  </footer><!-- #colophon -->

<?php	 	 wp_footer(); ?>

</body>
</html>
