<?php /* Template Name: Faculty Listing */ ?>
<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">Faculty</h2><br><br>
<p class="lead"> Introductory description of the Faculty </p>
<p>Below you'll find a listing of the Faculty Member categorized by their position</p>
</div>
</div>
</header>
<div class = "ucla campus">
<div class = "people_category"
<h2>Leadership</h2>
<!--Faculty Chair + VC-->

<?php

$args= array(
        'role' => 'faculty_chair',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$args_second= array(
        'role' => 'faculty_vice_chair',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
$users_second=get_users($args_second);
?> <?php
echo '<ul style="list-style:none;">';
//CHAIR
foreach ( $users as $user ) {
        wp_get_current_user();
?>
 <?php  echo '<li>'?>

<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;" href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
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
 }

//END CHAIR
//VC

foreach ( $users_second as $user ) {
wp_get_current_user();
?> <?php  echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;" href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
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

echo '</ul>';
?>
<!--End  VC-->
</div>
<!--Faculty Core-->
<div class="people_category">
<h2> Faculty Core </h2>
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
        wp_get_current_user();
?>
<?php  echo '<li>'?>
<article class="person-card-grey ">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper ">
<h1 class="person-card__name"><a style = "text-decoration: none;" href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    </div>
</article>
<?php '</li>'; }
//End Full
//Associate
foreach ( $users_third as $user ) {
        wp_get_current_user();
?>
<?php echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;" href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
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
//End Associate
//Assistant

foreach ( $users_forth as $user ) {
        wp_get_current_user();
?> <?php  echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;" href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
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
//End Assistant
//Distinguished
foreach ( $users_fifth as $user ) {
        wp_get_current_user();
?> <?php  echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;" href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    
</article>
<?php '</li>';}
echo '</ul>';
//End Distinguished
?>

</div>
<!--End Faculty Core-->
<!--Faculty Affiliated-->
<div class="people_category">
<h2>Affiliated Faculty</h2>
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
        wp_get_current_user();
?> <?php  echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;" href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
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
?><?php }

//ADJUNCT

foreach ( $users_second as $user ) {
        wp_get_current_user();
?> <?php  echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;" href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
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
?><?php }

//EMERITUS

foreach ( $users_third as $user ) {
        wp_get_current_user();
?> <?php  echo '<li>'?>
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;" href="<?php get_author_link(true,$user->ID)?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
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
?><?php }
echo '</ul>';
?>
</div>
<!--End Faculty Affiliated-->
</div>
</main>
<?php get_footer();?>
