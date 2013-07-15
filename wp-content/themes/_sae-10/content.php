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
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php _sae_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
    
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="img-wrap">
      <?php the_post_thumbnail(); ?>

     <!-- <div class="img-description">
        <?php echo get_post(get_post_thumbnail_id())->post_content; ?>
      </div>-->
    </div><!-- /.img-wrap -->
    <?php endif; ?>
	</header><!-- .entry-header -->

	
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	
	<footer class="entry-meta footer-entry-meta">
	<!--[if lte IE 8]>
	<div class="entry-meta footer-entry-meta">
	<![endif]-->
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php	 	
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', '_sae' ) );
				if ( $categories_list && _sae_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', '_sae' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php	 	
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', '_sae' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"> | </span>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', '_sae' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		
		<span class="comments-link"><?php comments_popup_link( __( '| Deja un comentario', '_sae' ), __( '| 1 Comentario', '_sae' ), __( '| % Comentarios', '_sae' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', '_sae' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
		<!--[if lte IE 8]>
		</div>
		<![endif]-->
	</footer><!-- .entry-meta -->
<!--[if lte IE 8]>
</div>
<![endif]-->
</article><!-- #post-## -->
<script type="text/javascript">
	$('#post-<?php the_ID(); ?>').append($('#post-<?php the_ID(); ?> .entry-summary .sharedaddy'));
</script>

