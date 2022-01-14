<?php
include('../db.php');
$sql="select * from submitorder";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
header('Content-Type:application/json');
if($count>0){
    while($row=mysqli_fetch_assoc($res)){
        $arr[]=$row;
    }
    echo json_encode(['status'=>true,'data'=>$arr,'result'=>'found']);
}else{
    echo json_encode(['status'=>true,'data'=>'No data found','result'=>'not_found']);
}
?>