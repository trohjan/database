<?php
        

    
        $member_no = $_POST['member_no'];
        $motor_cycle_reg = $_POST['motor_cycle_reg'];
        $rider_name = $_POST['rider_name'];
        $id_no = $_POST['id_no'];
        $rider_tel = $_POST['rider_tel'];
        $owner_tel = $_POST['owner_tel'];
        $group_name = $_POST['group_name'];
        $ward = $_POST['ward'];
        $area_of_operation = $_POST['area_of_operation'];
        $group_chairman_tel = $_POST['group_chairman_tel'];
        $group_secretary_tel = $_POST['group_secretary_tel'];
        


        //load the ar library
        include 'phpqrcode/qrlib.php';

        //data to be stored in qr
        $text = 
                "Motor Cycle Reg Number: $motor_cycle_reg"."
                RIDER'S NAME: $rider_name"."
                RIDER'S TEL: $rider_tel"."
                OWNER'S TEL: $owner_tel"."
                GROUP NAME: $group_name"."
                WARD: $ward"."
                AREA OF OPERATION: $area_of_operation"."
                CHAIRMAN TEL: $group_chairman_tel"."
                SECRETARY TEL: $group_secretary_tel";

                
               

                $mysqli = new mysqli("localhost", "tj47", "HYuv_5ZHiCMuZ[uo", "firstdb");
                
                // Check connection
                if($mysqli === false){
                    die("ERROR: Could not connect. " . $mysqli->connect_error);
                }

                
                // Attempt insert query execution
                $sql = "UPDATE members
                SET motor_cycle_reg=$motor_cycle_reg, rider_name=$rider_name, id_number=$id_no, rider_tel=$rider_tel, owner_tel=$owner_tel, group_name=$group_name, ward=$ward, area_of_operation=$area_of_operation, group_chairman_tel=$group_chairman_tel, group_secretary_tel=$group_secretary_tel                 
                WHERE member_no = $member_no";
                
    
                

        $file = "images/correction/".$member_no.".png";
        
        //other parameters
        $ecc = 'H';
        $pixel_size = 20;
        $frame_size = 5;

        // Generates QR Code and Save as PNG
        QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
        
        // Displaying the stored QR code if you want

        
        $bigQR = "<img src='".$file."'>";


        


        
            
            
            
            
        

        function function_alert($message) {
            global $bigQR;
            // Display the alert box 
            echo "<script>alert('$bigQR');</script>";
        }
          
       
        // Function call
        function_alert("$member_no have been corrected");

        $mysqli->close();

        

        
    ?>