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
?><hr> <?php  echo '<li>' . esc_html( $user->display_name ) . '  Email: ' . esc_html( $user->user_email ) . '</li>';
}
echo '</ul>';
?>
<hr>
</div>
</main>
<?php get_footer();?>
