<?php

function register_resources() {
	//register main menu
  	register_nav_menu('main-menu','Main Menu' );

    //register testimonial /===Ping testimonial===/
  	$args = array(
      'public' => true,
      'label'  => 'Testimonials'
    );
    register_post_type( 'testimonial', $args );

    $args = array(
      'public' => true,
      'label'  => 'Background'
    );
    register_post_type( 'background', $args );

    $args = array(
      'public' => true,
      'label'  => 'contact'
    );
    register_post_type( 'contact', $args );
}

add_action( 'init', 'register_resources' );


///====== get data from api =====



//create new function for api data

add_action('init',"insurance_policy_claim");

function insurance_policy_claim(){
  // register_post_type( 'claim', [
  //   'lable' => 'Claims',
  //   'public' => true,
  //     //'capaility_type'  => 'post'
  // ]);

  
  $args = array(
    'public' => true,
    'label'  => 'Claims'
  );
  register_post_type( 'claim', $args );
}

//get data from api
//https://api.jsonbin.io/v3/b/639288e46a51bc4f704ad22f


add_action('wp_ajax_nopriv_get_claims_from_api','get_claims_from_api');
add_action('wp_ajax_get_claims_from_api','get_claims_from_api');



function get_claims_from_api(){

  $file = get_stylesheet_directory() . '/report.txt';
    $current_page = ( ! empty($_POST['current_page']) ) ? $_POST['current_page'] : 1;
    $claims = [];
    
    $results = wp_remote_retrieve_body(wp_remote_get('https://api.jsonbin.io/v3/b/639288e46a51bc4f704ad22f/?page=' . $current_page. '&per_page=4'));
   file_put_contents($file, "Current page: ". $current_page. "\n\n", FILE_APPEND);

    $results = json_decode($results);

    if( ! is_array( $results ) || empty( $results ) ){
      return false;
    }


    $claims[] = $results;
    foreach( $claims[0] as $claim ){
      $claim_slug = sanitize_title($claim->name . '-' . $claim->id);
      
      $inserted_claim = wp_insert_post([
        'post_name'=> $claim_slug,
        'post_title'=>$claim_slug,
        'post_type' =>'claim',
        'post_status' => 'publish'
      ]);

      if( is_wp_error( $inserted_claim ) )
      {
        continue;
      }

      $fillable = [
        'field_6392852752d1e' => 'policy_id',
        'field_6392854323c7a' => 'name',
        'field_639285aa9ca21' => 'email',
      ];
      
      foreach( $fillable as $key => $name)
      {
        echo "key=" . $key;
        echo "name=" . $name;
        update_field( $key, $claim->$name, $inserted_claim );
      }

    }

    $current_page = $current_page + 1;
    wp_remote_post( admin_url('admin-ajax.php?action=get_claims_from_api'), [
      'blocking' => false,
      'sslverify' => false,
      'body' => [
        'current_page' => $current_page

      ]
    ]);
}





//filters are used to modified HTML output of WP

function add_class_to_li( $classes, $item, $args, $depth ) { 
    $classes[] = 'nav-item';//li class name which we want
    //echo 'Hi';
	return $classes;
}
add_filter( 'nav_menu_css_class', 'add_class_to_li', 10, 4 ); 


function add_class_to_anchors( $atts ) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );

?>