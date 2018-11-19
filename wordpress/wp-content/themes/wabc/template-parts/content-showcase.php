
<div class="wrapper" id="wrapper-showcase-pages">
	<div class="container">
		<div class="">
			<div id="TKcontent-showcase-pages" class="row">
				<?php
				// Get pages set in the customizer (if any)
				$pages = array();
				$mod = get_theme_mod( 'showcase-page' );
				if ( 'page-none-selected' != $mod ) {
					$pages[] = $mod;
				}
				$args = array(
					'posts_per_page' => 5,
					'post_type' => 'page',
					'post__in' => $pages,
					'orderby' => 'post__in'
				);
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) : $query->the_post();
					$frontpage_id = get_option( 'page_on_front' );
					$selectedpage_id = get_the_ID();
				?>
				<div class="col-md-12 columns">
					<div class="tk-block">
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'featured' ); ?>>
							<header class="entry-header">
								<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
							</header><!-- .entry-header -->
							<?php
							if($frontpage_id == $selectedpage_id){
              echo('<div class="alert alert-danger fade in">');
              echo("<h2>Please select another page!</h2>");
							echo('<p> This page is set up as a wordpress static front page, the links will direct you to the front page of your website instead of article page.');
              echo('</div>');
							}?>

								<?php $exc = get_theme_mod('showcase-full-page');
								if ('' != $exc) {
									switch ($exc) {
										case 'excerpt':
										?>
										<div class="entry-summary clearfix">
											<?php the_post_thumbnail();
											the_excerpt();?>
										</div>
										<?php
										break;
										case 'full':
										?>
										<div class="entry-content clearfix">
											<?php the_post_thumbnail();
											the_content(); ?>
											</div>
											<?php
											break;
									}
								};
								?>

						</article><!-- #post-## -->
					</div>
				</div>
				<?php endwhile; };?>
		  </div>
		</div>
	</div>
</div>
