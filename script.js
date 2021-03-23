
$(function(){


    // export const Script = () =>{

    const getUrl = (method,params) => {
    if(!method) throw new Error('Вы не указали метод');
    params = params || {};
    params['access_token'] = 'c5cfc6d1c6eb08ecb373a215b8a9e253258a4d8fc0d2aac7115de28e6f3f3ec91af4ba15b581c4564f511';
    return 'https://api.vk.com/method/'+ method +'?' + $.param(params)+'&v=5.52';
    };

    const sendRequest = (method,params, func) =>{
        $.ajax({
            url: getUrl(method,params),
            method: 'GET',
            dataType: 'JSONP',
            success: func
            
        });
    }

    const loadFriends = () =>{
       sendRequest('friends.search', {count:60,fields:'photo_100'},function(data){
        //    console.log(data);
           drawFriends(data.response.items);
           
       }); 
    }   
      

 

    const drawDitailedFriend = data =>{
        const user = data.response[0];
        console.log(user);
        const ulHtml = `
            <li>${online(user.online)}</li>
            <li>${user.country.title}</li>
            <li>${sex(user.sex)}</li>
            <li>Дата рождения: ${user.bdate}</li>
            
        `;
        const a = ` <a class="friend-flex" target="_blank" href="https://vk.com/id${user.id}">Перейти на страницу</a>`
        const $information = $('.information');
        $information.find('.imgBig').attr('src', user.photo_400_orig);
        $information.find('h3').text(user.first_name+' '+ user.last_name);
        $information.find('.ulInf').html(ulHtml);
        $information.find('.aAdd').html(a);
    }
    
});
// }; 
