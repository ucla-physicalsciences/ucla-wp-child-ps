<?php get_header(); ?>
<style>
@media only screen and (min-width: 1024px){
.right-side{
float:right;
}

</style>

<main id="main">
 <header class="header">
      <div class="ucla campus">
	<div class="col span_12_of_12">    
<br>
    <h2><?php $author_id = intval( get_query_var( 'author' ) ); echo get_the_author_meta( 'display_name', $author_id ); ?></h2>
  <br>
  <h4> <?php echo get_the_author_meta('description', $author_id);?>
 </div> </div>
    </header>
<hr/>

     <div class="ucla campus">
<?php $user_data = get_userdata($author_id);?>
      <section class= "story">
<div class= "story__featured">
<article class="story__featured-card"  >
<a href="#" tabindex="-1">
<div class="story__featured-image"  alt "Group Member photo"><div  class="right-side" ><?php echo get_avatar( $author_id,400 ) ;?></div></div>
</a>
      <div class="story__featured-content">
      <h3 class="story__featured-title"><?php echo get_the_author_meta('display_name',$author_id);?></h3>
      <p class="story__featured-blurb"> <?php echo get_the_author_meta('description',$author_id);?></p>
        <button class="btn btn--lightbg"><?php
        global $wp_roles;
        if (!empty($user_data->roles)){
                foreach ($user_data->roles as $role){
                echo $wp_roles->roles[ $role ]['name'] . ' ';}

                };?></button>
      </div>
    </article>
  </div> 

</div>
<br><br>
<div class="ucla campus">
<div class=" col span_8_of_12">
<h2 class="yellow-side-header">Research Field</h2>
<br><br>
<p><?php
			$terms=get_the_terms($user_data,'research_field');
	$field_list= implode(',',wp_list_pluck($terms,'term_id'));
wp_tag_cloud(
	array( 
		'smallest'=>15,
		'largest'=>15,
		'taxonomy' => 'research_field',
		'separator'=>'<br><br>',
		'include'=>$field_list
	));?></p>
<h2 class="yellow-side-header">Awards</h2>
<br><br>
<?php  $args = array(
	'post_type'=>'award',
	'author'=>get_queried_object_id(),
	'showposts'=>10
);
	$custom_posts_award = new WP_Query($args);
	if ($custom_posts_award->have_posts()):
		while($custom_posts_award->have_posts()):$custom_posts_award->the_post();
	?>
<p>
<?php
//name
if(get_post_meta($post->ID,'name',true)):
	echo get_post_meta($post->ID,'name',true);?>, 
<?php endif;?>
<?php
//date
if(get_post_meta($post->ID,'date',true)):
        echo get_post_meta($post->ID,'date',true); 
endif;?>
<?php
//location
if(get_post_meta($post->ID,'location',true)):?> (<?php
	echo get_post_meta($post->ID,'location',true);?>   )  
<?php endif;?></p><hr>
<?php
endwhile;
else:?> No Awards.<?php
endif;?>
<br><br><br>
<h2 class="yellow-side-header">Publications</h2>
<br><br>
<?php  $args = array(
        'post_type'=>'publication',
        'author'=>get_queried_object_id(),
        'showposts'=>10
);
        $custom_posts_publication = new WP_Query($args);
        if ($custom_posts_publication->have_posts()):
                while($custom_posts_publication->have_posts()):$custom_posts_publication->the_post();
       
//article
if(get_post_meta($post->ID,'entrytype',true)&& get_post_meta($post->ID,'entrytype',true)=='article'):?>
<p>
<?php
//author
if(get_post_meta($post->ID,'author',true)):
	echo get_post_meta($post->ID,'author',true);?>. 
<?php endif;?>
<?php
//year
if(get_post_meta($post->ID,'year',true)):?>(<?php
	echo get_post_meta($post->ID,'year',true);?>).  
<?php endif;?>
<?php 
//title
if(get_post_meta($post->ID, 'title', true)):
	echo get_post_meta($post->ID, 'title', true);?>.
<?php endif;?>
<em><?php
//journal
if(get_post_meta($post->ID, 'journal', true)):
          echo get_post_meta($post->ID, 'journal', true);?>,
<?php endif;?></em> 
<b><?php
//volume 
if(get_post_meta($post->ID, 'volume', true)):
echo get_post_meta($post->ID, 'volume', true);
endif;?></b>
<?php 
//number
if(get_post_meta($post->ID, 'number', true)):?>(<?php
	echo get_post_meta($post->ID, 'number', true);?>).
<?php endif;?>
<?php 
//pages	
if(get_post_meta($post->ID, 'pages', true)):
	echo get_post_meta($post->ID, 'pages', true);?>.
<?php endif;?>
<?php 
//DOI
if(get_post_meta($post->ID, 'DOI', true)):
        echo get_post_meta($post->ID, 'DOI', true);
endif;?>

</p><?php endif;?><hr><?php
endwhile;
else:?> No Publication.<?php
endif;?>
<br>  <br>

</div>
<div class="col span_2_of_12">
<h2 class="yellow-side-header">Contact Informations</h2>
<br><br>
<p><b>Email: </b><?php echo get_the_author_meta('email',$author_id);?>
<br><br>
<b>Website: </b>
<?php echo get_the_author_meta('user_url', $author_id);?>
<br><br>
<b>Phone Number: </b>
<?php echo get_the_author_meta('phone-number', $author_id);?>
<br><br>
<b>Office Location: </b>
<?php echo get_the_author_meta('office-location', $author_id);?>
<br></p>
</div></div>
</main>

<?php get_footer(); ?>
