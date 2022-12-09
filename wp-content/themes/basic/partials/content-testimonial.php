<?php 
   $name =  get_field('name');
   $policy_id =  get_field('policy_id');
   $date = get_field('live_date');
   $description = get_field('description');
?>


										<div class="tab_content" id="popup">
											<div class="img_left">
												<img src="./wp-content/themes/basic/assets/img/listImg2.png" alt="<?php echo $name ?>">
											</div>
											<div class="content_center">
												<p class="gold_bold"><?php echo $name ?><p class="gold"> <?php echo $policy_id ?></p>
												<p class="gray"><?php echo $description ?></p>
												<p class="gray"><?php echo $date ?></p>
											</div>
									
										</div>
				