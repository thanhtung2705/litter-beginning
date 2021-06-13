<?php 
  $Footer = get_field('footer', 'option');
?>  
      <footer class="footer">
        <div class="container">
          <?php print $Footer; ?>
        </div>
      </footer>
    </div>
    <!-- /wrapper -->

    <?php wp_footer(); ?>
  </body>
</html>
