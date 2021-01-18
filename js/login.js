
/*const logInEmail = document.getElementById('emailLogIn');
const logInPassword = document.getElementById('logInPass');
const validationText = document.querySelector('.validation');

logInEmail.addEventListener('change',checklogin);
logInPassword.addEventListener('change',checklogin);

function checklogin(){
    validationText.innerHTML = "";
        if(logInEmail.value == ""){
            validationText.innerHTML = "please fill email input";
        }else if(logInPassword.value == ""){
            validationText.innerHTML = "please fill password input";
        }  
} 
*/
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

        $("#emailLogIn").keyup(function(){
			if(validateEmail()){
				// if the email is validated
				// set input email border green
				$("#emailLogIn").css("border","3px solid green");
				// and set label 
                $("#emailMsg").html("<p class='text-success'>valid email</p>");
                $("#emailMsg").css("color","green");
			}else{
				// if the email is not validated
				// set border red
				$("#emailLogIn").css("border","3px solid red");
                $("#emailMsg").html("<p class='text-danger'>invalid email address</p>");
                $("#emailMsg").css("color","red");
               
			}

        });
        
        function validateEmail(){
            // get value of input email
            var email=$("#emailLogIn").val();
            // use reular expression
             var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
             if(reg.test(email)){
                 return true;
             }else{
                 return false;
             }
    
        }
   
    });
