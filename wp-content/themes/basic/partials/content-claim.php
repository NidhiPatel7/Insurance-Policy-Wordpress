<?php 
//    $name =  get_field('name');
//    $policy_id =  get_field('policy_id');
//    $email = get_field('email');

?>


<?php
$results = wp_remote_retrieve_body(wp_remote_get('https://api.jsonbin.io/v3/b/639288e46a51bc4f704ad22f'));
 $resultes1 = json_decode($results);


// echo '<pre>';
// print_r($resultes1);
// echo'</pre>';
?>
<?php
foreach ($resultes1 -> record as $item){

    //echo "name=" . $item -> name;
    ?>
    <div class="tab_content" id="popup">
        <div class="img_left">
            <img src="./wp-content/themes/basic/assets/img/listImg2.png" alt="<?php echo $item -> name; ?>"> 
            
        </div>

        <div class="content_center">
                <p class="gold_bold"><?php echo $item -> name; ?><p class="gold"> <?php echo $item -> policy_id ?></p>
            <p class="gray"><?php echo $item -> email ?></p>
                                                
        </div>
    </div> 
 <?php
}
  ?>





									