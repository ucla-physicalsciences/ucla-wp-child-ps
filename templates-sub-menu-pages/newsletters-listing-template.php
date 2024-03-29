<?php /* Template Name: Newsletters Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">Newsletters</h2><br><br>
</div>
</div>
</header>
<div  class="ucla campus">
<?php
$cat= 'newsletter';
$args = array (
	'post_type'       => 'post',
        'category_name'=> 'newsletter',
                'nopaging' => true,
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
