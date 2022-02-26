<?php /* Template Name: News Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">News</h2><br><br>
<p class="lead"> Introductory description of the News category </p>
<p>Below you'll find a listing of all the news articles</p>
</div>
</div>
</header>
<div  class="ucla campus">
<?php
$args = array (
        'post_type'       => 'post',
        'category_name'=> 'news',
                'posts_per_page' => 12,
		'orderby'       => 'date',
	         );
$the_query = new WP_Query( $args );?>
<?php if ( $the_query->have_posts() ) : ?>
	
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
    <?php echo the_title();?></a>
      <span class="quarterly-listing__title"><b>
        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time> </b></span></div>
      </div>
    </li>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
</ul></section>
<?php endif; ?>

  </div>
</main>
<?php get_footer();?>
