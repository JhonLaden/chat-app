$(document).ready(function(){

    const form = $('.users form');

    usersList = form.find('.users-list');
  
    promptText = form.find('.prompt-text');

    setInterval(function(){
        let xhr = new XMLHttpRequest(); // XML objectFit
        xhr.open("get", "../php/users_tool.php", true);

        xhr.onload = ()=> {
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                    usersList.html(data); 
                }
            }
        }
        // send the form data through ajax to php
      
        xhr.send();
    }, 500);

});