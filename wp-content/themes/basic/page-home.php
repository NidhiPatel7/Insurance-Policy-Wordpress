<?php get_header() ?>
<div id="" class="hero-area-bg">
<?php
//echo do_shortcode('[smartslider3 slider=2]');
?>


<section class="section2 " id="top">
							<div class="section2text">
								<h1>Lorem Ipsum is simply dummy text</h1>
								<p>Lorem Ipsum is simply dummy textLorem Ipsum is simply dummy text </p>
								
							</div>
					</section>


</div>
    <?php
      	while (have_posts()) :
      		the_post();
         	get_template_part('partials/content','index');
   		endwhile;
    ?>
   

   <?php get_template_part('testimonial')?>

   <?php get_template_part('claim')?>
	

<?php get_footer()?>
