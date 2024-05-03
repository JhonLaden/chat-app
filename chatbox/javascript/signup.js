$(document).ready(function(){
    // Select the form element with class "signup"
    const form = $('.signup form');
    
    // Select the submit button within the form
    continueBtn = form.find('input[type="submit"]');
    
    // Select the submit button within the form
    errorText = form.find('.error-text');

    // Prevent the default form submission behavior
    form.submit(function(e){
        e.preventDefault(); // prevent submission
    });
    
    // Bind a click event handler to the continue button
    continueBtn.click(function(){
        let xhr = new XMLHttpRequest(); // XML objectFit
        xhr.open("POST", "php/signup_tool.php", true);

        xhr.onload = ()=> {
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                    if(data == 'success'){
                        location.href = "users.php";
                    }else{
                        errorText.text(data); // Set the text content
                        errorText.css('display', 'block'); // Set the CSS display property to block
                    }
                }
            }
        }
        // send the form data through ajax to php
        let formData = new FormData(form[0]);
        xhr.send(formData);

    });
});