<?php
session_start();
require_once "config.php";
 $susn=$_POST['usn']; 
 $suname=$_POST['uname'];
 $_SESSION['username']=$suname;
 $spass=$_POST['pass'];
 $srpass=$_POST['rpass'];
 $semail=$_POST['email'];
 $sphno=$_POST['phno'];
 $res = mysqli_query($conn,"insert into stud_login values('$susn','$suname','$semail','$sphno','$spass')");
$_SESSION['email']=$semail; 
 $_SESSION['password']=$spass;
  header('Refresh:2; url=student.php');
  echo '<h4><center> Signup successful </center></h4>';
?>