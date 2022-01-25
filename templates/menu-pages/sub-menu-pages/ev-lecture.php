<?php /* Template Name: Lecture Event Listing */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">Lectures</h2><br><br>
<p class="lead"> Introductory description of the Lecture Event category </p>
<p>Below you'll find a listing of all the Departement Lecture Events</p>
</div>
</div>
</header>
<div class = "ucla campus">
<?php
$args = array (
        'tax_query' => array( array (
                'taxonomy' => 'events_type',
                'field' => 'slug',
                'terms'=> 'lecture')),
        'post_type'=>'events',
                'posts_per_page' => 12,
                'orderby'       => 'date',
                );
$the_query = new WP_Query( $args );?>
<section>
	 <?php
if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
    $thumbnail_other = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );?>
    <article class="basic-card">
    <a  href="<?php echo the_permalink(); ?>" >
    <img class="basic-card-image" src="<?php echo $thumbnail_other[0]?>" />
        <h3 class="basic-card__title">
        <span class="basic-card__title"><?php echo the_title();?></span>
        </h3>
  </a>
<div class="basic-card__infor-wrapper">
        <p class="basic-card__description"><b>Speaker: </b><?php if(get_post_meta($post->ID, 'event_speaker', true)):
        echo get_post_meta($post->ID, 'event_speaker', true);endif;?><br><b>Institution:</b>
<?php if(get_post_meta($post->ID, 'event_institution', true)):?>
        <?php
          echo get_post_meta($post->ID, 'event_institution', true);
endif;?><br><b>Location: </b>
<?php if(get_post_meta($post->ID, 'event_location', true)):?>
        <?php
          echo get_post_meta($post->ID, 'event_location', true);
endif;?>
<br><b>When: </b>
<?php if(get_post_meta($post->ID, 'event_date', true)):?>
        <?php
echo get_post_meta($post->ID, 'event_date', true);endif;?> from <?php if(get_post_meta($post->ID, 'event_time', true)):?>
        <?php
echo get_post_meta($post->ID, 'event_time', true);
endif;?>
</p>

      </div>
    </article>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

     <?php endif; ?>
</section>

</div>
</main>
<?php get_footer();?>
