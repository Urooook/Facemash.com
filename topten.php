<?php
include_once "db_goods.php";

if($_POST){
    $success =  $_POST['GOODS1'];
   
    $Top  =select_top($link);




   $arr = [
       "Top" => $Top ,
       "sms"=>$success
    ];


  
    echo json_encode($arr);
   //echo $user;
}