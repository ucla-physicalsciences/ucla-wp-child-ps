<?php /* Template Name: Faculty Listing */ ?>
<?php get_header();?>
<main id="main">
<header class="header">
</header>
<div class = "ucla campus">
<br>
<!--Faculty Core : Assistant, Associate, Full-->
<?php
$members = array( 'Core Faculty' => array( 'faculty_full_professor', 'faculty_associate_professor', 'faculty_assistant_professor' ));

foreach( $members as $group_members => $group_member_roles ) {
      $args = array(
	      'role__in' => $group_member_roles,
	      'meta_key'=>'last_name',
        'orderby' => 'meta_value',
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
<div class= "role-listing-container"><?php
foreach ( $user_query->results as $user ) {
	wp_get_current_user();
	$user_ID=$user->ID;
        $email = $user->email;
        $url = $user->user_url;
        $phone= $user->phone-number;
        $office_location = $user->office-location;
        ?><div class="role-listing-item">
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user_ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;"  href="<?php echo get_author_posts_url($user->ID);?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
    <div class="person-card__contact">
<?php if(!empty($email)){?>
      <div class="person-card__contact-details">
        <p class="person-card__contact-label">Email</p>
	<a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
	</div><?php }; 
if(!empty($phone)){?>
      <div class="person-card__contact-details">
        <p class="person-card__contact-label">Phone</p>
	<a href="tel:+1<?php echo $phone?>"><?php echo $phone;?></a>
	</div><?php }; 
	if(!empty($office_location)){?>
      <div class="person-card__contact-details">
        <p class="person-card__contact-label">Office</p>
	<p><?php echo $office_location;?></p>
	</div><?php };?>
      <div class="person-card__contact-details">
        <p class="person-card__contact-label">Mail</p>
        <p>410 Charles E. Young Drive East,<br />Los Angeles, CA 90024</p>
      </div>
    </div>
</div>
</article>
</div><?php
}
?></div><?php
}}?>
<!--END Core-->
<br>
<!--Faculty Affliated: -->
<?php
$members = array( 'Affiliated Faculty' => array( 'faculty_full_professor', 'faculty_associate_professor', 'faculty_assistant_professor', 'faculty_adjunct_professor', 'faculty_emeritus_professor', 'faculty_affiliated_professor' ));

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
	<div class= "role-listing-container">
<?php
foreach ( $user_query->results as $user ) {
	wp_get_current_user();
	$user_ID=$user->ID;
        $email = $user->email;
        $url = $user->user_url;
        $phone= $user->phone-number;
        $office_location = $user->office-location;
        ?><div class="role-listing-item">
<article class="person-card-grey">

<img class="person-card__image" src= "<?php echo esc_url( get_avatar_url( $user_ID ) );?>" alt="Headshot of Faculty Member">
<div class="person-card__info-wrapper">
<h1 class="person-card__name"><a style = "text-decoration: none;"  href="<?php echo get_author_posts_url($user->ID);?>"><span><?php echo esc_html($user->display_name);?></span></a></h1>
<h2 class="person-card__department"><span><?php
        global $wp_roles;
        if (!empty($user->roles)){
                foreach ($user->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></span></h2>
        <p class="person-card__description"><?php echo esc_html($user->description);?></p>
<div class="person-card__contact">
<?php if(!empty($email)){?>
      <div class="person-card__contact-details">
        <p class="person-card__contact-label">Email</p>
        <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
        </div><?php };
if(!empty($phone)){?>
      <div class="person-card__contact-details">
        <p class="person-card__contact-label">Phone</p>
        <a href="tel:+1<?php echo $phone?>"><?php echo $phone;?></a>
        </div><?php };
        if(!empty($office_location)){?>
      <div class="person-card__contact-details">
        <p class="person-card__contact-label">Office</p>
        <p><?php echo $office_location;?></p>
        </div><?php };?>
      <div class="person-card__contact-details">
        <p class="person-card__contact-label">Mail</p>
        <p>410 Charles E. Young Drive East,<br />Los Angeles, CA 90024</p>
      </div>
    </div>
</div>
</article>
</div>
<?php
  }
 echo '</div>';
}}?>

</div>
</main>
<?php get_footer();?>
