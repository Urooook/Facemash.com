

<?php
include_once "db_goods.php";
include_once "generateId.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>FasemashBmstu</title>
    <style>
        .interVk{
    display:block;
    width:50%;
    margin: 0 auto;
    text-align: center;
    text-decoration: none;
    color:#fff;
    padding: 10px;
    background-color: rgb(250,62,62);
    border:1px solid black;
    transition: 0.2s all;
}
.interVk:hover{
    cursor:pointer;
    transform: scale(1.1);
    
}

     @media all and (max-width: 500px){
    section{
        width: 300px;
        margin: 0 auto;
    }
    .h1Versus{
        width: 300px;
        margin: 0 auto;
        margin-top: 7px;
        margin-bottom: 7px;
    }
    .asmus2{
        font-size:14px;
    }
}
    </style>
 
</head>
<body>
<?php


$good1 = goods_get($link, $id1);
//echo $good1['vk_id'];
$good2 = goods_get($link, $id2);


?>









<?php

// if (!$_GET['code']){
//     echo ' <div class="modalItem">
//     <div class="helloEveryone">
//         <div class="asmus">
//         <h3 class="asmus1">Салют молодые!</h3>
//         <p class="asmus2">Я замутил аналог, нашумешвшего много лет назад сайта, fasemash.com, но среди красавиц  <span class="bmstu">МГТУ им. Баумана</span></p><br/>
        
//         <p class="asmus2 asmus23">К сожалению не все наши красотки выставляют свои оригинальные фотки,поэтому есть шанс наткнуть на картинки.</p><br/>
//         <p class="asmus2">Чтобы учавствовать - вам нужно войти через Вк</p><br/>
    
        
//         <a  class="interVk button" href="https://oauth.vk.com/authorize?client_id=7652273&display=page&redirect_uri=http://facemash-bauman.site/&scope=friends&response_type=code&v=5.124&state=123456"> Войти Vk </a><br>
       

//         </div>
//     </div>
// </div>';
// }else{
//     echo ' ';
// }

//$token = json_decode(file_get_contents('https://oauth.vk.com/access_token?client_id=7652273&redirect_uri=http://facemash-bauman.site/&client_secret=0Z7wEPSttsEt7cXn1eUQ&code='.$_GET['code']),true);

//if (!$token){
    // exit('error token');
//}

// print_r($token);
// echo $token['access_token'];


?>
<div class="modalItem">
     <div class="helloEveryone">
         <div class="asmus">
       <h3 class="asmus1">Салют молодые!</h3>
         <p class="asmus2">Я замутил аналог, нашумешвшего много лет назад сайта, fasemash.com, но среди красавиц  <span class="bmstu">МГТУ им. Баумана</span></p><br/>
        
         <p class="asmus2 asmus23">К сожалению не все наши красотки выставляют свои оригинальные фотки,поэтому есть шанс наткнуть на картинки.</p><br/>
        
         <button class="interVk button" > Поехали! </button><br>

         </div>
     </div>
 </div>


<header>
    <h1 class="fasemash">FACEMASH<span class="B">B</span>MSTU</h1>
</header>
    <span class="item item-1"></span>
    <span class="item item-2"></span>
    <span class="item item-3"></span>

    <h2 class="sayHi"> Вы попали сюда из-за Своей внешности?  Нет.  Будем ли мы судить по ней?  Да. </h2>
    <h2 class="sayHi hotText"> Кто горячее? <img src="hot.svg" width="30px" height="30px"> Кликни, чтобы выбрать! </h2>
    <section id="section-photo">
    <div class="informationHref">
    <div class="information" data-id="">
        <img class="imgBig" src="" />
        <h3></h3>
        <ul class="ulInf"></ul>
        <p class="aAdd"></p>
    </div>
    </div>
    <div><h1 class="h1Versus">vS</h1></div>
    <div class="informationHref">
    <div class="information" data-id="">
        <img class="imgBig" src="" />
        <h3></h3>
        <ul class="ulInf"></ul>
        <p class="aAdd"></p>
    </div>
    </div>
    </section>
    <br><br><br><br>
    <footer>
        <!-- <h3 class="sayHi">Итоги голосования будут на этом сайте 08.11.2020</h3> -->
        <br> 
        <button class="TopTen" > Посмотреть топ 10         <span class="openList">/\</span> </button><br>
       <section class="table-footer">
       <table class="table">
	<thead>
		<tr>
			<th>Имя</th>
			<th>Рейтинг</th>
			<th>Ссылка</th>
		
		</tr>
	</thead>
	<tbody class="InsertTop">
		<!-- <tr>
            <td  class="flexTr">
                
                <img class="TopPhoto" src="https://sun1-14.userapi.com/s/v1/ig2/Pf-eA6NM6RTvxH5Bl-RcDEv6jPgjtiuPLxi5XUIVVft6aWcevEBJ3dGkzTHBk9Nd_2pbWCPXfx7IGnspUBO_WWCW.jpg?size=200x0&quality=96&crop=0,386,1344,1344&ava=1" alt="">
            <p>Селезнев Юрий</p>
              
        </td>
			<td class="scoreCenter">1400</td>
			<td class="scoreCenter"><a class="friend-flex" target="_blank" href="https://vk.com/id">Перейти на страницу Vk</a></td>
			
		</tr> -->
	
	</tbody>
