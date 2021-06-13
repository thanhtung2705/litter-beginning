<?php get_header(); ?>
	<main role="main">
    <div class="container">
      <div class="main-content">
        <h1><?php _e( 'Latest Posts', 'beginnings' ); ?></h1>
        <?php get_template_part('loop'); ?>
        
        <!-- pagination -->
          <div class="pagination">
            <?php beginnings_pagination(); ?>
          </div>
        <!-- /pagination -->

      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>
  <div class='form-overlay js-close-form'></div>
<?php get_footer(); ?>
