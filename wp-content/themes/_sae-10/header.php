<?php	 	
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _SAE
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!-- <meta name="viewport" content="width=device-width; initial-scale=1"/> -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<style>
#fb9735872 {display: none;}
.fb9735872 {display: none;}
</style>

<?php wp_head(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/custom.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/browser_selector.js"></script>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/fonts/fonts.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/main.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/mq.css" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<!--[if lte IE 8]>
		<div id="masthead" class="site-header" role="banner">
		<![endif]-->
		<div class="site-branding">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<span class="skip"><?php bloginfo( 'name' ); ?></span>
					<img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="Logo Junta de Andalucía" title="Enlace al inicio" />
				</a>
			</h1>
			<h2 class="site-description">
				<span class="skip"><?php bloginfo( 'description' ); ?></span>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/logo-texto.png" alt="Emblema Consejería de Economía, innovación, ciencia y empleo" title="Consejería de Economía, innovación, ciencia y empleo" />
			</h2>
		</div>

    <div id="widget-cabecera" class="widget-area fright" role="complementary">
      <?php if ( ! dynamic_sidebar( 'header-widget' ) ) : ?>
        
      <?php endif; // end sidebar widget area ?>
    </div><!-- #widget-cabecera -->

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<!--[if lte IE 8]>
			<div id="site-navigation" class="navigation-main" role="navigation">
			<![endif]-->
			<h1 class="menu-toggle"><?php _e( 'Menú »', '_sae' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_sae' ); ?>"><?php _e( 'Skip to content', '_sae' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<!--[if lte IE 8]>
			</div>
			<![endif]-->
		</nav><!-- #site-navigation -->
		<!--[if lte IE 8]>
		</div>
		<![endif]-->
	</header><!-- #masthead -->

	<!-- sub-header section with selectable images -->
  <section id="random-header">
  <!--[if lte IE 8]>
		<div id="random-header">
		<![endif]-->
 	<?php $header_image = get_header_image();
	if ( ! empty( $header_image ) ) { ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
		</a>
	<?php } else { ?>
		    <img src="<?php bloginfo( 'template_url' ); ?>/img/cabecara-temporal.jpg" />
	<?php } // if ( ! empty( $header_image ) ) ?>
		<!--[if lte IE 8]>
		</div>
		<![endif]-->
  </section>

  <section id="breadcrub">
  	<!--[if lte IE 8]>
		<div id="breadcrub">
		<![endif]-->
		<!-- Breadcrumb -->
		<?php the_breadcrumb(); ?>
		<!-- Fin Breadcrumb -->
		<!--[if lte IE 8]>
		</div>
		<![endif]-->
	</section>
	
	<div id="main" class="site-main">
