<?php /* Template Name: Newsletters Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">Newsletters</h2><br><br>
<p class="lead"> Introductory description of the Newsletters category </p>
<p>Below you'll find a listing of all the Newsletters</p>
</div>
</div>
</header>
<div class = "ucla campus">
<?php
$args = array (
	'tax_query' => array( array (
		'taxonomy' => 'news_type',
		'field' => 'slug',
		'terms'=> 'newsletters')),
        'post_type'=>'news',
                'posts_per_page' => 12,
                'orderby'       => 'date',
                );
$the_query = new WP_Query( $args );?>
<section class="quarterly-updates-archive">
<ul class="quarterly-listing row">
<?php
    if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
    $thumbnail_other = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );?>
    <li class="quarterly-listing__item col-12 col-md-6 col-lg-12">
                            <div class="quarterly-listing__container">
				<div class="quarterly-listing__image-container">
<a href="<?php echo the_permalink(); ?>">
<img class="quarterly-listing__image lazyload" src="<?php echo $thumbnail_other[0]?>" /></a>
   </div>
 <div class="quarterly-listing__content">
 <a href="<?php echo the_permalink(); ?>" class="quarterly-listing__date">
    <?php echo the_title();?>
</a>
      <span class="quarterly-listing__title">
                                        <p> <span style="font-weight: 400;">
      <?php if(get_post_meta($post->ID, 'summary_news', true)):
          echo get_post_meta($post->ID, 'summary_news', true);
endif;?></span></p></span></div>
      </div>
    </li>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

     <?php endif; ?>
</ul></section>
</div>
</main>
<?php get_footer();?>
