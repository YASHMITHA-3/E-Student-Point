<?php
session_start();
require_once "config.php";
$email=$_SESSION['email']; 
$password=$_SESSION['password'];
$name=$_SESSION['username'];
$ptype=$_POST['Ptype'];
 $dsize=$_POST['Dsize'];
 $btype=$_POST['Btype'];
 $quantity=$_POST['quantity'];
 $colors=$_POST['colors'];
 $sides=$_POST['sides'];
$amount=$_POST['save'];    

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'xerox');
$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
   

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip','jpg','png', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 5000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
      
        // move the uploaded (temporary) file to the specified destination
        $res1=mysqli_query($conn,"select usn from stud_login where email = '$email' and password = '$password'");
     
            while($row = mysqli_fetch_array($res1)){
            $usn=$row[0];

            $newfilename=$usn.$filename;
             $destination = 'upload/' . $newfilename;
        
       
         
        if (move_uploaded_file($file, $destination)) {
            $pdf = file_get_contents($destination); 
      $totalPages = preg_match_all("/\/Page\W/", $pdf, $dummy); 
    $amount+=$totalPages;
  

            $sql = "INSERT INTO files (usn,name, size) VALUES ('$usn','$newfilename', $size)";

    $res="INSERT INTO print_details (usn, username, paper_type, document_size, binding_option, no_copies, color_bw, sides, file, amount) VALUES ('$usn', '$name', '$ptype', '$dsize', '$btype', $quantity, '$colors', '$sides', '$newfilename','$amount')";

            if (mysqli_query($conn, $sql)) {
                if(mysqli_query($conn,$res)){
                  
        
                
            }}}
         else {
            echo "Failed to upload file.";
        }}
    }
}
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];
  
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        exit;
    }

}
?>
<html>
<head>
  <link href="slogin.css" rel='stylesheet'>
    <style type="text/css">
 
.log
  {
   background-color: black;
   padding: 10px 15px;
  font-size: 24px;
  cursor: pointer;
   color: white;


  }
  .log:hover {
  color: red;
  background-color: black;
}

header {
  background: #0d0d0d;
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
}

#header .logo {
  font-size: 32px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 2px;
  text-transform: uppercase;
}

#header .logo a {
  color: #fff;
}



@media (max-width: 992px) {
  #header .logo {
    font-size: 28px;
  }
}

.is-sticky #header {
  background: rgba(0, 0, 0, 0.85);
}

#footer {
  background: #111;
  padding: 30px 0;
  color: #fff;
}

#footer .copyright {
  text-align: center;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #ccc;
}

}
</style>
</head>
<body style="color: black;">
  <meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
<link href="slogin.css" rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libsscript'/>
<script type='text/javascript' src='https://stackpath.bootsbootstrap.bundle.min.js'></script>
<header id="header">
    <div class="container d-flex align-items-center">
 <h1 class="logo mr-auto"><a href="index.html">E-student point</a></h1> 
  </div>
  </header><!-- End Header -->

  


<main id="main">
   <div class="container">
  <div class="row">
    <div class="col-md-4">
        <div class="card" style=" width: 800px; left: 5px;">
            <div class="login-box" style="max-width: 800px;">
              <div class="login-snip" style=" padding: 30px 0px 0px 30px;">
              <h3>Your Print details:</h3>
              
              <p>Name:<?php echo$_SESSION['username']?></p>
              <p>Paper type:<?php echo$ptype?></p>
              <p>Documentsize:<?php echo$dsize?></p>
              <p>Binding type:<?php echo$btype?></p>
              <p>No of copies:<?php echo$quantity?></p>
              <p>Color type:<?php echo$colors?></p>
              <p>Sides type:<?php echo$sides?></p>
              <p>No of page:<?php echo$totalPages?></p>
              <p>Amount:<?php echo$amount?></p>
               </div>
             </div>
           </div>
         </div>
        
    <div class="col-md-5" style=" padding: 30px 0px 0px 40px;">
                  <img src="assets/img/images/qrcode.jpg" width="300px" height="300px">
      <br></br>
                  
  <form action="continue.php" method="post" enctype="multipart/form-data" >
   <label for="files">Upload your transaction receipt below:</label><br></br>
          <input type="file" name="myfile" ><br></br>
     <button class="log" name="save">Submit</button>
   </form>
</div>
</div>
</div>
</div>

</main>


<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>E-student point</strong>. All Rights Reserved
          </div>
         
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
</body>
</html>

