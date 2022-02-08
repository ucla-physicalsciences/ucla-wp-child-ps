
<?php get_header(); ?>

<main id="main">
  
    <header class="header">
      <div class="ucla campus">
        <div class="col span_12_of_12">
	<br>

<div class="story__featured">
    <article class="story__featured-card">
<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'large');
$image_url = $image_url[0];
?><img style="object-fit: cover;" class="story__featured-image" src=<?php echo $image_url;?>>
 <div class="story__featured-content">
        <h3 class="story__featured-title"><?php echo get_the_title( ); ?></h3>
      </div>
    </article>
  </div>
</section>
</div>
</div>
</header>
<br>
<!--Display Author + Date info-->
<?php
$author_id = get_post_field ('post_author', $cause_id);
$display_name = get_the_author_meta( 'display_name' , $author_id );
?>
<div class = "ucla campus">
<div class= "col span_12_of_12"> <!-- if want more image : 8_of_12-->
<h5><?php echo $display_name;?> | <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time> </h5>
<p><?php the_content(); ?> </p>
</div>
<!--<div class= "col span_3_of_12">
<h2 class="yellow-side-header">More Images</h2>
<br><br>
</div>-->
</div> 
    <div  class="ucla campus">
<div class="col span_12_of_12">
<?php
global $post;
$cat= get_the_category($post->ID);
$args = array (
        'cat'=> $cat[0]->name,
                'posts_per_page' => 12,
		'orderby'       => 'date',
		'post__not_in' => array( get_queried_object_id() )
                );
$the_query = new WP_Query( $args );?>
<?php if ( $the_query->have_posts() ) : ?>
	<h2 class="yellow-side-header">More AOS <?php echo $cat[0]->name?></h2>
<br>
<section class="quarterly-updates-archive">
<ul class="quarterly-listing row">
<?php
while ( $the_query->have_posts() ) : $the_query->the_post();?>
<?php $image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'large');
$image_url = $image_url[0];
?>
    <li class="quarterly-listing__item col-12 col-md-6 col-lg-12">
                            <div class="quarterly-listing__container">
				<div class="quarterly-listing__image-container">
 <img style="object-fit: cover;" class="quarterly-listing__image" src=<?php echo $image_url;?>>
   </div>
 <div class="quarterly-listing__content">
 <a href="<?php echo the_permalink(); ?>" class="quarterly-listing__date">
    <?php echo get_the_date();?>
      <span class="quarterly-listing__title">
       <?php echo the_title();?></span></div>
      </div>
    </li>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
</ul></section>
<?php endif; ?>

</div>
  </div>

</main>

<?php get_footer(); ?>
