<?php  
  /* 
  Template Name: Components Page
  */  
?>
<?php get_header(); ?>
  <main role="main">
    <?php
      // check if the flexible content field has rows of data
      get_template_part('templates/components'); 
    ?>
  </main>
<a href="enquire-now" class="btn js-anchor enquire-now-mobile">Enquire now</a>
<div class='form-overlay js-close-form'></div>
<?php get_footer(); ?>
