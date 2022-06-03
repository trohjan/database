<?php 
  
$ward_name = $_POST['ward_name'];
$color_code = $_POST['color_code'];








$host = "localhost";
$dbname = "indexdb";
$username = "tj47";
$password = "VLCNm1jUJ/lVmAmd";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection error : " .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into wards(ward_name, color_code)
        values(?, ?)");
    $stmt->bind_param("ss", $ward_name, $color_code);
    $stmt->execute();
    $last_id = $stmt->insert_id;
    
    $stmt->close();
    $conn->close();
};
  
  //load the ar library
  include 'phpqrcode/qrlib.php';

  //data to be stored in qr
          $text = 
          
          "GROUP NAME: $secretary_name"."
          COLOUR CODE: $color_code";
         


          $file = "images/wards/"."$last_id".".png";
          
          //other parameters
          $ecc = 'H';
          $pixel_size = 20;
          $frame_size = 5;

          // Generates QR Code and Save as PNG
          QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
          header("Location: wardReg.php");

















?>