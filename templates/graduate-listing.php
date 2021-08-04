<?php /* Template Name: Graduate Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">Graduate Student</h2>
</div>
</div>
</header>
<div class = "ucla campus">
<?php

$args= array(
        'role' => 'graduate_student',
        'orderby'=> 'user_nicename',
        'order' => 'ASC'
);
$users=get_users($args);
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
	?><div class="col span_3_of_12"> <?php  echo '<li>'?>
<article class="person-card">
<img class="person-card__image" src= "get_avatar( $user->ID, 64 )" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><span><?php  echo get_the_author_meta( 'display_name', $user ) ?></span></h1>
<h2 class="person-card__department"><span><?php esc_html($user->user_role)?></span></h2>
        <p class="person-card__description"><?php esc_html($user->description)?></p>
    </div>
</article>
<?php '</li>';
?></div><?php }
echo '</ul>';
?>
</div>
</main>
<?php get_footer();?>
