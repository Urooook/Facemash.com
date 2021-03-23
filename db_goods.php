<?php
    require_once "config.php";

//     function goods_all($link){
//     $query = "SELECT * FROM vkmini5 order by id desc";
//     $result = mysqli_query($link, $query);

//     if(!$result)
//         die(mysqli_error($link));

//     $n = mysqli_num_rows($result);
//     $goods = array();

//     for($i = 0; $i < $n; $i++){
//         $row = mysqli_fetch_assoc($result);
//         $goods[] = $row;
//     }

//     return $goods;
// }
function goods_get_vkId($link, $id){
     $query = "SELECT src,name FROM vkapi where vk_id=".(int)$id."";
   // $query = "SELECT src FROM vkapi where id=".(int)$id."";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $good = mysqli_fetch_assoc($result);

    return $good;
}

function goods_get($link, $id){
    $query = "SELECT * FROM vkapi where id=".(int)$id."";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $good = mysqli_fetch_assoc($result);

    return $good;
}

function goods_get_score($link, $id){
    $query = "SELECT score FROM vkapi where vk_id=".(int)$id."";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $good = mysqli_fetch_assoc($result);

    return $good;
}
function update_rating($link, $id,$score){
    $query = "UPDATE vkapi SET score=".(int)$score." where vk_id=".(int)$id."";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

        return mysqli_affected_rows($link);

    return $good;
}

function select_top($link){
    $query = "SELECT * FROM vkapi ORDER BY score DESC LIMIT 10 ";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $goods = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $goods[] = $row;
    }

    return $goods;
}
?>