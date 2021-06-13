<?php
	if ( get_row_layout() == 'box_location' ):
		$class = get_sub_field('class');
		$title = get_sub_field('title');
		$description = get_sub_field('description');
		$content = get_sub_field('content');
		$id = get_sub_field('id');
?>

<div class="box-location <?php echo $class; ?>" id="<?php echo $id; ?>">
	<div class="container">
		<h2 class="section-title"><?php echo $title; ?></h2>

		<div class="box-location__description text--large">
			<?php echo $description; ?>
		</div>

		<div class="box-location__image">
			<?php echo $content; ?>
		</div>
	</div>
</div>

<?php endif; ?>
