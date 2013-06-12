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

      <div class="fleft">
        <aside id="social-links">
          <p>Síguenos en las redes sociales</p>
          <ul>
            <li><a href="#" title="Enlace a Twitter"><img src="<?php bloginfo( 'template_url' ); ?>/img/tt-ico.png" alt="Icono de Twitter" title="Enlace a Twitter" /></a></li>
            <li><a href="#" title="Enlace a Facebook"><img src="<?php bloginfo( 'template_url' ); ?>/img/fb-ico.png" alt="Icono de Facebook" title="Enlace a Facebook" /></a></li>
            <li><a href="#" title="Enlace a YouTube"><img src="<?php bloginfo( 'template_url' ); ?>/img/yt-ico.png" alt="Icono de YouTube" title="Enlace a YouTube" /></a></li>
            <li><a href="#" title="Enlace a RSS"><img src="<?php bloginfo( 'template_url' ); ?>/img/rss-ico.png" alt="Icono de sindicación vía RSS" title="Enlace a la sindicación vía RSS" /></a></li>
          </ul>
        </aside>
      </div><!-- /.fleft -->

      <div id="widget-footer" class="widget-area fright" role="complementary">
        <?php if ( ! dynamic_sidebar( 'footer-widgets' ) ) : ?>
     
        <?php endif; // end sidebar widget area ?>
      </div><!-- #widget-footer -->

    </div><!-- /.footer-inner -->
  </footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
