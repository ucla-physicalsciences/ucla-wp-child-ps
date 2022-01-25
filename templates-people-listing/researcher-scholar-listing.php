<?php /* Template Name: Researcher/Scholar Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">Researcher/Scholar</h2><br><br>
<p class="lead"> Introductory description of the Researcher/Scholar </p>
<p>Below you'll find a listing of the Researcher and/or Scholar Member categorized by area of expertise</p>
</div>
</div>
</header>
<div class = "ucla campus">
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
        wp_get_current_user();
?><div class="col span_5_of_12"> <?php  echo '<li>'?>
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
<?php '</li>';
?></div><?php }
echo '</ul>';
?>
</dd>
</dl>
</div>
<!--End RS General-->
</div>
</main>
<?php get_footer();?>
