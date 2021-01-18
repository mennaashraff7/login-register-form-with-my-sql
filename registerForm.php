<!DOCTYPE html>
<html>
<head>
<title>form</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
 <div class="container">
    <form action="register.php" method="POST" class="ajax">
    <div id="signUp_title"><h1>sign up</h1></div>
        <div class="validation">
        <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo $msg;
        }
        ?>
        </div><br>
        <label for="fname">name</label><br>
        <input id="fname" type="text" name="fname"><br>
        <label for="email">email</label><br>
        <input id="email" type="email" name="email"><br>
        <div id="emailMsg2"></div><br>
        <label for="pass">password</label><br>
        <input id="pass" type="password" name="pass"><br>
        <label for="confirm">confirm password</label><br>
        <input id="confirm" type="password" name="confirm"><br>
        <input id="submit" type="submit" value="submit" class="btn">
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/register.js"></script>
</body>
</html>