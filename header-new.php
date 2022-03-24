<!DOCTYPE html>
<style>
@media only screen and (min-width: 1024px) {
  #header .site-name__wrap {
    max-width: 260px;
  }
}

@media only screen and (min-width: 1115px) {
#header .site-name__wrap {
  max-width: 400px;
}
}
@media only screen and (min-width: 1300px) {
  #header .site-name__wrap {
    max-width: 500px;
  }
}
</style>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
  </head>
<div class="header_new">
<div class="container">
<div class="header_logo"> </div>
<div class="nav">
<?php wp_nav_menu(
	array(
		'theme_location'=>'top-menu', 
		'menu_class'=>'top_bar',
));?>
</div>
</div>
</div>
