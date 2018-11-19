<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0 ">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"><!--menuのフォント-->
    
    
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">

<!--タイトルを画像に-->
    <div class="site-title">
    <h1><a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/title.png" alt="<?php bloginfo( 'name' ); ?>"/>
    </a></h1>
    </div>

<!--タイトルを文字に-->
    <div class="site-title">
    <h1><a href="<?php echo home_url(); ?>">
      <?php bloginfo( 'name' ); ?>
    </a></h1>

<!--スマホ用メニューボタン --> 
    <button type="button" id="navbutton">
     <i class="fas fa-list-ul"></i>
    </button>
         
    </div><!-- site-title -->
  </div><!--end header-inner-->
  
  <!--ヘッダーメニュー-->
  <?php wp_nav_menu( array(
        'theme_location' => 'header-nav', //function.phpと共通になってる
        'container' => 'nav',
        'container_class' => 'header-nav',
        'container_id' => 'header-nav',
        'fallback_cb' => ''
  ) ); ?>



</header>
