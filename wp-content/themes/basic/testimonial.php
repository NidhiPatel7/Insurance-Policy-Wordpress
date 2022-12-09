 <!-- Testimonial Section Start -->
 <!-- <section id="testimonial" class="testimonial section-padding">
      <div class="container">
        
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s"> -->
            

            <section class="section8 margin_top_section section-padding">
						<div class="container margin_corner_section">
							<h1 class="h1_line" style="text-align:center">Insurance Policy</h1>
							<div class="tabContainer">
								<div class="content">

									<div id="tab1-content" class="hide active ">
										<div class="tab_flex">
            <?php 
                  // The Query
                  $args = array('post_type' => 'testimonial');
                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                  global $active_class;
                  $active_class = 'active';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part('partials/content','testimonial');

                    $active_class = '';
                    }
                
                  /* Restore original Post Data */
                  wp_reset_postdata();

              ?>
              
              
              </div>
									</div><!-- end of tab1 -->
							
								
								</div>
							</div>

								
							</div>
							
						</section>
              
            <!-- </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Testimonial Section End -->