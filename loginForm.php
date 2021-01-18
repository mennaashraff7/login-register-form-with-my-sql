<!DOCTYPE html>
<html>
<head>
<title>form</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="container">
    
    <form action="login.php" method="POST" class="ajax">
        <div id="login_title"><h1>log in</h1></div>
        <div class="validation">
            <?php
        if(isset($_GET['message'])){
            $msg = $_GET['message'];
            echo $msg;
        }
        ?>
        </div><br>
        <label for="emailLogIn">email</label><br>
        <input id="emailLogIn" type="email" name="emailLogIn" placeholder="email"><br>
        <div id="emailMsg"></div><br>
        <label for="logInPass">password</label><br>
        <input id="logInPass" type="password" name="logInPass" placeholder="password"><br>
        <input id="submit2" type="submit" value="submit" class="btn">
        <div class="new"><p>are you new?! <a href="registerForm.php">  register now</a></p>
    </div>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="js/login.js"></script> 
</body>
</html>