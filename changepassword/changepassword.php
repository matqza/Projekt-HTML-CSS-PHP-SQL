<?php
session_start();

    if(isset($_POST['submit']))
    {
        //connection
        $conn = mysqli_connect("localhost", "root", "", "users");
        $user = $_SESSION['username'];

        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];

        if(empty($pass) || empty($pass2))
        {
            $error_msg['error']= '<span style="color:#AFA;">Please complete all fields</span>';
        }
        else if(strlen($pass) < 5 || strlen($pass2) < 5)
        {
            $error_msg['error2']='<span style="color:#AFA;">fields had to be over 5</span>';
        }
        else if($pass != $pass2)
        {
            $error_msg['pass']= '<span style="color:#AFA;">passwords are different from each other</span>';
        }
        else{
        //hash password
        //not work [login problem]
       //$hash_pass = (password_hash($pass, PASSWORD_DEFAULT));
        //add to query
        $sql = "UPDATE userstable SET Password = '".$pass."' WHERE  Username = '".$pass."'";       
        mysqli_query($conn, $sql);
        $conn->close();
        header('location:http://localhost/Project/Projekt-HTML-CSS-PHP-SQL/usersite/usersite.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8" />
        <title>Change password Site</title>
        <link rel="stylesheet" href="changepassword.css">
    </head>
    <body>
    




        <form action="" enctype="multisport/form/data" class="form" method="POST">
  
        
        <h1>Change password</h1>
            <input type="password" name="pass" class="box" placeholder="Enter new Password">
            <input type="password" name="pass2" class="box" placeholder="Repeat new Password">
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





            <input type="submit" name="submit" value="CHANGE" id="submit">
        </form>
    </body>
</html>