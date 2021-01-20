<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: student.html");
    exit;
}
require('config.php');
$email = $_POST['email']; 
    $password = $_POST['pass'];  
        //to prevent from mysqli injection   
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
        
        $sql = "select *from stud_login where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $res1=mysqli_query($conn,"select name from stud_login where email = '$email' and password = '$password'");
            while($row = mysqli_fetch_array($res1)){
            $_SESSION['username']=$row[0];
            $_SESSION['email']=$email; 
            $_SESSION['password']=$password;
              
             
              header('Refresh:2; url=student.php');
                echo '<h4><center> Login successful </center></h4>';
         }
        }  
        else{ 
            header('Refresh:2; url=slogin.html');
            echo '<h4><center> Login unsuccessful </center></h4>';
             
        }     
?>  