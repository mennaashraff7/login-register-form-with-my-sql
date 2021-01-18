/*
   const fname = document.getElementById('fname');
    const email = document.getElementById('email');
    const password = document.getElementById('pass');
    const confirmPass = document.getElementById('confirm');
    const submit = document.getElementById('submit');
    const validationText = document.querySelector('.validation');
fname.addEventListener('change',check);
email.addEventListener('change',check);
password.addEventListener('change',check);
confirmPass.addEventListener('change',check);

function check(){
    
    validationText.innerHTML = "";
        if(fname.value == ""){
            validationText.innerHTML = "please fill name input";
        }else if(email.value == ""){
            validationText.innerHTML = "please fill email input";
        }else if(!ValidateEmail(email)){
            validationText.innerHTML = "please enter valid email";
        }else if(password.value == ""){
            validationText.innerHTML = "please fill password input";
        }else if(confirmPass.value == ""){
            validationText.innerHTML = "please fill confirm password input";
        }else if(password.value != confirmPass.value){
            validationText.innerHTML = "confirm password is not equal to password";
        }      
}

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}*/

$(document).ready(function(){
    $('form.ajax').on("submit",function(){
        var that = $(this),
            url = that.attr('action'),
            type = that.attr('method'),
            data = {};

    that.find('[name]').each(function(index,value){
        var that = $(this),
            name = that.attr('name'),
            value = that.val();

        data[name] = value;    
    });    

    // AJAX Code To Submit Form.
    $.ajax({
    type: type,
    url: url,
    data: data,
    success: function(result){
        $('.validation').html(result);
    }
    });
    return false;
        });

        $("#email").keyup(function(){
			if(validateEmail()){
				// if the email is validated
				// set input email border green
				$("#email").css("border","3px solid green");
				// and set label 
                $("#emailMsg2").html("<p class='text-success'>valid email</p>");
                $("#emailMsg2").css("color","green");
			}else{
				// if the email is not validated
				// set border red
				$("#email").css("border","3px solid red");
                $("#emailMsg2").html("<p class='text-danger'>invalid email address</p>");
                $("#emailMsg2").css("color","red");
               
			}
			
        });
        
        function validateEmail(){
            // get value of input email
            var email=$("#email").val();
            // use reular expression
             var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
             if(reg.test(email)){
                 return true;
             }else{
                 return false;
             } 
            }
    });

