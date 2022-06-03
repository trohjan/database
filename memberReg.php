<?php 
include('config.php');
include ('auth_session.php');


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


$motor_cycle_reg = $rider_name = $id_no = $rider_tel = $owner_tel = $group_name = $ward = $area_of_operation = $chairman_tel = $secretary_tel = "";
$motor_cycle_regErr = $rider_nameErr = $id_noErr = $rider_telErr = $owner_telErr = $group_nameErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//motor cycle registration number
	if (empty($_POST["motor_cycle_reg"])) {
	  $motor_cycle_regErr = "Motor cycle registration is required.";
	} else {
	  $motor_cycle_reg = test_input($_POST["motor_cycle_reg"]);
	  if (!preg_match("/^[a-zA-Z0-9_ ]+$/",$motor_cycle_reg)) {
		$motor_cycle_regErr = "Invalid motor cycle registration number!";
	  }
	}


    //rider name
	if (empty($_POST["rider_name"])) {
		$rider_nameErr = "Member name is required";
	} else {
		$rider_name = test_input($_POST["rider_name"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$rider_name)) {
		  $rider_nameErr = "Only letters and white space allowed";
		}
	}


    //riders id
    if(empty($_POST["id_number"])){
        $id_noErr = "Rider name is required!";
    } elseif(strlen(test_input($_POST["rider_name"])) < 7 || strlen(test_input($_POST["rider_name"])) > 8  ){
        $id_noErr = "Id number can only contain 7 or 8 digitis";
    }else {
        $id_no = test_input($_POST["id_number"]);
        if (!preg_match("/^[0-9]+$/",$id_no)) {
          $id_noErr = "Id can only be a number!";
        } 
    }

    //rider phone
	if(empty($_POST["rider_tel"])){
        $rider_tel = "";
    } else {
        $rider_tel = test_input($_POST["rider_tel"]);
        if (!preg_match("/^[0-9]+$/",$rider_tel)) {
          $rider_telErr = "Phone can only be a number!";
        } 
    }

    //owner phone
    if(empty($_POST["owner_tel"])){
        $owner_tel = "Owner phone is required!";
    } elseif(strlen(test_input($_POST["owner_tel"])) != 10   ){
        $owner_telErr = "Phone number can only contain 10 digitis!";
    }else {
        $owner_tel = test_input($_POST["motor_cycle_reg"]);
        if (!preg_match("/^[0-9]+$/",$owner_tel)) {
          $owner_telErr = "Phone can only be a number!";
        } 
    }

    //group details
    $group_name = $_POST['group_name'];
    $sql = "SELECT group_name, ward, area_of_operation, chairman_tel, secretary_tel FROM groups WHERE group_name='$group_name'";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
       $ward = $row['ward'];
       $area_of_operation = $row['area_of_operation'];
       $chairman_tel = $row['chairman_tel'];
       $secretary_tel = $row['secretary_tel'];


    } else {
        echo "0 results";
    }
    $mysqli->close();

    
    //check error and insert data to db
    if(empty($motor_cycle_regErr) && empty($rider_nameErr) && empty($id_noErr) && empty($rider_telErr) 
	&& empty($owner_telErr) && empty($group_nameErr)){
		$host = "localhost";
        $dbname = "indexdb";
        $username = "tj47";
        $password = "VLCNm1jUJ/lVmAmd";

		$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

        $conn = new mysqli($host, $username, $password, $dbname);
        if ($conn->connect_error){
            die("Connection error : " .$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into members(motor_cycle_reg, rider_name, id_number, rider_tel, owner_tel, group_name, ward, area_of_operation, chairman_tel, secretary_tel)
                values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssssss", $motor_cycle_reg, $rider_name, $id_no, $rider_tel, $owner_tel, $group_name, $ward, $area_of_operation, $chairman_tel, $secretary_tel);
            $stmt->execute();
            $last_id = $stmt->insert_id;
            
            $stmt->close();
            $conn->close();

            //load the ar library
          include 'phpqrcode/qrlib.php';

          //data to be stored in qr
                  $text = "Motor Cycle Reg Number: $motor_cycle_reg"."
                  RIDER'S NAME: $rider_name"."
                  RIDER'S TEL: $rider_tel"."
                  OWNER'S TEL: $owner_tel"."
                  GROUP NAME: $group_name"."
                  WARD: $ward"."
                  AREA OF OPERATION: $area_of_operation"."
                  CHAIRMAN TEL: $chairman_tel"."
                  SECRETARY TEL: $secretary_tel";
  

                  $file = "images/$group_name/"."$last_id".".png";
                  
                  //other parameters
                  $ecc = 'H';
                  $pixel_size = 20;
                  $frame_size = 5;

                  // Generates QR Code and Save as PNG
                  QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
			      header("Location: login.php");
        };

    }




}








