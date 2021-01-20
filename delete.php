<?php
session_start();
require('config.php');
// If the values are posted, insert them into the database.

$name=$_SESSION['name'];
$usn=$_SESSION['usn'];
$sql = "delete from print_details where usn = '$usn' and username = '$name'";    
$res1=mysqli_query($conn, $sql);
$sql1 = "delete from files where usn = '$usn'";  
$res2=mysqli_query($conn, $sql1);
 echo '<h4><center>Deleted Successfully</center></h4>';
header('Refresh:2; url=xerox.php');


?> 
