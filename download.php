<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

 <h2 class="about-title"><br>Todays prints</h2>
          <table>
<thead>
    <th>OrderId</th>
    <th>usn</th>
    <th>username</th>
    <th>Paper type</th>
    <th>Document size</th>
    <th>Binding option</th>
    <th>No of copies</th>
    <th>Color/B&W</th>
    <th>Sides</th>
    <th>filname</th>
    <th>Action</th>
    
</thead>
<tbody>
  <?php

    $sql="SELECT * from print_details  INNER JOIN files ON files.OrderId=print_details.OrderId where date(`date_time`)";
    if ($res1=mysqli_query($conn, $sql)) {
     while($row = mysqli_fetch_array($res1)){
      print "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td>";
      $link="upload/$row[9]";
      print "<td><a href='$link' target='_blank'>Download</a></td></tr>";
     }}
 ?>

</tbody>
</table>

</body>
</html>