<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "users");
$user = $_SESSION['username'];
$error_msg['error'] = '<span  style="font-size:1.5rem; color:#FF0000;">Hello '.$user.'</span>';


    
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8" />
        <title>User Site</title>
        <link rel="stylesheet" href="user.css">
    </head>
    <body>
        <form action="" class="form" method="POST">
            <h1>User Site</h1>
            <?php  
            
            echo $error_msg['error'];
            ?>
            </br></br>
            <h2>do you want change password?</h2>
            </br>
            <a href='http://localhost/Project/Projekt-HTML-CSS-PHP-SQL/changepassword/changepassword.php'>Click Here</a>
            </br></br></br></br> </br></br></br></br>
            <a href='http://localhost/Project/Projekt-HTML-CSS-PHP-SQL/logout/logout.php'>logout </a>

        </form>
    </body>
</html>