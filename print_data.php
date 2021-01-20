<?php
session_start();
require_once "config.php";

$name=$_SESSION['username'];
$email=$_SESSION['email']; 
$password=$_SESSION['password'];
$ptype=$_POST['Ptype'];
 $dsize=$_POST['Dsize'];
 $btype=$_POST['Btype'];
 $quantity=$_POST['quantity'];
 $colors=$_POST['colors'];
 $sides=$_POST['sides'];
 $time=$_POST['appt'];
 $amount=$_POST['amount'];
$uploadPath=$_SESSION['uploadPath'];
 $appt=$_POST['appt'];

       
 	$res=mysqli_query($conn,"INSERT INTO print_details ('OrderId', 'usn', 'name', 'Paper type', 'Document size', 'Binding option', 'No of copies', 'Color/B&W', 'Sides', 'file', 'time', 'Amount:') VALUES (NULL, '$usn', '$name', '$ptype', '$dsize', '$btype', '$quantity', '$colors', '$sides', '$uploadPath', '$time', '$amount')");

?>