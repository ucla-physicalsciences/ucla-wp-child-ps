<?php /* Template Name: Staff Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
</header>
<br>
<div class = "ucla campus">
<!--CAO-->

<h2 class="yellow-side-header"> CAO </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_cao',
        'meta_key'=>'last_name',
        'orderby' => 'meta_value',
        'order' => 'ASC'
);
$users=get_users($args);?>
<div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
	?><div class="role-listing-item">
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
</div><?php
}
?></div>
</div>

<!--END-->
<br>
<!--Student Affairs-->
<h2 class="yellow-side-header"> Student Affairs </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_student_affairs',
        'meta_key'=>'last_name',
        'orderby' => 'meta_value',
        'order' => 'ASC'
);
$users=get_users($args);?>
<div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
	?>	<div class= "role-listing-item">
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
</div><?php
}
?></div>

<!--END Student Affairs-->
</div>

<br>
<!--Fund Managers-->
<h2 class="yellow-side-header"> Fund Managers </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_fund_managers',
        'meta_key'=>'last_name',
        'orderby' => 'meta_value',
        'order' => 'ASC'
);
$users=get_users($args);?>
<div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
	 ?>      <div class= "role-listing-item">
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
</div><?php
}
?> </div>

<!--END Fund Managers-->
</div>

<br>
<!--Academic Personnel-->
<h2 class="yellow-side-header"> Academic Personnel </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_academic_personnel',
        'meta_key'=>'last_name',
        'orderby' => 'meta_value',
        'order' => 'ASC'
);
$users=get_users($args);?>
<div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
	 ?>      <div class= "role-listing-item">
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
</div></article>
</div><?php
}
?> </div>

<!--END Academic Personnel-->
</div>

<br>
<!--Office Coordinator-->
<h2 class="yellow-side-header"> Office Coordinator </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_office_coordinator',
        'meta_key'=>'last_name',
        'orderby' => 'meta_value',
        'order' => 'ASC'
);
$users=get_users($args);?>
<div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
	 ?>      <div class= "role-listing-item">
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
</div></article>
</div><?php
}
?> </div>

<!--END Office Coordinator-->
</div>

<br>
<!--IT-->
<h2 class="yellow-side-header"> IT </h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'staff_IT',
        'meta_key'=>'last_name',
        'orderby' => 'meta_value',
        'order' => 'ASC'
);
$users=get_users($args);?>
<div class= "role-listing-container"><?php
foreach ( $users as $user ) {
	wp_get_current_user();
 ?>      <div class= "role-listing-item">
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
</div></article>
</div><?php
}
?> </div>
</div>
<!--END IT-->


</div>
</div>
</main>
<?php get_footer();?>
