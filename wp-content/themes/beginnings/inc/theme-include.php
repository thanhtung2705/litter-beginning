<?php
  // Add style to header.
  function beginnings_add_styles() {
    wp_register_style('jqueryui', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), '1.12.1', 'all');
    wp_enqueue_style('jqueryui');
    wp_register_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all');
    wp_enqueue_style('styles');
  }
  
  // Add script to footer.
  function beginnings_add_scripts() {
    global $wp_query;
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
      wp_register_script('jqueryui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), '1.12.1'); // Custom scripts
      wp_enqueue_script('jqueryui');
      wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0'); // Custom scripts
      wp_enqueue_script('script');
    }
  }
  
  /*------------*\
      Actions
  \*------------*/
  add_action('wp_enqueue_scripts', 'beginnings_add_styles'); // Add Theme Stylesheet
  add_action('wp_footer', 'beginnings_add_scripts'); // Add Custom Scripts to wp_head
?>
