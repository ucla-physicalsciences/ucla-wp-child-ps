<?php /* Template Name: Faculty Listing */ ?>
<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h1>Faculty</h1><br><br>
<p class="lead"> Introductory description of the Faculty </p>
<p>Below you'll find a listing of the Faculty Member categorized by their position</p>
</div>
</div>
</header>
<div class = "ucla campus">
<!--Faculty Full Professor-->

<h2 class="yellow-side-header"> Full Professor</h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'faculty_full_professor',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);?>
<?php
echo '<ul style="list-style:none;">';
?><div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
	?><div class="role-listing-item"><?php
  echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;"  href="<?php echo get_author_posts_url($user->ID);?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
</div>
</article>
<?php echo '</li>';
?></div><?php
}
?></div><?php
echo '</ul>';
?>

</div>
<!--END-->
<br>
<!--Associate Professor-->
<h2 class="yellow-side-header"> Associate Professor </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'faculty_associate_professor',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);?>
<?php
echo '<ul style="list-style:none; ">';
?><div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
	?>	<div class= "role-listing-item"><?php
 echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;"  href="<?php echo get_author_posts_url($user->ID);?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
	<p class="person-card__description"><?php echo esc_html($user->description);?></p>
</div>
</article>
<?php echo '</li>';
?></div><?php
}
?></div><?php
echo '</ul>';
?>

<!--END Associate Professor-->
</div>

<br>
<!--Assistant Professor-->
<h2 class="yellow-side-header"> Assistant Professor </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'faculty_assistant_professor',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);?>
<?php
echo '<ul style="list-style:none; ">';
?><div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
	 ?>      <div class= "role-listing-item"><?php
 echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;"  href="<?php echo get_author_posts_url($user->ID);?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
	<p class="person-card__description"><?php echo esc_html($user->description);?></p>
</div>
</article>
<?php echo '</li>';
?> </div><?php
}
?> </div><?php
echo '</ul>';
?>

<!--END Assistant Professor-->
</div>

<br>
<!--Adjunct Professor-->
<h2 class="yellow-side-header"> Adjunct Professor </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'faculty_adjunct_professor',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);?>
<?php
echo '<ul style="list-style:none;">';
?><div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
	 ?>      <div class= "role-listing-item"><?php
 echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;"  href="<?php echo get_author_posts_url($user->ID);?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
</div>
</article>
<?php echo '</li>';
?> </div><?php
}
?> </div><?php
echo '</ul>';
?>

<!--END Adjunct Professor-->
</div>

<br>

</div>
</main>
<?php get_footer();?>
