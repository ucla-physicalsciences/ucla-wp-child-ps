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

<!--Faculty Adjunct-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Faculty Adjunct</dt>
</button>
<dd class="accordion__content">
<?php

$args= array(
        'role' => 'faculty_adjunct',
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
?></div><?php }
echo '</ul>';
?>
</dd>
</dl>
</div>
<!--End Faculty Adjunct-->
<!--Faculty Chair-->
<!--End Faculty Chair-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Faculty Chair</dt>
</button>
<dd class="accordion__content">
<?php

$args= array(
        'role' => 'faculty_chair',
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
?></div><?php }
echo '</ul>';
?>
</dd>
</dl>
</div>
<!--Faculty Emeritus-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Faculty Emeritus</dt>
</button>
<dd class="accordion__content">
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
?><div class="col span_5_of_12"> <?php  echo '<li>'?>
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
?></div><?php }
echo '</ul>';
?>
</dd>
</dl>
</div>
<!--End Faculty Emeritus-->
<!--Faculty Vice Chair-->
<div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Faculty Vice Chair</dt>
</button>
<dd class="accordion__content">
<?php

$args= array(
        'role' => 'faculty_vice_chair',
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
?></div><?php }
echo '</ul>';
?>
</dd>
</dl>
</div>
<!--End Faculty Vice Chair-->


</div>
</main>
<?php get_footer();?>
