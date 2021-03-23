<?php
include_once "generateId.php";
include_once "db_goods.php";

if($_POST){
    $Id1 = $_POST['GOODS1'];
    $Id2 = $_POST['GOODS2'];
    $IdWin = $_POST['GOODS3'];

    $score1 = goods_get_score($link,$Id1);
    $score2 = goods_get_score($link,$Id2);
    $scoreWin = goods_get_score($link,$IdWin);

    $Ea =(1+ 1/(1+10**(($score2[score]-$score1[score])/400)));
    $Eb =(1+ 1/(1+10**(($score1[score]-$score2[score])/400)));

   

    if ($Id1===$IdWin){
        $scoreWin[score] = $Eb*(int)$scoreWin[score];
    }else{
        $scoreWin[score] = $Ea*(int)$scoreWin[score];
    }
    
    $newId1 =  generateId1();
   $finalId = goods_get($link,$newId1);
   $newID1 = $finalId[vk_id]; 

   $newId2 =  generateId2();
   $finalId = goods_get($link,$newId2);
   $newID2 = $finalId[vk_id]; 


   $arr = [
       "Id1" =>$Id1 ,
       "Id2" => $Id2,
       "IdWin"=>$IdWin,
       "newID1"=>$newID1,
       "newID2"=>$newID2
    ];


    // $newId2 = generateId2();

    update_rating($link, $IdWin, $scoreWin[score]);
    

    // echo $Id1.' '.$Id2.' '.$IdWin.' '.$score1[score].' '.$score2[score];
    echo json_encode($arr);
}