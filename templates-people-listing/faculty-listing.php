<?php /* Template Name: Faculty Listing */ ?>
<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h1>Faculty</h1><br><br>
<p class="lead"> Introductory description of the Faculty </p>
<p>Below you'll find a listing of the Faculty Member categorized by their position</p>
</div>
</div>
</header>
<div class = "ucla campus">
<!--Faculty Core : Assistant, Associate, Full-->
<?php
$members = array( 'Core Faculty' => array( 'faculty_full_professor', 'faculty_associate_professor', 'faculty_assistant_professor' ));

foreach( $members as $group_members => $group_member_roles ) {
      $args = array(
        'role__in' => $group_member_roles,
        'orderby' => 'display_name',
        'order' => 'ASC',
        'tax_query' => array(
          array(
            'taxonomy' => 'member_general_category',
            'field'    => 'slug',
            'terms'    => array( 'core' )
          )
        )
);

      $user_query = new WP_User_Query($args);
      if ( ! empty( $user_query->results ) ) { 
?>
	<h2 class="yellow-side-header"><?php echo $group_members?></h2>
<?php
echo '<ul style="list-style:none;">';
?><div class= "role-listing-container"><?php
foreach ( $user_query->results as $user ) {
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
</div>
</article>
<?php echo '</li>';
?></div><?php
}
?></div><?php
echo '</ul>';
      }}?>
<!--END Core-->
<br>
<!--Faculty Affliated: -->
<?php
$members = array( 'Affiliated Faculty' => array( 'faculty_adjunct_professor', 'faculty_emeritus_professor', 'faculty_affiliated_professor' ));

foreach( $members as $group_members => $group_member_roles ) {
      $args = array(
        'role__in' => $group_member_roles,
        'orderby' => 'display_name',
        'order' => 'ASC',
        'tax_query' => array(
          array(
            'taxonomy' => 'member_general_category',
            'field'    => 'slug',
            'terms'    => array( 'affiliated' )
          )
        )
);

      $user_query = new WP_User_Query($args);
      if ( ! empty( $user_query->results ) ) {
?>
        <h2 class="yellow-side-header"><?php echo $group_members?></h2>
<?php
echo '<ul style="list-style:none;">';
?><div class= "role-listing-container"><?php
foreach ( $user_query->results as $user ) {
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
</div>
</article>
<?php echo '</li>';
?></div><?php
}
?></div><?php
echo '</ul>';
      }}?>

</div>
</main>
<?php get_footer();?>
