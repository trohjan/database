<?php 
include 'phpqrcode/qrlib.php';
$member_no = $_POST['member_no'];
$motor_cycle_reg = $_POST['motor_cycle_reg'];
$rider_name = $_POST['rider_name'];
$rider_tel = $_POST['rider_tel'];
$owner_tel = $_POST['owner_tel'];
$group_name = $_POST['group_name'];
$ward = $_POST['ward'];
$area_of_operation = $_POST['area_of_operation'];
$group_chairman_tel = $_POST['chairman_tel'];
$group_secretary_tel = $_POST['secretary_tel'];

//data to be stored in qr
        $text = "Motor Cycle Reg Number: $motor_cycle_reg"."
        RIDER'S NAME: $rider_name"."
        RIDER'S TEL: $rider_tel"."
        OWNER'S TEL: $owner_tel"."
        GROUP NAME: $group_name"."
        WARD: $ward"."
        AREA OF OPERATION: $area_of_operation"."
        CHAIRMAN TEL: $group_chairman_tel"."
        SECRETARY TEL: $group_secretary_tel";


        $file = "images/correction/"."$member_no".".png";
        
        //other parameters
        $ecc = 'H';
        $pixel_size = 20;
        $frame_size = 5;

        // Generates QR Code and Save as PNG
        QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
        header("Location: memberReg.php");
?>