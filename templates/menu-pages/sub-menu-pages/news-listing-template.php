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
<div class = "ucla campus">
<?php
$args = array (
        'tax_query' => array( array (
                'taxonomy' => 'news_type',
                'field' => 'slug',
                'terms'=> 'news')),
        'post_type'=>'news',
        'posts_per_page' => 12,
         'orderby'       => 'date',
                );
$the_query = new WP_Query( $args );?>
<!--Attempt-->
<section class="news-archive">
		    <ul class="news-listing row">
<?php
    if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
    $thumbnail_other = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );?>
    <li class="news-listing__item col-12 col-md-6 col-lg-12">
			    <div class="news-listing__container">
 <div class="news-listing__image-container">

                                    <img class="news-listing__image lazyload" src="<?php echo $thumbnail_other[0]?>">
   </div>
 <div class="news-listing__content">
                                    <span class="news-listing__date"><?php echo get_the_date('F jS, Y');?></span>
 <a class= "news-listing__title gtm-news-link" href="<?php echo the_permalink(); ?>">
  <?php echo the_title();?>
</a>
<p><?php if(get_post_meta($post->ID, 'summary_news', true)):
          echo get_post_meta($post->ID, 'summary_news', true);
endif;?> </p>
     </div></div>
      </li>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

     <?php endif; ?>
</ul>
</section>
<!--End of Attempts-->

</div>
</main>
<?php get_footer();?>
