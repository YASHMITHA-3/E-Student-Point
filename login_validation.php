<?php
require_once "config.php";
 $spass=$_POST['pass'];
 $semail=$_POST['email'];
$res1=mysqli_query($conn,"select email,password from stud_login WHERE email='$semail' LIMIT 1");
$row = mysqli_fetch_array($res1);
if ($row[0]==$semail and $row1[1]==$spass);
{

	echo(" crct password&password ");
}
elseif($row[1]!=$spass)
{
	echo(" wrong password ");
}


else{
	echo(" email doesnt exist please signup ");
}

   $conn -> close();
    
?>