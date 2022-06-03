<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin panel dashboard card design usign html and css - www.pakainfo.com</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="dashboard.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.cssS">

</head>
<body>
	<main class="container mt-3 " style="height: 850px; ">
	<div id="header-page" class="container p-5 my-5 bg-dark text-white">
		<h1><?php 
			$t = date('H');
			$nm = $_SESSION['username'] ;
			if ($t < "12") {
				echo "Goodmorning ".htmlspecialchars($_SESSION["username"]);
			}else if($t = "12") {
				echo "Good Afternoon ".htmlspecialchars($_SESSION["username"]);
			}else{
				echo "Good Evening ".htmlspecialchars($_SESSION["username"]);
			}
			?>
		</h1>
	</div>
		
	
		<div class="main-part">
			<p>
				<a href="memberReg.php" class="btn btn-info">Register Member</a>
				<a href="groupReg.php" class="btn btn-success ml-3">Register Group</a>
				<a href="wardReg.php" class="btn btn-primary ml-3">Register Ward</a>
			</p>
			<div class="cpanel">
				<div class="icon-part">
					<i class="fa fa-users" aria-hidden="true"></i><br>
					<small>Members</small>
					<p> 
								<?php 
								require('config.php');
								
															
								$sql = "SELECT * from members";

								if ($result = mysqli_query($mysqli, $sql)) {

									// Return the number of rows in result set
									$rowcount = mysqli_num_rows( $result );
									
									// Display result
									printf($rowcount);
								}
								
								?>
					</p>
				</div>
				<div class="card-content-part">
					<a href="members.php">More Details </a>
				</div>
			</div>
			<div class="cpanel cpanel-green">
				<div class="icon-part">
					<i class="fa fa-money" aria-hidden="true"></i><br>
					<small>Groups</small>
					<p>
					<?php                       
                                                
                      $sql = "SELECT * from groups";

                      if ($result = mysqli_query($mysqli, $sql)) {

                          // Return the number of rows in result set
                          $rowcount = mysqli_num_rows( $result );
                          
                          // Display result
                          printf($rowcount);
                      }
					?>
					</p>
				</div>
				<div class="card-content-part">
					<a href="groups.php">More Details </a>
				</div>
			</div>
			<div class="cpanel cpanel-orange">
				<div class="icon-part">
					<i class="fa fa-bell" aria-hidden="true"></i><br>
					<small>Wards</small>
					<p>
					<?php 
                    
                      
                                                
                      $sql = "SELECT * from wards";

                      if ($result = mysqli_query($mysqli, $sql)) {

                          // Return the number of rows in result set
                          $rowcount = mysqli_num_rows( $result );
                          
                          // Display result
                          printf($rowcount);
                      }?>
					</p>
				</div>
				<div class="card-content-part">
					<a href="#">More Details </a>
				</div>
			</div>
			<div class="cpanel cpanel-blue">
				<div class="icon-part">
					<i class="fa fa-tasks" aria-hidden="true"></i><br>
					<small>Chaimans</small>
					<p>

					</p>
				</div>
				<div class="card-content-part">
					<a href="#">More Details </a>
				</div>
			</div>

			<div class="cpanel cpanel-skyblue">
				<div class="icon-part">
					<i class="fa fa-comments" aria-hidden="true"></i><br>
					<small>Contacts</small>
					<p>

					</p>
				</div>
				<div class="card-content-part">
					<a href="#">More Details </a>
				</div>
			</div>

			<div class="cpanel cpanel-red">
				<div class="icon-part">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
					<small>To Do</small>
					<p>

					</p>
				</div>
				<div class="card-content-part">
					<a href="#">More Details </a>
				</div>
			</div>
			<br><br><br>
			<p>
				<a href="reset.php" class="btn btn-warning">Reset Your Password</a>
				<a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
			</p>

			
			
			
			</div>
		</div>
		
	</main>
</body>
</html>