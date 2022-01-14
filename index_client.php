<?php
$url="http://prayana.unaux.com/API/add_food_item";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
if(isset($result['status'])){
    if($result['status']==true){
        if(isset($result['result'])){
            if($result['result']==true){
                echo '<pre>';
                print_r($result['data']);
            }else{
                echo $result['data'];
               
            }
        }
    }else{

    }
}else{
    echo "API is Not Working";
}
?>