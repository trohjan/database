<?php 

include ('auth_session.php');
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
         <h2 class="pull-left">Ward Registration</h2>
        <a href="dashboard.php" class="btn btn-success pull-right"><i class="fa fa-home"></i>Home</a>
        <a href="wards.php" class="btn btn-info pull-right"><i class="fa fa-user"></i> View Wards</a>
    </div>

    <div class="container">

    <form class="well form-horizontal" action="wardAction.php" method="post"  id="contact_form">
    <fieldset>




    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-8 control-label" >Ward Name</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input name="ward_name" id="ward_name" placeholder="Enter ward name" class="form-control"  type="number">
    </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-8 control-label" >Color Code</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input name="color_code" id="color_code" placeholder="Enter Color Code" class="form-control"  type="text">
    </div>
    </div>
    </div>

    

    

    <!-- Select Basic -->

    <!-- Success message -->
    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

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
<script src="wardForm.js"></script>
    
</body>
</html>