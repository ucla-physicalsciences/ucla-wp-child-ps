<?php /* Template Name: Staff Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h1>Staff</h1><br><br>
<p class="lead"> Introductory description of the Staff </p>
<p>Below you'll find a listing of the Staff Member categorized by area of expertise</p>
</div>
</div>
</header>
<div class = "ucla campus">
<!--CAO-->

<h2 class="yellow-side-header"> CAO </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_cao',
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
    
</article>
<?php echo '</li>';
?></div><?php
}
?></div><?php
echo '</ul>';
?>


<!--END-->
<br>
<!--Student Affairs-->
<h2 class="yellow-side-header"> Student Affairs </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_student_affairs',
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

</article>
<?php echo '</li>'; 
?></div><?php
}
?></div><?php
echo '</ul>';
?>

<!--END Student Affairs-->


<br>
<!--Fund Managers-->
<h2 class="yellow-side-header"> Fund Managers </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_fund_managers',
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
</article>
<?php echo '</li>';
?> </div><?php
}
?> </div><?php
echo '</ul>';
?>

<!--END Fund Managers-->
</div>

<br>
<!--Academic Personnel-->
<h2 class="yellow-side-header"> Academic Personnel </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_academic_personnel',
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
</article>
<?php echo '</li>';
?> </div><?php
}
?> </div><?php
echo '</ul>';
?>

<!--END Academic Personnel-->
</div>

<br>
<!--Office Coordinator-->
<h2 class="yellow-side-header"> Office Coordinator </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_office_coordinator',
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

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot
of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;"  href="<?php echo get_author_posts_url($user->ID);?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
</article>
<?php echo '</li>';
?> </div><?php
}
?> </div><?php
echo '</ul>';
?>

<!--END Office Coordinator-->
</div>

<br>
<!--IT-->
<h2 class="yellow-side-header"> IT </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_IT',
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
echo '<li>';?>
<article class="person-card-grey">

<img class="person-card__image"  src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot
of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;"  href="<?php echo get_author_posts_url($user->ID);?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
</article>
<?php echo '</li>';
?> </div><?php
}
?> </div><?php
echo '</ul>';
?>
</div>
<!--END IT-->


</div>
</div>
</main>
<?php get_footer();?>
