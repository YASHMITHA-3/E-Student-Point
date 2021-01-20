<?php
session_start();
require('config.php');
// If the values are posted, insert them into the database.
 $name="";
 $usn= "";
$ans= $_POST['sub'];

$sql="SELECT * from print_details INNER JOIN files ON files.OrderId=print_details.OrderId and files.usn=print_details.usn where print_details.date=CURRENT_DATE ORDER BY print_details.time";
$i=0;
    if ($res1=mysqli_query($conn, $sql)) {
     while($row = mysqli_fetch_array($res1)){
      $i+=1;
      if($i==$ans){
 $name=$row[2];
  $usn=$row[1];
    }
    }}
    $_SESSION['name']=$name;
     $_SESSION['usn']=$usn;
 $code=substr($usn,7,strlen($usn));
 $msg = $name." your copy is ready please come and collect and your code is ".rand(10,100).$code.". ";
$sql = "select email from stud_login where usn = '$usn' and name = '$name'";  
 if ($res1=mysqli_query($conn, $sql)) {
    while($row = mysqli_fetch_array($res1)){
       $mail=$row[0];
        
   }}

?> 
<html>
<html lang="en">

<head>
    <title>logout</title>
    <style type="text/css">
  .log1
  {
   
   position: absolute; 
   top:100px; 
   left: 350px;
   padding: 10px 15px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  }
  .log1:hover {
  color: #a7df1e;
  background-color: black;
}

  .log
  {
  
   position: absolute; 
   top:10px; 
   left: 350px;
   padding: 10px 15px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  }
  .log:hover {
  color: #a7df1e;
  background-color: black;
}
.cancel
  {
  
   padding: 10px 15px;
  font-size: 24px;
  cursor: pointer;

   position: absolute; 
   top:10px; 
   left: 450px;
  }
  .cancel:hover {
  color: #a7df1e;
  background-color: black;
}
body{
  padding: 10px;
}
</style>

</head>
<body >
    <h3 >Are you sure you wanna send message?</h3>
    <form action="mailto:<?php echo$mail?>?subject=Print is ready.&body=Hi <?php echo$msg?>" method="POST">
    <button class="log" ><img src="assets/img/images/thumbs-up.png" width="50" height="50"></button>
</form>
    <form action="xcancel.php" method="POST">
   <button class="cancel"><img src="assets/img/images/thumbs-down.png" width="50" height="50"></button>
   
    </form> 
     <br><br><h3 >If your done delete the record?</h3>
    <form action="delete.php" method="POST">
    <button class="log1" ><img src="assets/img/images/delete.png" width="40" height="40"></button>
</form>
   
    </form> 
</body>
</html>
    
</html>
