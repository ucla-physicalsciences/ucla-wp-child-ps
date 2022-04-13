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
<div class="header-fix">
<div class="header-fix-logo">
<div class="header-fix-logo__wrap">
<a href="http://ucla.edu"><img class="header-logo__image" src="/wp-content/themes/ucla-wp/images/ucla_logo_white.svg" alt="UCLA Logo"></a> <!-- logo linked to UCLA.edu site -->
</div>
</div>
<div class="site-name-fix">
<div class="site-name-fix__wrap">
 <a  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
<?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
</div>
</div>
<div class="nav-wrap-fix">
<nav id="menu-fix">
<div class="menu-fix-main-menu-container">

</div>
</nav>
</div>
</div>
