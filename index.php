<?php
session_start();
    if(isset($_POST['submit']))
    {
        //connection
        $conn = mysqli_connect("localhost", "root", "", "users");


        $username = $_POST['username'];      
        $password = $_POST['password'];

        $sql="SELECT * FROM userstable WHERE username='$username' AND password='$password'";
        $results=mysqli_query($conn, $sql);
        $res=mysqli_fetch_array($results);

        if(empty($username) || empty($password) )
        {
            $error_msg['error']= '<span style="color:#AFA;">Please complete all fields</span>';
        }


        else if(mysqli_num_rows($results) == 1)
        {
            $_SESSION['username'] = $username;
            
            if($res["Usertype"] == "User")
            {
                header('location:http://localhost/Project/Projekt-HTML-CSS-PHP-SQL/usersite/usersite.php'); 
            }
            else if($res["Usertype"] == "Admin")
            {
                header('location:http://localhost/Project/Projekt-HTML-CSS-PHP-SQL/adminsite/adminsite.php');
            }
            else if($res["Usertype"] == "Ban")
            {
                header('location:http://localhost/Project/Projekt-HTML-CSS-PHP-SQL/bansite/ban.php');
            }
        }
        
        else
        {
            $error3_msg['error']= '<span style="color:#AFA;">Wrong username or password combination</span>';
        }
        


    }
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8" />
        <title>Login Site</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="" class="form" method="POST">
            <h1>Login</h1>
            <input type="username" name="username" class="box" placeholder="Enter Username">
            <input type="password" name="password" class="box" placeholder="Enter Password">
            
            <?php  
            if(isset($error_msg['error'])){
               echo $error_msg['error'];
            }
            ?>
            <?php  
            if(isset($error_2msg['error'])){
               echo $error2_msg['error'];
            }
            ?>

            <?php  
            if(isset($error3_msg['error'])){
               echo $error3_msg['error'];
            }
            ?>

            <input type="submit" value="LOGIN" name="submit" id="submit">

            <a href="register/register.php">Register Here</a>
        </form>
    </body>
</html>