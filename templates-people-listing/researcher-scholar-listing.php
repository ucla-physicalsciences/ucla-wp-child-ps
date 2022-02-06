<?php /* Template Name: Researcher/Scholar Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h1>Researcher/Scholar</h1><br><br>
<p class="lead"> Introductory description of the Researcher/Scholar </p>
<p>Below you'll find a listing of the Researcher and/or Scholar Member categorized by area of expertise</p>
</div>
</div>
</header>
<div class = "ucla campus">
<!--Researcher/Scholar :Researcher/Scholar, Assistant, Associate-->
<?php
$members = array( 'Researcher/Scholar' => array('researcher_scholar', 'researcher_associate', 'researcher_assistant' ));

foreach( $members as $group_members => $group_member_roles ) {
      $args = array(
        'role__in' => $group_member_roles,
        'orderby' => 'display_name',
        'order' => 'ASC'
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

</div>
</main>
<?php get_footer();?>
