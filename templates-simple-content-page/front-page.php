<?php /* Template Name: Front  Page Template */?>
<?php get_header();?>
<main id="main">
<header class="header">
<div class="ucla campus">
<br>
<h1>Welcome to the Atmospheric and Oceanographic Departmental Website at UCLA</h1><br>
<h2 class="yellow-side-header">Who are we?</h2><br><br>
<p class="lead"> Introductory description of the Department </p><p>Learn More statement?</p>
</div>
</header>
<!-- First ligne : Climate Statement; Diversity Statement ; Visitor Information
Second ligne: Employment; IT Documentation and Help; Research Vessel Zodiac
Third ligne: Fiveday Forecast: Weather Tour; Current Forecast-->
<div class="has-background-ucla-blue">
<div class="ucla campus">
 <?php the_content(); ?>
</div></div>
<div class =" ucla campus">
<br><br>
<h2 class="yellow-side-header spaced">Learn More</h2><br><br>
  <section class="tile__section tile__section--col-4">
    <span class="tile tile__background has-white-text">
      <a class="tile__link" href="http://aos.ucla.edu/about/">
        <h3 class="tile__title">About</h3>
      </a>
    </span>
    <span class="tile tile__background has-white-text">
      <a class="tile__link" href="http://aos.ucla.edu/news-events-3/">
        <h3 class="tile__title">News & Events</h3>
      </a>
    </span>
    <span class="tile tile__background has-white-text">
      <a class="tile__link" href="http://aos.ucla.edu/department-directory/">
        <h3 class="tile__title">Directory</h3>
      </a>
    </span>
    <span class="tile tile__background has-white-text">
      <a class="tile__link" href="http://aos.ucla.edu/students/">
        <h3 class="tile__title">Students</h3>
      </a>
    </span>
    <span class="tile tile__background has-white-text">
      <a class="tile__link" href="http://aos.ucla.edu/research/">
        <h3 class="tile__title">Research</h3>
      </a>
    </span>
    <span class="tile tile__background has-white-text">
      <a class="tile__link" href="http://aos.ucla.edu/giving/">
        <h3 class="tile__title">Giving</h3>
      </a>
    </span>
  </section>
<br><br><br>
</div></div>
</main>
<?php get_footer();?>
