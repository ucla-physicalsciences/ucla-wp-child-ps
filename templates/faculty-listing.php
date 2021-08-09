<?php /* Template Name: Faculty Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">Faculty</h2>
</div>
</div>
</header>
<div class = "ucla campus">
<?php

$args= array(
	'role' => 'faculty_member',
	'orderby'=> 'user_nicename',
	'order' => 'ASC'
);
$users=get_users($args);
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
        wp_get_current_user();
        ?><div class="col span_3_of_12"> <?php  echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><span><?php echo esc_html($user->display_name);?></span></h1>
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
?></div><?php }
echo '</ul>';
?>
</div>
<div class = "ucla campus">
<hr>
<h2 class="yellow-side-header">Faculty Adjunct</h2>
<?php $args= array(
        'role' => 'faculty_adjunct',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
        wp_get_current_user();
        ?><div class="col span_3_of_12"> <?php  echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><span><?php echo esc_html($user->display_name);?></span></h1>
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
?></div><?php }
echo '</ul>';
?>

</div>
<div class= "ucla campus">
<hr>

<h2 class="yellow-side-header">Faculty Emeritus</h2>
<?php
$args= array(
        'role' => 'faculty_emeritus',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
        wp_get_current_user();
        ?><div class="col span_3_of_12"> <?php  echo '<li>'?>
<article class="person-card">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user->ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><span><?php echo esc_html($user->display_name);?></span></h1>
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
?></div><?php }
echo '</ul>';
?>


</div>
</main>
<?php get_footer();?>
