<?php /* Template Name: Graduate Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
</header>
<div class = "ucla campus">
<!--AOS Graduate-->
<br/>
<h2 class="yellow-side-header">Graduate Students</h2>
<div class= "role-listing-wrapper">
<?php

$args= array(
        'role' => 'graduate_student',
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
echo '</div>';
?>
</div>
<!--END -->


</div>
</main>
<?php get_footer();?>
