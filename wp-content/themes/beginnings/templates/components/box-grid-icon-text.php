<?php
	if ( get_row_layout() == 'box_grid_icon_text' ):
		$sectionTitle = get_sub_field('section_title');
		$description = get_sub_field('description');
		$class = get_sub_field('class');
		$link = get_sub_field('link');
		$id = get_sub_field('id');
?>
<div class="box-grid-icon-text text--white text--center <?php echo $class; ?>" id="<?php echo $id; ?>">
	<div class="container">
		<h2 class="section-title"><?php echo $sectionTitle; ?></h2>

		<div class="box-grid-icon-text__description text--large">
			<?php echo $description; ?>
		</div>

		<div class="box-grid-icon-text__link">
			<a href="enquire-now" class="btn js-anchor" target="<?php echo $link['target']; ?>"><?php if($link['title']) {echo $link['title'];} else {echo 'Enquire now';} ?></a>
		</div>

		<div class="box-grid-icon-text__wrap">
			<?php if (have_rows('box_item')):
        while (have_rows('box_item')): the_row();
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $content = get_sub_field('content');  ?>
          <div class="box-grid-icon-text__item">
	          <div class="box-grid-icon-text__image">
	            <?php echo wp_get_attachment_image( $image['ID'], ' ' ); ?>
	           </div> 
	          <h3 class="box-grid-icon-text__title">
	            <?php echo $title; ?>
	          </h3>
	          <div class="box-grid-icon-text__content">
	          	<?php echo $content; ?>
	          </div>
	        </div>
        <?php endwhile;
      endif;?>
		</div>
	</div>
</div>

<?php endif; ?>
