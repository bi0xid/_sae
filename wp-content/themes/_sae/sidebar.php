<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _SAE
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', '_sae' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', '_sae' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
    
    <aside id="social-links">
      <p>Síguenos en las redes sociales</p>
      <ul>
        <li><a href="#" title="Enlace a Twitter"><img src="<?php bloginfo( 'template_url' ); ?>/img/tt-ico.png" alt="Icono de Twitter" title="Enlace a Twitter" /></a></li>
        <li><a href="#" title="Enlace a Facebook"><img src="<?php bloginfo( 'template_url' ); ?>/img/fb-ico.png" alt="Icono de Facebook" title="Enlace a Facebook" /></a></li>
        <li><a href="#" title="Enlace a YouTube"><img src="<?php bloginfo( 'template_url' ); ?>/img/yt-ico.png" alt="Icono de YouTube" title="Enlace a YouTube" /></a></li>
        <li><a href="#" title="Enlace a RSS"><img src="<?php bloginfo( 'template_url' ); ?>/img/rss-ico.png" alt="Icono de sindicación vía RSS" title="Enlace a la sindicación vía RSS" /></a></li>
      </ul>
    </aside>
	</div><!-- #secondary -->
