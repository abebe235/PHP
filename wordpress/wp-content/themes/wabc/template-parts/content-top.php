<?php
/**
 * The template part for displaying a top content, pages above main content and below slider sidebar area, up to 3 pages
 *
 * @package wabc
 */
?>
<div class="wrapper" id="wrapper-top-pages">
  <div class="container">
    <div class="">
    <div id="TKcontent-pages" class="row">



<?php
// Get pages set in the customizer (if any)
$pages = array();
for ($count = 1; $count <= 4; $count++) {
    $mod = get_theme_mod('top-page-' . $count);
    if ('page-none-selected' != $mod) {
        $pages[] = $mod;
    }
}
$args = array(
    'posts_per_page' => 3,
    'post_type' => 'page',
    'post__in' => $pages,
    'orderby' => 'post__in'
);
//layout wrapper
?>

<?php
$query = new WP_Query($args);
$result = get_posts($args);
$number_of_pages = count($result);
if ($query->have_posts()) :
    $count = 1;
?>

<?php
    while ($query->have_posts()) : $query->the_post();
    $frontpage_id = get_option( 'page_on_front' );
    $selectedpage_id = get_the_ID();
    if (2 ==  $number_of_pages) {
        ?>
		<div class="col-sm-6 col-md-6 columns">
			<div class="tk-block">
        <div class="eqh">
	<?php

    } elseif (3 ==  $number_of_pages) {
        ?>
		<div class="col-sm-4 col-md-4 columns">
			<div class="tk-block">
        <div class="eqh">
	<?php

    } elseif (1 ==  $number_of_pages) {
        ?>
		<div class="col-md-12 columns">
			<div class="tk-block">
        <div class="eqh">
	<?php

    }
    ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('featured-' . $count); ?>>

			<header class="entry-header">

				<?php the_title(sprintf('<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
			</header><!-- .entry-header -->
      <?php
      if($frontpage_id == $selectedpage_id){
      echo('<div class="alert alert-danger fade in">');
      echo("<h2>Please select another page!</h2>");
      echo('<p> This page is set up as a wordpress static front page, the links will direct you to the front page of your website instead of article page.');
      echo('</div>');
      }?>
      <?php
      $exc = get_theme_mod('top-full-page-'. $count);
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
           case 'full': ?>
           <div class="entry-content clearfix">
                              <?php the_post_thumbnail();
                              the_content();?>
                            </div>
           <?php break;
         }
      };
      ?>
				<?php //the_excerpt();?>
				<?php// the_content();?>

			<?php $count++; ?>

		</article><!-- #post-## -->
	</div>
</div>
</div> <?php //end od class = eqh?>
	<?php

    endwhile;
else :
    if (current_user_can('customize')) {
        ?>
		<div class="message">
			<p><?php _e('There are no pages available to display.', 'wabc'); ?></p>
			<p><?php printf(
                __('These pages can be set in the <a href="%s">customizer</a>.', 'wabc'),
                admin_url('customize.php?autofocus[control]=showcase')
            ); ?>
			</p>
		</div>
	<?php

    }
endif;
?>
			</div>
		</div>
	</div>
</div>
