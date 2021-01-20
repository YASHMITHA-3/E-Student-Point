<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: xerox.php");
    exit;
}
require('config.php');
$email = $_POST['email']; 
    $password = $_POST['pass'];  
        //to prevent from mysqli injection   
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
        
        $sql = "select *from xerox_login where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['xname']="Student point";
            
             header("Refresh:2; url= xerox.php");  
            echo '<h4><center> Login successful </center></h4>';
         }
          
        else{   
            header('Refresh:2;url=xlogin.html');
             echo '<h4><center> Login unsuccessful </center></h4>';
        }     
?>  