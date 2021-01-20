<?php
require_once "config.php";
$email = $_POST['email']; 
$password = $_POST['pass'];  
           
        $sql = "select email from stud_login where email = '$email'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
        $sql="UPDATE stud_login set password='$password' where email = '$email' ";
        $result = mysqli_query($conn, $sql);  
        
            header('Refresh:2; url=slogin.html');
            echo '<h4><center> Reset successful </center></h4>';
           }
          else{
   header('Refresh:2; url=slogin.html');
	echo '<h4><center> Email id does not exist please signup </center></h4>';
}
          
?>  