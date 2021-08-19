<?php /* Template Name: Graduate Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">Graduate Students</h2>
</div>
</div>
</header>
<br><br>
<div class = "ucla campus">
<!--Graduate General-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Graduate Students</dt>
</button>
<dd class="accordion__content">
<?php

$args= array(
        'role' => 'graduate_student',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
        wp_get_current_user();
?><div class="col span_5_of_12"> <?php  echo '<li>'?>
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
</dd>
</dl>
</div>
<!--End Graduate General-->
<!--Graduate Master-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Graduate Master Students</dt>
</button>
<dd class="accordion__content">
<?php

$args= array(
        'role' => 'graduate_master',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
        wp_get_current_user();
?><div class="col span_5_of_12"> <?php  echo '<li>'?>
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
</dd>
</dl>
</div>
<!--End Graduate Master-->
<!--Graduate PhD-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Graduate PhD Students</dt>
</button>
<dd class="accordion__content">
<?php

$args= array(
        'role' => 'graduate_phd',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
        wp_get_current_user();
?><div class="col span_5_of_12"> <?php  echo '<li>'?>
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
</dd>
</dl>
</div>
<!--End Graduate PhD-->
<!--Graduate XEP-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Graduate Students - XEP</dt>
</button>
<dd class="accordion__content">
<?php

$args= array(
        'role' => 'graduate_xep',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
        wp_get_current_user();
?><div class="col span_5_of_12"> <?php  echo '<li>'?>
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
</dd>
</dl>
</div>
<!--End Graduate XEP-->
</div>
</main>
<?php get_footer();?>
