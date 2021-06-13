<?php
/*
 *  Author: Sentius Group
 *  URL: sentiustdigital.com | @ssvtheme
 *  Custom functions, support, custom post types and more.
 */

  require get_template_directory() . '/inc/init.php';

  /* shortcode for the current year */
	function year_shortcode() {
	  $year = date('Y');
	  return $year;
	}

	add_shortcode('year', 'year_shortcode');


?>
