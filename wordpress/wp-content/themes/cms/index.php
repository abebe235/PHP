<?php get_header(); ?>
<div class="container">
  <div class="contents">
<p>index.php</p>
    
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class( 'kiji-list' ); ?>>
      <a href="<?php the_permalink(); ?>">
        <!--画像追加-->
        <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/no.png" alt="no-img"/>
        <?php endif; ?>
        <div class="text">
          <!--title-->
          <h2><?php the_title(); ?></h2>
          <!--投稿日-->
          <span class="kiji-date">
            <i class="fas fa-pencil-alt"></i>
            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </span>
          <!--category-->
          <?php if (!is_category()): ?>
            <?php if( has_category() ): ?>
              <span class="cat-data">
              <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              </span>
            <?php endif; ?>
          <?php endif; ?>
          <!--抜粋-->
          <?php the_excerpt(); ?>
        </div>
      </a>
    </article>
    <?php endwhile; endif; ?><!--loop終了-->

  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
