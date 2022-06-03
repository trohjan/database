<?php 
include('config.php');
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
    <link rel="stylesheet" href="memberReg.css">
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
    </div>

    <div class="container">

    <form class="well form-horizontal" action="onlyQR.php" method="post"  id="contact_form">
    <fieldset>



    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-8 control-label">Member Number</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input  name="member_no" id="member_no" placeholder="Enter Motor Cycle Reg" class="form-control"  type="text" required>
    </div>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-8 control-label">Motor Cycle Reg</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input  name="motor_cycle_reg" id="motor_cycle_reg" placeholder="Enter Motor Cycle Reg" class="form-control"  type="text" required>
    </div>
    </div>
    </div>

    <!-- Text input-->

    <div class="form-group">
    <label class="col-md-8 control-label" >Member Name</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input name="rider_name" id="rider_name" placeholder="Member Name" class="form-control"  type="text" required>
    </div>
    </div>
    </div>

    

    <div class="form-group">
    <label class="col-md-8 control-label" > Riser's Tel</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input name="rider_tel" id="rider_tel" placeholder="Enter Rider's Tel" class="form-control"  type="text">
    </div>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-8 control-label" > Owner's Tel</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input name="owner_tel" id="owner_tel" placeholder="Enter Owner's Tel" class="form-control"  type="text">
    </div>
    </div>
    </div>

    <div class="form-group"> 
    <label class="col-md-8 control-label">Select Ward</label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="ward" id="ward" class="form-control selectpicker">
        <option value="Limuru Central">Limuru Central</option>
        <option value="Limuru East">Limuru East</option>
        <option value="Bibirioni Ward">Bibirioni Ward</option>
        <option value="Ngecha Tigoni Ward"selected>Ngecha Tigoni Ward</option>
        <option value="Ndeiya Ward">Ndeiya Ward</option>

    </select>
    </div>
    </div>
    </div>

    <div class="form-group"> 
    <label class="col-md-8 control-label">Select Group Name</label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="group_name" id="group_name" class="form-control selectpicker">
        <option value="Kabuku Riders Association Group">Kabuku Riders Assoc.</option>
        <option value="Njira Njeru">Njira Njeru</option>
        <option value="Parklands Bodaboda">Parklands Bodaboda</option>
        <option value="Kaboda Trans Self Help Group">Kaboda Trans SHG</option>
        <option value="Kaboda Three">Kaboda Three</option>
        <option value="Ngecha Motorbike Self Help Group">Ngecha Motorbike SHG</option>
        <option value="Tigoni Bodaboda">Tigoni Bodaboda</option>
        <option value="Limuru SubCounty">Limuru SubCounty</option>
        <option value="Ngarariga Bodaboda Sacco">Ngarariga Bodaboda Sacco</option>
        <option value="Kabuku Downtown">Kabuku Downtown</option>
        <option value="Ngecha Stage 1"selected>Ngecha Stage 1</option>
        <option value="Upendo Bodaboda">Upendo Bodaboda</option>
        <option value="Kamirithu Kwambira Limuru Bodaboda">Kamirithu Kwambira Limuru Bodaboda</option>
        <option value="Limuru Njengi">Limuru Njengi</option>
        <option value="Kamandura Junction">Kamandura Junction</option>
        <option value="Kamonde Bodaboda">Kamonde Bodaboda</option>
        <option value="Bibirioni Bodaboda">Bibirioni Bodaboda</option>
        <option value="Dadas Bodaboda Self Help Group">Dadas Bodaboda SHG</option>
        <option value="Jerusalem Bodaboda Sacco">Jerusalem Bodaboda Sacco</option>
        <option value="New Rider">New Rider</option>
        <option value="Vision Boda">Vision Boda</option>
        <option value="Kamirithu Kwambira Limuru Services">Kamirithu Kwambira Limuru Services</option>
        <option value="Highway Journey">Highway Journey</option>
        <option value="Ngecha Site Bodaboda Youth Group" >Ngecha Site Bodaboda Youth Group</option>
        <option value="Nderu Smart Bikes" >Nderu Smart Bikes</option>
        <option value="Kihingo B.Sacco" >Kihingo B.Sacco</option>
        <option value="Kwambira Gichagi" >Kwambira Gichagi</option>
        <option value="Kwambira Gitogothi" >Kwambira Gitogothi</option>
        <option value="Matangini Group" >Matangini Group</option>
        <option value="RBBS Rwamburi Bodaboda Sacco" >RBBS Rwamburi Bodaboda Sacco</option>
    </select>
    </div>
    </div>
    </div>

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
        <option value="Ngecha"selected>Ngecha</option>
        <option value="Tigoni Centre">Tigoni Centre</option>
        <option value="Limuru SubCounty">Limuru SubCounty</option>
        <option value="Kwa-Rufus" >Kwa-Rufus</option>
        <option value="Kabuku Downtown" >Kabuku Downtown</option>
        <option value="Upbridge Kwambira">Upbridge Kwambira</option>
        <option value="Njia Ya Gishagi">Njia Ya Gishagi</option>
        <option value="Njengi Plaza Area">Njengi Plaza Area</option>
        <option value="Kamandura">Kamandura</option>
        <option value="Kamonde Stage">Kamonde Stage</option>
        <option value="Ngarariga">Ngarariga</option>
        <option value="Karanjee">Karanjee</option>
        <option value="Kirathimo">Kirathimo</option>
        <option value="Vision Boda">Vision Boda</option>
        <option value="Kamirithu kwao">Kamirithu kwao</option>
        <option value="Kwambira">Kwambira</option>
        <option value="Ngecha Site" >Ngecha Site</option>
        <option value="Nderu Market" >Nderu Market</option>
        <option value="Limuru Kihingo" >Limuru Kihingo</option>
        <option value="Ngecha Matangini">Ngecha Matangini</option>
        <option value="Rwamburi Ndeiya">Rwamburi Ndeiya</option>

    </select>
    </div>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-8 control-label" > Chairman's Tel</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input value="0790484633" name="chairman_tel" id="chairman_tel" placeholder="Enter Chairman's Tel" class="form-control"  type="text">
    </div>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-8 control-label" > Secretary's Tel</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input value="0710319857" name="secretary_tel" id="secretary_tel" placeholder="Enter Secretary's Tel" class="form-control"  type="text">
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
<script src="memberReg.js"></script>
    
</body>
</html>