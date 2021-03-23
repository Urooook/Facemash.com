<?php
require_once "config.php";
include_once "db_goods.php";



$id1 = rand(1,2076);
$id2 = rand (1,2076);
if($id1===$id2){
    if($id2++){
        $id2++;
    }else if($id2!==0){
        $id2--;
    }
}

function generateId1(){
     $id1 = rand(1,2076);
     return $id1;
    //  $id1 = goods_get($link,$id);
    //  return (int)$id1[vk_id];
}
function generateId2(){
    return $id2 = rand(1,2076);
}
