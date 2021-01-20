<?php
session_start();
require_once "config.php";

  $fileName=$_FILES["resume"]["name"];
  $fileSize=$_FILES["resume"]["size"]/1024;
  $fileType=$_FILES["resume"]["type"];
  $fileTmpName=$_FILES["resume"]["tmp_name"];  

  if($fileType=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg"){
    if($fileSize<=200000){

      //New file name
      $random=rand(1111,9999);
      $newFileName=$random.$fileName;

      //File upload path
      $uploadPath="Upload/".$newFileName;
      $_SESSION['uploadPath']=$uploadPath;
      //function for upload file
      if(move_uploaded_file($fileTmpName,$uploadPath)){

        echo "Successful"; 
        echo "File Name :".$newFileName; 
        echo "File Size :".$fileSize." kb"; 
        echo "File Type :".$fileType; 



}}}
?> 