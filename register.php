<?php

$fname = filter_input(INPUT_POST, 'fname');
$pass = filter_input(INPUT_POST, 'pass');
$email = filter_input(INPUT_POST, 'email');
$confirm = filter_input(INPUT_POST, 'confirm');
$date = date("h:i:sa");
if (!empty($fname)){
    if (!empty($email)){
     if (!empty($pass)){
        if (!empty($confirm)){
            if($pass == $confirm){
                if (checkemail($email)){
        include("database.php");
        $pass = md5($pass);

       
        $query1 = "SELECT email FROM user WHERE email = '$email';";
        $result1 = mysqli_query($conn, $query1);
        if ($result1->num_rows > 0){
                 echo'email already exist';          
        }else{
         //  header('location:loginForm.php?message=Please Check Your Email or Password');
         
        // $row = mysqli_fetch_assoc($result1);
         //$email = $row['email'];
                    $sql = "INSERT INTO user (email,fname,pass,reg_date)
            VALUES ('$email','$fname','$pass','$date')";

            if ($conn->query($sql) === TRUE) {
            echo "<script>
            window.location.href='home.php?name=$fname'</script>";
            }
        }
               



$conn->close();
        }else{
            //  header('location:loginForm.php?message=Password should not be empty');
            echo 'invalid email';
            
      }
    }else{
          //  header('location:registerForm.php?msg=confirm password must be equal to password');
          echo 'confirm password must be equal to password';
          die();
        }
    }else{
           // header('location:registerForm.php?msg=confirm password should not be empty');
           echo 'confirm password should not be empty';
            die();
        }
    }else{
    //header('location:registerForm.php?msg=email should not be empty');
        echo 'password should not be empty';
    die();
    }
        }else{
       // header('location:registerForm.php?msg=Password should not be empty');
            echo 'email should not be empty';
        die();
        }
                }else{
                //header('location:registerForm.php?msg=name should not be empty');
                echo 'name should not be empty';
                die();
                }



                
        function checkemail($str) {
            return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
      }  
?>

