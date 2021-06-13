<?php
if( have_rows('component') ):
     // loop through the rows of data
  while ( have_rows('component') ) : the_row();
    // Box Grid Icon Text
    get_template_part('templates/components/box-grid-icon-text');

    // Box Location
    get_template_part('templates/components/box-location');

    // Layout 2cols
    get_template_part('templates/components/layout-2cols');

    // Box Contact
    get_template_part('templates/components/box-contact');

  endwhile;
endif;?>
