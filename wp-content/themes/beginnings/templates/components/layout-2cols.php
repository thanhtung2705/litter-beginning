<?php
	if ( get_row_layout() == 'layout_2cols' ):
		$class = get_sub_field('class');
		$title = get_sub_field('title');
		$image = get_sub_field('image');
		$id = get_sub_field('id');
?>

<div class="layout-2cols <?php echo $class; ?>" id="<?php echo $id; ?>">
	<?php if ($image): ?>
	<div class="col-item margin-bottom image-mobile">
		<?php echo wp_get_attachment_image( $image['ID'], ' ' ); ?>
	</div>
	<?php endif; ?>  
	<div class="container">
		<?php if ($title): ?>
			<h2 class="section-title text--center text--white"><?php echo $title; ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('content') ): 
			while( have_rows('content') ): the_row(); 
				$contentLeft = get_sub_field('content_left');
				$contentRight= get_sub_field('content_right'); ?>

				<div class="layout-2cols__wrap">
					<div class="layout-2cols__content-left">
						<?php echo $contentLeft; ?>
					</div>

					<div class="layout-2cols__content-right">
						<?php
							if( have_rows('content_right') ):
							  while ( have_rows('content_right') ) : the_row();
							    if( get_row_layout() == 'image' ):
					        	$image = get_sub_field('image');?>
					        	<div class="col-item">
											<?php echo wp_get_attachment_image( $image['ID'], ' ' ); ?>
										</div>
					        <?php elseif( get_row_layout() == 'content' ): 
					        	$body = get_sub_field('body'); ?>
					        	<div class="col-item">
											<?php echo $body; ?>
										</div>
									<?php endif; ?>
				        <?php endwhile;
				      endif;?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php endif; ?>
