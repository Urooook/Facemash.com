<?php
include_once "db_goods.php";

if($_POST){
    $id =  $_POST['GOODS1'];
   
    $photo =goods_get_vkId($link,(int)$id);




   $arr = [
       "photo" => $photo ,
       "vk_id"=>$id
    ];


  
    echo json_encode($arr);
   //echo $user;
}