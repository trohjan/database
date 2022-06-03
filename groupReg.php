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
         <h2 class="pull-left">Group Registration</h2>
        <a href="dashboard.php" class="btn btn-success pull-right"><i class="fa fa-home"></i>Home</a>
        <a href="groups.php" class="btn btn-info pull-right"><i class="fa fa-user"></i> View Groups</a>
    </div>

    <div class="container">

    <form class="well form-horizontal" action="groupAction.php" method="post"  id="contact_form">
    <fieldset>




    <!-- Text input-->

    <div class="form-group">
    <label class="col-md-8 control-label">Group Name</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input  name="group_name" id="group_name" placeholder="Enter Group Name" class="form-control"  type="text" required>
    </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group"> 
    <label class="col-md-8 control-label">Select Ward</label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="ward" id="ward" class="form-control selectpicker">
        <option value="Limuru Central">Limuru Central</option>
        <option value="Limuru East">Limuru East</option>
        <option value="Bibirioni Ward"selected>Bibirioni Ward</option>
        <option value="Ngecha Tigoni Ward">Ngecha Tigoni Ward</option>
        <option value="Ndeiya Ward">Ndeiya Ward</option>

    </select>
    </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group"> 
    <label class="col-md-8 control-label">Select Area Of Operation</label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="area_of_operation" id="area_of_operation" class="form-control selectpicker">
        <option value="Kabuku Junction">Kabuku Junction</option>
        <option value="Ngarariga Njeru">Ngarariga Njeru</option>
        <option value="Manguo Swamp" >Manguo Swamp</option>
        <option value="Kabuku">Kabuku</option>
        <option value="Manjiri">Manjiri</option>
        <option value="Ngecha">Ngecha</option>
        <option value="Tigoni Centre">Tigoni Centre</option>
        <option value="Limuru SubCounty">Limuru SubCounty</option>
        <option value="Kwa-Rufus" >Kwa-Rufus</option>
        <option value="Kabuku Downtown" >Kabuku Downtown</option>
        <option value="Upbridge Kwambira">Upbridge Kwambira</option>
        <option value="Njia Ya Gishagi">Njia Ya Gishagi</option>
        <option value="Njengi Plaza Area">Njengi Plaza Area</option>
        <option value="Kamandura">Kamandura</option>
        <option value="Kamonde Stage">Kamonde Stage</option>
        <option value="Ngarariga"selected>Ngarariga</option>
        <option value="Karanjee">Karanjee</option>
        <option value="Kirathimo">Kirathimo</option>
        <option value="Vision Boda">Vision Boda</option>
        <option value="Kamirithu kwao">Kamirithu kwao</option>
        <option value="Kwambira">Kwambira</option>
        <option value="Ngecha Site" >Ngecha Site</option>
        <option value="Nderu Market" >Nderu Market</option>
        <option value="Limuru Kihingo" >Limuru Kihingo</option>
        <option value="Ngecha Matangini">Ngecha Matangini</option>
        <option value="Farmers Limuru">Farmers Limuru</option>
        <option value="Rwamburi Ndeiya">Rwamburi Ndeiya</option>
        <option value="Ndeiya Makutano">Ndeiya Makutano</option>

    </select>
    </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-8 control-label" >Chairman</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input name="chairman_name" id="chairman_name" placeholder="Chairman Name" class="form-control"  type="text">
    </div>
    </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-8 control-label" >Chairman Telephone</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input name="chairman_tel" id="chairman_tel" placeholder="Chaiman Telephone" class="form-control"  type="number">
    </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-8 control-label" >Secretary</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input name="secretary_name" id="secretary_name" placeholder="Secretary Name" class="form-control"  type="text">
    </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-8 control-label" > Secretary Telephone</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input name="secretary_tel" id="secretary_tel" placeholder="Enter Secretary's Tel" class="form-control"  type="number">
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
<script src="groupForm.js"></script>
    
</body>
</html>