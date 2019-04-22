<?php
if( have_rows('repeater_field') ):
	$postCount = 1;
	while( have_rows('repeater_field') ) : the_row(); ?>

		<?php
			$repeater_sub_field_1 = get_sub_field('repeater_sub_field_1');
			$repeater_sub_field_2 = get_sub_field('repeater_sub_field_2');
			$repeater_sub_field_3 = get_sub_field('repeater_sub_field_3');
			$repeater_sub_field_4 = get_sub_field('repeater_sub_field_4');
		?>
		<?php $postCount++; ?>
		<div class="parent-class">
			<div class="row">
				<?php if ( ($postCount % 2) == 1 ): ?>
					<div class="hidden-xs col-sm-8">
						<!-- <div class="feature-images feature-images__middle"> -->
							<img src="<?php echo $repeater_sub_field_4['url']; ?>" alt="">
						<!-- </div> -->
					</div>
					<div class="col-sm-4">
						<div class="child-wrapper">
							<div class="child-content">
								<img src="<?php echo $repeater_sub_field_3['url']; ?>' ?>" alt="">
								<p class="h3"><?php echo $repeater_sub_field_2; ?></p>
								<p><?php echo $repeater_sub_field_1; ?></p>
							</div>
						</div>
					</div>
					<div class="hidden-sm hidden-md hidden-lg col-sm-8">
						<!-- <div class="feature-images"> -->
							<img src="<?php echo $screenshot_image['url']; ?>" alt="">
						<!-- </div> -->
					</div>
				<?php else : ?>
					<div class="col-sm-4">
						<div class="child-wrapper">
							<div class="child-content">
								<img src="<?php echo $repeater_sub_field_3['url']; ?>" alt="">
								<p class="h3"><?php echo $repeater_sub_field_2; ?></p>
								<p><?php echo $repeater_sub_field_1; ?></p>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<!-- <div class="feature-images"> -->
							<img src="<?php echo $repeater_sub_field_4['url']; ?>" alt="">
						<!-- </div> -->
					</div>
				<?php endif;  ?>
			</div>
		</div>

	<?php endwhile;
endif;
?>  

https://gist.github.com/nikola0203/335626844a81bf33a9458371de7e8aec