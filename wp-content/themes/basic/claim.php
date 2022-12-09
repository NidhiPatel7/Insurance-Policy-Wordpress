

<section class="section8 margin_top_section section-padding">
	<div class=" margin_corner_section">

        <div class="section2text">
			<div class = "container flex">
                <h1>Lorem Ipsum is simply dummy text</h1>
                <div class="header-button" style="">
                    <a style="border: 2px solid white;" rel="nofollow" href="#" class="btn btn-common2">Contact Us</a>
                </div>
            </div>
								
		</div>
    </div>
</div>

            <section class="section8 margin_top_section section-padding">
						<div class="container margin_corner_section">
							<h1 class="h1_line" style="text-align:center">Insurance Policy Claim</h1>
							<div class="tabContainer">
								<div class="content">

									<div id="tab1-content" class="hide active ">
										<div class="tab_flex">
                                        <?php 
                                            // The Query
                                            // $args = array('post_type' => 'claim');
                                            // $the_query = new WP_Query( $args );
                                            
                                            // The Loop
                                            // global $active_class;
                                            // $active_class = 'active';
                                            //     while ( $the_query->have_posts() ) {
                                            //         $the_query->the_post();
                                            //         get_template_part('partials/content','claim');

                                            //     $active_class = '';
                                            //     }
                                            
                                            /* Restore original Post Data */
                                           // wp_reset_postdata();

                                           while (have_posts()) :
                                               the_post();
                                              get_template_part('partials/content','claim');
                                            endwhile;

                                        ?>
                                        </div>
									</div><!-- end of tab1 -->
								</div>
							</div>	
							</div>
							
						</section>

