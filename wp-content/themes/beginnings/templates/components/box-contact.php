<?php
	if ( get_row_layout() == 'box_contact' ):
		$class = get_sub_field('class');
		$title = get_sub_field('title');
		$id = get_sub_field('id');
?>

<div class="box-contact <?php echo $class; ?>" id="<?php echo $id; ?>">
	<div class="container">
		<h2 class="section-title text--center text--white"><?php echo $title; ?></h2>

		<?php if( have_rows('contact') ): 
			while( have_rows('contact') ): the_row(); 
				$contactLeft = get_sub_field('contact_left');
				$contactRight= get_sub_field('contact_right'); ?>

				<div class="box-contact__wrap">
					<div class="box-contact__left">
						<?php echo $contactLeft; ?>
					</div>

					<div class="box-contact__right">
						<?php echo $contactRight; ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php endif; ?>