</table>
       </section>

    </footer>
   
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
    $(function(){

    
   
 
  

 const drawDitailedFriend1 = data =>{
  //  const user = data.response[0];
  const name = data.photo.name;
  const photo = data.photo.src;
  const vk_id = data.vk_id;
  console.log(photo);
  console.log(vk_id);
    
    const a = ` <a class="friend-flex" target="_blank" href="https://vk.com/id${vk_id}">Перейти на страницу Vk</a>`
    const $information = $('.information:first');
    $information.attr('data-id',vk_id);
    $information.find('.imgBig').attr('src', photo);
    $information.find('h3').text(name);
    
    $information.find('.aAdd').html(a);
 }
 const drawDitailedFriend2 = data =>{
    //const user = data.response[0];
    const name = data.photo.name;
    const photo = data.photo.src;
  const vk_id = data.vk_id;
    // console.log(user);
    
    const a = ` <a class="friend-flex" target="_blank" href="https://vk.com/id${vk_id}">Перейти на страницу Vk</a>`
    const $information = $('.information:last');
    $information.attr('data-id', vk_id);
    $information.find('.imgBig').attr('src', photo);
    $information.find('h3').text(name);
    
    $information.find('.aAdd').html(a);
 }

    


    const loadWoman1 = a =>{
        console.log(a);
        //const id = a;
      //  console.log(a);
        //sendRequest('users.get', { user_ids:id, fields:'sex,photo_400,city,country,online,bdate,education'}, drawDitailedFriend1);
        $.ajax({
                  type:'POST',
                  url:'user.php',
                  data:{GOODS1:a},
            
        }).done(function(data){
            console.log(JSON.parse(data));
          // console.log(data);
         drawDitailedFriend1(JSON.parse(data));
          console.log('Успех!');

        });
    }
    const loadWoman2 = b =>{
        console.log(b);
       // const id = b;
        //sendRequest('users.get', { user_ids:id, fields:'sex,photo_400,city,country,online,bdate,education'}, drawDitailedFriend2);
        $.ajax({
                  type:'POST',
                  url:'user.php',
                  data:{GOODS1:b},
            
        }).done(function(data){
            console.log(JSON.parse(data));
          // console.log(data);
          drawDitailedFriend2(JSON.parse(data));
          console.log('Успех!');

        });
    }
    
    
    
   
    
    const reloadGirls = () =>{
        loadWoman1(<?=$good1[vk_id]?>);
        loadWoman2(<?=$good2[vk_id]?>);
    }
    
    reloadGirls();




    $('.informationHref').on('click', function(event){
        // event.preventDefault();
        var id1 = $('.informationHref:first .information').attr('data-id');
        var id2 = $('.informationHref:last .information').attr('data-id');
        var idWin = $(event.target).parent().attr('data-id');
        // console.log(id1);
        // console.log(id2);
        // console.log(idWin);

    

        $.ajax({
            type:'POST',
            url:'victory.php',
            data:{GOODS1:id1,GOODS2:id2,GOODS3:idWin},
            
        }).done(function(data){
            let result = JSON.parse(data);
                console.log(result); 
                if(result.Id1 === result.IdWin){
                    // console.log('Первыый победил');
                    loadWoman2(result.newID1);
                }else if(result.Id2 === result.IdWin){
                    loadWoman1(result.newID1);
                    // console.log('Второй победил');
                }
                
        });
    });

    // $('.button').on('click',function(){
        
    //     $('.modalItem').hide();
    // });

    // $('.button').on('click', function(){
    //    $('.modalItem').hide();

    // });

    $('.interVk ').on('click',function(){
        $('.modalItem').hide();
    });
      
    // var access_token = new URLSearchParams(url.hash).get('access_token');
    //    console.log(url);
    $('.TopTen').on('click',function(){

         $('.TopTen span').toggleClass('rotate');

         if( $('table').css('display') == 'none'){
            $('table').show();
         }else{
            $('table').hide();
         }
       
        console.log('Top');
        const a = 'Топ 10 пришло';
        $.ajax({
                  type:'POST',
                  url:'topten.php',
                  data:{GOODS1:a},
            
        }).done(function(data){
            console.log(JSON.parse(data).Top[1].src);
            const TopTen = JSON.parse(data).Top;
          // console.log(data);
        let tableTop = '';
        let ParentTbody = $('.InsertTop');
        ParentTbody.empty();
            //console.log(ParentTbody);

        TopTen.forEach(function(item, i){
            
           // console.log(item.src);
            tableTop+=`
       
                <tr>
            <td  class="flexTr">
                
                <img class="TopPhoto" src="${item.src}" alt="">
            <p>${item.name}</p>
              
        </td>
			<td class="scoreCenter">${item.score}</td>
			<td class="scoreCenter"><a class="friend-flex vkGo" target="_blank" href="https://vk.com/id${item.vk_id}">Перейти на страницу Vk</a></td>
			
        </tr>

            `;
            
           
        });
           // console.log(tableTop);
        ParentTbody.append(tableTop);
          


        });
    });
    
 });
</script>

 

</body>
</html>