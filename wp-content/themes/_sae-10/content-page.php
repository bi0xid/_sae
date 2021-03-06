<?php	 	
/**
 * The template used for displaying page content in page.php
 *
 * @package _SAE
 */
?>

<article id="post-<?php the_ID(); ?>" <?php	 	 post_class(); ?>>
<!--[if lte IE 8]>
<div <?php post_class(); ?>>
<![endif]-->
	<header class="entry-header">
	<!--[if lte IE 8]>
	<div class="entry-header">
	<![endif]-->
		<h1 class="entry-title"><?php the_title(); ?></h1>
	<!--[if lte IE 8]>
	</div>
	<![endif]-->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php	 	
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_sae' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_sae' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
<!--[if lte IE 8]>
</div>
<![endif]-->
</article><!-- #post-## -->