?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Members Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="form.css">
    <style>
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<main class="container mt-3 " style="height: 850px; ">
    <div id="header-page" class="container p-5 my-5 bg-dark text-white">
         <h2 class="pull-left">Members Registration</h2>
        <a href="dashboard.php" class="btn btn-success pull-right"><i class="fa fa-home"></i>Home</a>
        <a href="members.php" class="btn btn-info pull-right"><i class="fa fa-user"></i> View Member</a>
        <a href="generateQR.php" class="btn btn-warning pull-right"><i class="fa fa-user"></i> Generate QR Only</a>
    </div>

    <div class="container">

    <form class="well form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  id="contact_form">
    <fieldset>



    <!-- Text input-->

    <div class="form-group">
    <label class="col-md-8 control-label">Motor Cycle Reg</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input value="<?php echo $motor_cycle_reg ?>" name="motor_cycle_reg" id="motor_cycle_reg" placeholder="Enter Motor Cycle Reg" class="form-control"  type="text" >
    </div>
    </div>
    </div>
    <span class="error alert alert-warning" role="alert" id="success_message">* <?php echo $motor_cycle_regErr;?></span>

    <!-- Text input-->

    <div class="form-group">
    <label class="col-md-8 control-label" >Member Name</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input value="<?php echo $rider_name ?>" name="rider_name" id="rider_name" placeholder="Member Name" class="form-control"  type="text" >
    </div>
    </div>
    </div>
    <span class="error alert alert-warning" role="alert" id="success_message">* <?php echo $rider_nameErr;?></span>

    <div class="form-group">
    <label class="col-md-8 control-label" >ID NO.</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input value="<?php echo $id_no ?>" name="id_number" id="id_number" placeholder="ID NO." class="form-control"  type="text">
    </div>
    </div>
    </div>
    <span class="error alert alert-warning" role="alert" id="success_message">* <?php echo $id_numberErr;?></span>

    <div class="form-group">
    <label class="col-md-8 control-label" > Rider's Tel</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input value="<?php echo $rider_tel ?>" name="rider_tel" id="rider_tel" placeholder="Enter Rider's Tel" class="form-control"  type="text">
    </div>
    </div>
    </div>
    <span class="error alert alert-warning" role="alert" id="success_message">* <?php echo $rider_telErr;?></span>

    <div class="form-group">
    <label class="col-md-8 control-label" > Owner's Tel</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input value="<?php echo $owner_tel ?>" name="owner_tel" id="owner_tel" placeholder="Enter Owner's Tel" class="form-control"  type="text">
    </div>
    </div>
    </div>
    <span class="error alert alert-warning" role="alert" id="success_message">* <?php echo $owner_telErr;?></span>

   

    <div class="form-group"> 
    <label class="col-md-8 control-label">Select Group Name</label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT group_name FROM groups";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo '<select name="group_name" id="group_name" class="form-control selectpicker">';
                                
                                while($row = $result->fetch_array()){
                                    echo "<option>". $row["group_name"] . "<option>";
                                }                                            
                            echo "</select>";
                            // Free result set
                            $result->free();
                        } else{
                            echo '<span class="error alert alert-warning" role="alert" id="success_message">* <?php echo $group_name;?></span>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    // Close connection
                    $mysqli->close();
                    ?>
    </div>
    </div>
    </div>
    

    
    
    <input value="<?php echo $ward ?>" name="ward" id="ward" type="hidden">
    <input value="<?php echo $area_of_operation ?>" name="area_of_operation" id="area_of_operation" type="hidden">
    <input value="<?php echo $chairman_tel ?>" name="chairman_tel" id="chairman_tel" type="hidden">
    <input value="<?php echo $secretary_tel ?>" name="secretary_tel" id="secretary_tel" type="hidden">
    
    

    





    <!-- Button -->
    <div class="form-group">
        <label class="col-md-8 control-label"></label>
        <div class="col-md-8"><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
        </div>
    </div>

    </fieldset>
    </form>
</div>



</main>
<script src="memberForm.js"></script>
    
</body>
</html>