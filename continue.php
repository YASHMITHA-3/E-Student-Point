 <?php 
 session_start();
 require_once "config.php";
 $email=$_SESSION['email']; 
$password=$_SESSION['password'];
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
   

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpg','png', 'jpeg'])) {
        echo "You file extension must be jpg,png, jpeg";
    } elseif ($_FILES['myfile']['size'] > 5000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
      
        // move the uploaded (temporary) file to the specified destination
        $res1=mysqli_query($conn,"select usn from stud_login where email = '$email' and password = '$password'");
     
            while($row = mysqli_fetch_array($res1)){
            $usn=$row[0];

            $newfilename=$usn."pay".$filename;
             $destination = 'upload/' . $newfilename;
        if (move_uploaded_file($file, $destination)) {
            $pdf = file_get_contents($destination); 
      

    $res="update  print_details set payment='$newfilename'  where usn = '$usn' ";
 
    
                if(mysqli_query($conn,$res)){
                  
            
                
            }}

           
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
  <!DOCTYPE html>
  <html>
  <head>
    <title>Payment & review page</title>
  </head>
  <body>
  
  </body>
  </html>
  <style>
  	  .log
  {
   background-color: #a7df1e;
   color: black;
   position: absolute; 
   top:70px; 
   left: 560px;
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
   background-color: #a7df1e;
   padding: 10px 15px;
  font-size: 24px;
  cursor: pointer;
   color: black;
   position: absolute; 
   top:70px; 
   left: 700px;
  }
  .cancel:hover {
  color: #a7df1e;
  background-color: black;
}
</style>
</head>
<body >
	<h3 style="text-align: center;">Do you have any more copies?</h3>
	<form action="cancel.php" method="POST">
    <button class="cancel"  >YES</button>
    </form> 
	<form action="exit.php" method="POST">
    <button class="log" >No</button> 
</form>
    
</body>
</html>