<?php
    if(isset($_POST['submit']))
    {
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];

        if(empty($pass))
        {
            $error_msg['pass']= '<span style="color:#AFA;">Enter the password</span>';
        }
        if(empty($pass2))
        {
            $error_msg['pass2']= '<span style="color:#AFA;">Enter the password</span>';
        }
    }
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8" />
        <title>Registration Site</title>
        <link rel="stylesheet" href="registerstyle.css">
    </head>
    <body>
    




        <form action="" enctype="multisport/form/data" class="form" method="post">
  
        
        <h1>Registration</h1>
            <input type="name" name="name" class="box" placeholder="Enter your name">
            <input type="forname" name="forname" class="box" placeholder="Enter your forname">
            <input type="username" name="username" class="box" placeholder="Enter your username">
            <input type="email" name="email" class="box" placeholder="Enter your mail">
            <input type="password" name="pass" class="box" placeholder="Enter Password">
            <div id="xxx">
            <?php  
            if(isset($error_msg['pass'])){
                echo $error_msg['pass'];
            }
            ?>
            </div>
            <input type="password" name="pass2" class="box" placeholder="Repeat Password">
            <div id="xxx">
            <?php  
            if(isset($error_msg['pass2'])){
               echo $error_msg['pass2'];
            }
            ?>
            </div>





            <input type="submit" name="submit" value="REGISTER" id="submit">
        </form>
    </body>
</html>