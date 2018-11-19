<?php
/**
 * @package wabc
 */
?>
<?php
  if (is_active_sidebar('sidebarslideshow')) {
      ?>
<div class="wrapper" id="wrapper-slideshow-widget">
  <div class="container">

    <div class="row">
    <div id="TKslideshow">
    	<div class="col-md-12 slideshow">
    		<?php dynamic_sidebar('sidebarslideshow');
        ?>
    	</div>
    </div>
    </div> <!-- end of class="row" -->

</div>
</div>
    <?php } else {
      return;
    } ?>
