<?php /* Template Name: Yanai Lectures Template */ ?>

<?php get_header();?>
<main id="main">
<header class="header">
<div class = "ucla campus">
<div class= "col span_12_of_12">
<br>
<h2 class="yellow-side-header">Yanai Lectures</h2><br><br>
<p class="lead"> Achievements </p><p>
Yanai's research interests and publications covered a wide variety of topics, including tropical cyclones easterly waves, equatorial waves intra-seasonal oscillation, cloud clusters, monsoon interannual variability, etc. His MS thesis regarding the tropical cyclone genesis served to be one of the most comprehensive references on the topic at the time. Much of his impactful work is still used today, such as observations made regarding the mixed Rossby-gravity waves, definitions of heat sources Q1 and moisture sinks Q2, contributions on equatorial variability and convections, and studies on the Tibetan Plateau's effect on the Asian Monsoon. His groundbreaking work earned him the Jule Charney Award in 1986 by the American Meteorological Society "for highly original contributions to enlarging our knowledge of the dynamics of the atmosphere, particularly in the tropics." Soon after he was also the recipient of the Fujiwara Award of the Meteorological Society of Japan in 1993. Since 1996, his UCLA Tropical Meteorology and Climate Newsletter had served as an indispensable resource to the meteorological community until its last issue on October 8th, 2010.

Michio Yanai will always be remembered by his colleagues and community for his major contributions and exemplary character. In his honor, the Department of Atmospheric and Oceanic Sciences has founded the Annual Yanai Distinguished Lecture which will feature an esteemed guest speaker covering topics related to his research relevant to the world today.
</p> <p class="lead"> Biography </p><p>
Michio Yanai was born on January 16, 1934 in Tokyo, and grew up in Chigasaki. Early in his life, his screenwriter father instilled an appreciation for science, and this affection continued on in middle school when he joined the Meteorology Club, which made typhoon observations and issued storm warnings. He attended University of Tokyo where he studied geophysics the majority of his undergraduate years, until senior year when he enrolled in the meteorology program. There he met his future wife, Yoko.

Yanai began graduate studies at University of Tokyo and wrote his Master's thesis on decaying typhoons in 1958. Soon after he earned his D.Sc in 1961 at the University of Tokyo with his Doctorate thesis on typhoon formation. He was then invited to join the newly formed Typhoon Research Laboratory and to later visit Colorado State, where he forged many important friendships during that period. However, he returned back to Japan to marry Yoko in 1965 and served as Assistant Professor at the University of Tokyo. Once the student riots of U. Tokyo emerged, he moved to UCLA where he worked full-time as a professor. In 2010, he was selected by the American Meteorological Society to be honored at a special symposium dedicated to his life and career. However, amidst the excitement and joy gathering information for the occasion, he suddenly passed away on October 13th, 2010 at his home. He is survived by his family--four grandchildren, sons Takashi and Satoshi, wife Yoko, and sibling Tetsuo Yanai.</p>
</div>
</div>
</header>
<div  class="ucla campus">
<?php
$args = array (
        'post_type'       => 'post',
        'category_name'=> 'yanai-lectures',
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

