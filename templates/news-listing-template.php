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
<section>
<?php
    if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
    $thumbnail_other = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );?>
    <article class="basic-card-grey">
    <a href="<?php echo the_permalink(); ?>">
    <img class="basic-card__image" src="<?php echo $thumbnail_other[0]?>" />
</a>
      <div class="basic-card__info-wrapper">
	 <h3 class="basic-card__title">
        <span  class="basic-card__title"><?php echo the_title();?></span>
        </h3>
      <p class="basic-card__description"><?php if(get_post_meta($post->ID, 'summary_news', true)):
          echo get_post_meta($post->ID, 'summary_news', true);
endif;?></p>
      </div>
    </article>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

     <?php endif; ?>
</section>
</div>
</main>
<?php get_footer();?>
