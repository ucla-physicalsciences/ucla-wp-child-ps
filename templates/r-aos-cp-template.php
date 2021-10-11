<?php /* Template Name: R-AOS Chemistry and Physics Template */ ?>
<?php get_header(); ?>
<main id="main"> 
    <header class="header" >
      <div class="ucla campus">
        <div class="col span_12_of_12"><br>
  <div class="breadcrumb"><h2 class="yellow-side-header"><?php the_title(); ?></h2> 
</div>
      </div>
    </header>
    <div class="ucla campus">

      <div class="col span_9_of_12">
  <p>      <?php the_content(); ?></p>

       
      </div>
<!--Faculty Core-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Core Faculty</dt>
</button>
<dd class="accordion__content">
<?php

$args_second= array(
        'role' => 'faculty_full',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users_second=get_users($args_second);
$args_third= array(
        'role' => 'faculty_associate',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users_third=get_users($args_third);
$args_forth= array(
        'role' => 'faculty_assistant',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users_forth=get_users($args_forth);
$args_fifth= array(
        'role' => 'distinguished_professor',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users_fifth=get_users($args_fifth);
//Full
echo '<ul style="list-style:none;">';
foreach ( $users_second as $user ) {

	
?><div class="col span_5_of_12"> <?php 
wp_get_current_user(); if (is_object_in_term($user->ID,'atmospheric-chemistry-and-physics', 'research_field')) {
 echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    </div>
</article>
<?php '</li>';
}?></div><?php }
echo '</ul>';
//End Full
//Associate
echo '<ul style="list-style:none;">';
foreach ( $users_third as $user ) {
        
?><div class="col span_5_of_12"> <?php 
	wp_get_current_user(); if (is_object_in_term($user->ID,'atmospheric-chemistry-and-physics', 'research_field')) {
       	echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    </div>
</article>
<?php '</li>';
}?></div><?php }
echo '</ul>';
//End Associate
//Assistant
echo '<ul style="list-style:none;">';
foreach ( $users_forth as $user ) {
       
?><div class="col span_5_of_12"> <?php
	wp_get_current_user(); if (is_object_in_term($user->ID,'atmospheric-chemistry-and-physics', 'research_field')) {
      	echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    </div>
</article>
<?php '</li>';}
?></div><?php }
echo '</ul>';
//End Assistant
//Distinguished
echo '<ul style="list-style:none;">';
foreach ( $users_fifth as $user ) {
?><div class="col span_5_of_12"> <?php 
	wp_get_current_user(); if (is_object_in_term($user->ID,'atmospheric-chemistry-and-physics', 'research_field')) {
       	echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    </div>
</article>
<?php '</li>';}
?></div><?php }
echo '</ul>';
//End Distinguished
?>
</dd>
</dl>
</div>
<!--End Faculty Core-->
<!--Faculty Affiliated-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Affiliated Faculty</dt>
</button>
<dd class="accordion__content">
<?php

$args= array(
        'role' => 'faculty_affiliated',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
$args_second= array(
        'role' => 'faculty_adjunct',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users_second=get_users($args_second);
$args_third= array(
        'role' => 'faculty_emeritus',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users_third=get_users($args_third);
//AFFILIATED
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
        
?><div class="col span_5_of_12"> <?php
 wp_get_current_user(); if (is_object_in_term($user->ID,'atmospheric-chemistry-and-physics', 'research_field')) {
  echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    </div>
</article>
<?php '</li>';}
?></div><?php }
echo '</ul>';
//ADJUNCT
echo '<ul style="list-style:none;">';
foreach ( $users_second as $user ) {
        
?><div class="col span_5_of_12"> <?php
 wp_get_current_user(); if (is_object_in_term($user->ID,'atmospheric-chemistry-and-physics', 'research_field')) {
  echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    </div>
</article>
<?php '</li>';}
?></div><?php }
echo '</ul>';
//EMERITUS
echo '<ul style="list-style:none;">';
foreach ( $users_third as $user ) {
        
?><div class="col span_5_of_12"> <?php
 wp_get_current_user(); if (is_object_in_term($user->ID,'atmospheric-chemistry-and-physics', 'research_field')) {
  echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    </div>
</article>
<?php '</li>';}
?></div><?php }
echo '</ul>';
?>
</dd>
</dl>
</div>
<!--End Faculty Affiliated-->
<!--RS  General-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Researcher/Scholar</dt>
</button>
<dd class="accordion__content">
<?php

$args= array(
        'role' => 'researcher_scholar',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
?><div class="col span_5_of_12"> <?php
wp_get_current_user(); if (is_object_in_term($user->ID,'atmospheric-chemistry-and-physics', 'research_field')) {  echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a href="<?php echo get_author_posts_url($user->ID);?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    </div>
</article>
<?php '</li>';}
?></div><?php }
echo '</ul>';
?>
</dd>
</dl>
</div>
<!--End RS General-->

  </div>

</main>

<?php get_footer(); ?>
