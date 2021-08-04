<?php get_header(); ?>

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

      <div class="col span_12_of_12">
<?php echo get_avatar( get_the_author_meta('ID'), 200); ?>
 </div>
<div class="col span_9_of_12">
Tester content
</div>
<div class="col span_3_of_12">
<h3 class="yellow-side-header">Contact Informations</h3>
<p><b>Email: </b><?php echo get_the_author_meta('email',$author_id);?>
<br>
<b>Website: </b>
<?php echo get_the_author_meta('user_url', $author_id);?>
<br>
<b>Phone Number: </b>
<?php echo get_the_author_meta('phone-number', $author_id);?>
<br>
<b>Office Location: </b>
<?php echo get_the_author_meta('office-location', $author_id);?>
<br></p>
</div>

</div>
</main>

<?php get_footer(); ?>
