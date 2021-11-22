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
<section class="story">
  <div class="story__secondary section group">
<?php
    if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
    $thumbnail_other = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );?>
    <article class="story__secondary-card">
    <a href="<?php echo the_permalink(); ?>">
    <div class="story__secondary-image-wrapper"><img class="story__secondary-image" src="<?php echo $thumbnail_other[0]?>" /></div>
        <h1 class="story__secondary-title">
        <span class="story__secondary-title-text"><?php echo the_title();?></span>
        </h1>
      </a>
      <div class="story__secondary-content">
        <p class="story__secondary-blurb"><?php if(get_post_meta($post->ID, 'summary_news', true)):
          echo get_post_meta($post->ID, 'summary_news', true);
endif;?></p>
        <p class="story__secondary-source"></p>
      </div>
    </article>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

     <?php endif; ?>
</div></section>
</div>
</main>
<?php get_footer();?>
