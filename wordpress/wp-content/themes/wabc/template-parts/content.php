<?php
/**
 * @package wabc
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("animation-element"); ?>>

	<header class="entry-header CONTENT_PHP">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wabc_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

    <?php echo get_the_post_thumbnail( $post->ID , 'large' ); ?>

	<div class="entry-content">

            <?php
                the_excerpt();
            ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wabc' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wabc_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
