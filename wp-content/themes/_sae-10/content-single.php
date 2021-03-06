<?php	 	
/**
 * @package _SAE
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--[if lte IE 8]>
<div <?php post_class(); ?>>
<![endif]-->
	<header class="entry-header">
	<!--[if lte IE 8]>
	<div class="entry-header">
	<![endif]-->
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php _sae_posted_on(); ?>
		</div><!-- .entry-meta -->

		<?php if ( has_post_thumbnail() ) : ?>
    <div class="img-wrap">
      <?php the_post_thumbnail(); ?>
      <div class="img-description">
        <?php echo get_post(get_post_thumbnail_id())->post_content; ?>
      </div>
    </div><!-- /.img-wrap -->
    <?php endif; ?>
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

	<footer class="entry-meta">
	<!--[if lte IE 8]>
	<div class="entry-meta">
	<![endif]-->
		<?php	 	
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', '_sae' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', '_sae' ) );

			if ( ! _sae_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_sae' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_sae' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_sae' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_sae' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', '_sae' ), '<span class="edit-link">', '</span>' ); ?>
	<!--[if lte IE 8]>
	</div>
	<![endif]-->
	</footer><!-- .entry-meta -->
<!--[if lte IE 8]>
</div>
<![endif]-->
</article><!-- #post-## -->
