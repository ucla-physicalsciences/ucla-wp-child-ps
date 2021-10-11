<?php /* Template Name: R-AOS Chemistry and Physics Template */ ?>
<?php get_header(); ?>
<main id="main"> 
    <header class="header" >
      <div class="ucla campus">
        <div class="col span_12_of_12"><br>
  <div class="breadcrumb"><h2 class="yellow-side-header"><?php the_title(); ?></h2> 
</div>
      </div>
    </header>
    <div class="ucla campus">

      <div class="col span_9_of_12">
  <p>      <?php the_content(); ?></p>

       
      </div>
<!-- Core Faculty -->
    <div class="accordion accordion--card-content accordion--mobile-only">
<dl>
<button class="accordion__title" aria-expanded="false">
<dt>Core Faculty</dt>
</button>
<dd class="accordion__content">
<?php
$termId = get_term_by( 'atmospheric-chemistry-and-physics', get_query_var( 'term' ), get_query_var( 'research_field' ) )->term_id;

$users=get_objects_in_term($termId, 'research_field');
echo '<ul style="list-style:none;">';
foreach ( $users as $user ) {
	wp_get_current_user();
	if ( ! empty( $user->roles ) && is_array( $user->roles ) && in_array( 'faculty_full', $user->roles ) ) {
    return true;
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
?></div><?php }}
echo '</ul>';
?>
</dd>
</dl>
</div>
<!--End Core Faculty-->

  </div>

</main>

<?php get_footer(); ?>
