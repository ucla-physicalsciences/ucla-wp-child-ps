<?php /* Template Name: R-AOS Biogeochemistry Template  */ ?>
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
<?php
    $faculty = array( 'Full Faculty' => array( 'faculty_full' ),
                    'Associate Faculty' => array( 'faculty_associate' ),
                    'Assistant Faculty' => array( 'faculty_assistant' ),
                    'Affiliated Faculty' => array( 'faculty_adjunct', 'faculty_emeriti' ) );
    foreach( $faculty as $faculty_group => $faculty_roles ) {
      $args = array(
        'role__in' => $faculty_roles,
        'orderby' => 'user_nicename',
        'order' => 'ASC', 
        'tax_query' => array(
          array(
            'taxonomy' => 'research_field',
            'field'    => 'slug',
            'terms'    => array( 'biogeochemistry' )
          )
        ) 
      );  
      $user_query = new WP_User_Query( $args );
      if ( ! empty( $user_query->results ) ) { ?>
        <div class="accordion accordion--card-content accordion--mobile-only">
          <dl>
          <button class="accordion__title" aria-expanded="false">
            <dt><?php echo $faculty_group ?></dt>
          </button>
          <dd class="accordion__content">
            <?php foreach( $user_query->results as $user ) { ?>
              <div class="col span_5_of_12">
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
                </div>
            <?php } ?>
          </dd>
          </dl>
        </div>
      <?php }?>
    <?php }?>

  </div>

</main>

<?php get_footer(); ?>