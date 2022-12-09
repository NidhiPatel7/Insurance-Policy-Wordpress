<?php get_header() ?>

    <?php
  
    ?>
   <section class="contactsection2 " id="top">
							<div class="contactsection2text">
							</div>
					</section>

  <!-- Testimonial Section Start -->
    <section id="" class=" section-padding">
      <div class="container">
        <div class="row justify-content-center">
            <?php 
                  // The Query
                  $args = array('post_type' => 'contact');
                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part('partials/content','contact');
                    }
                
                  /* Restore original Post Data */
                  wp_reset_postdata();

              ?>
        </div>
      </div>
    </section>

    <!-- Testimonial Section End -->


	

<?php get_footer()?>