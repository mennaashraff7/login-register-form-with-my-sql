<?php

$emailLogIn = filter_input(INPUT_POST, 'emailLogIn');
$passLogIn = filter_input(INPUT_POST, 'logInPass');

//echo $passLogIn;
    if (!empty($emailLogIn)){
     if (!empty($passLogIn)){
        if (checkemail($emailLogIn)){
        include("database.php");
        $pass = md5($passLogIn);
 $query1 = "SELECT fname FROM user WHERE pass = '$pass' AND email = '$emailLogIn';";
                    $result1 = mysqli_query($conn, $query1);
                     
                    if ($result1->num_rows > 0){
                    $row = mysqli_fetch_assoc($result1);
                             $name = $row['fname'];
                            // echo '1';
                           //  header('location:home.php?name=' .$name);
                           echo "<script>
                           window.location.href='home.php?name=$name'</script>";
                                 
                }else{
                 //  header('location:loginForm.php?message=Please Check Your Email or Password');
                  echo 'Please use correct Email or Password';  
                }
                
$conn->close();
        }else{
            //  header('location:loginForm.php?message=Password should not be empty');
            echo 'invalid email';
            
      }
    }else{
          //  header('location:loginForm.php?message=Password should not be empty');
             echo 'Password should not be empty';
          die();
    }
        }else{
           // header('location:loginForm.php?message=email should not be empty');
            echo 'email should not be empty';
        die();
        }


        function checkemail($str) {
            return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
      }     
?>

