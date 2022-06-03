<?php 


$group_name = $_POST['group_name'];
$ward = $_POST['ward'];
$area_of_operation = $_POST['area_of_operation'];
$chairman_name = $_POST['chairman_name'];
$chairman_tel = $_POST['chairman_tel'];
$secretary_name = $_POST['secretary_name'];
$secretary_tel = $_POST['secretary_tel'];







$host = "localhost";
$dbname = "indexdb";
$username = "tj47";
$password = "VLCNm1jUJ/lVmAmd";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection error : " .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into groups(group_name, ward, chairman_name, chairman_tel, secretary_name, secretary_tel, area_of_operation)
        values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $group_name, $ward, $chairman_name, $chairman_tel, $secretary_name, $secretary_tel, $area_of_operation);
    $stmt->execute();
    $last_id = $stmt->insert_id;

    

           

    $stmt->close();
    $conn->close();
};
 //load the ar library
 include 'phpqrcode/qrlib.php';

 //data to be stored in qr
$text = 
"Group Name: $group_name"."
WARD: $ward"."
AREA OF OPERATION: $area_of_operation"."
CHAIMAN TEL: $chairman_tel"."
SECRETARY NAME: $secretary_name"."
SECRETARY TEL: $secretary_tel";



$file = "images/groups/"."$last_id".".png";

//other parameters
$ecc = 'H';
$pixel_size = 20;
$frame_size = 5;

// Generates QR Code and Save as PNG
QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
header("Location: groupReg.php");
echo "$last_id has been added successful."
        














?>