<?php 
    //https://www.vardaam.com/wp-json/wp_sites_manager/v1/site_details
    $current_data = file_get_contents('https://www.vardaam.com/wp-json/wp_sites_manager/v1/site_details');
    $array_data = json_decode($current_data, true);
    $extra = "name";
    $array_data['id'] =  $extra;
    $object = (object) $array_data;

    // $array_data[] = $extra;
    // $final_data = json_encode($array_data);
    // $file_content = file_put_contents($current_data, $final_data);
    echo '<pre>',var_dump($object->id),'</pre>';
    // foreach($array_data as $key => $value){
    //     echo '<pre>',var_dump($key),'</pre>'; 
    // }
// sudo docker-compose exec laravel.test bash

?>
