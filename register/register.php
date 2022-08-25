<?php
    if(isset($_POST['submit']))
    {
        //connection
        $conn = mysqli_connect("localhost", "root", "", "users");


        $name  = $_POST['name'];      
        $forname = $_POST['forname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $usertype = "Usertype";

        if(empty($pass) || empty($pass2) || empty($name) || empty($forname) || empty($username) || empty($email))
        {
            $error_msg['error']= '<span style="color:#AFA;">Please complete all fields</span>';
        }
        else if(strlen($pass) < 5 || strlen($pass2) < 5 || strlen($name) < 5 || strlen($forname) < 2 || strlen($username) < 5 || strlen($email) < 5 )
        {
            $error_msg['error2']='<span style="color:#AFA;">fields had to be over 5</span>';
        }
        else if($pass != $pass2)
        {
            $error_msg['pass']= '<span style="color:#AFA;">passwords are different from each other</span>';
        }
        else{
        //hash password
       $hash_pass = (password_hash($pass, PASSWORD_DEFAULT));
        //add to query
        $sql = "INSERT INTO userstable(Name, Forname, Username, Mail, Password)
        VALUES('$name', '$forname', '$username', '$email', '$hash_pass')";            
        mysqli_query($conn, $sql);
        $conn->close();
        header('location:http://localhost/Project/Projekt-HTML-CSS-PHP-SQL/');
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
    




        <form action="" enctype="multisport/form/data" class="form" method="POST">
  
        
        <h1>Registration</h1>
            <input type="name" name="name" class="box" placeholder="Enter your name">
            <input type="forname" name="forname" class="box" placeholder="Enter your forname">
            <input type="username" name="username" class="box" placeholder="Enter your username">
            <input type="email" name="email" class="box" placeholder="Enter your mail">
            <input type="password" name="pass" class="box" placeholder="Enter Password">
            <input type="password" name="pass2" class="box" placeholder="Repeat Password">
            <div id="xxx" name="error">
            <?php  
            if(isset($error_msg['error'])){
               echo $error_msg['error'];
            }
            else if(isset($error_msg['error2'])){
                echo $error_msg['error2'];
             }
            
            else if(isset($error_msg['pass'])){
                echo $error_msg['pass'];
             }

            ?>
            </div>





            <input type="submit" name="submit" value="REGISTER" id="submit">
        </form>
    </body>
</html>