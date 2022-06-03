
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <title>Limuru Subcounty Bodaboda</title>
        <meta name="author" content="james obaigwa">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="newcss.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">

            <div class="mt-4 p-5 bg-primary text-white rounded">
                <h1>LIMURU SUBCOUNTY</h1>
                
            </div>

            <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="javascript:void(0)"><img class="rounded" src="images/bodaboda.jpg" width="60px"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse padding" id="mynavbar">
                    <ul class="navbar-nav me-auto ">
                      <li class="nav-item padding">
                        <a class="nav-link  btn btn-primary" href="home.php">Home</a>
                    </li>
                    <li class="nav-item padding">
                        <a class="nav-link  btn btn-primary" href="members.php"> View Members</a>
                    </li>
                    <li class="nav-item padding">
                        <a class="nav-link active btn btn-primary" href="memberreg.php">Register New Member</a>
                     </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="text" placeholder="Search">
                      <button class="btn btn-primary" type="button">Search</button>
                    </form>
                  </div>
                </div>
            </nav>


            <div class="container">
                <form class="w3-container" action="updateScript.php" method="POST">      
                    
                    <div class="mb-3 mt-3 mb-3 ">
                        <label class="form-label" for="member_no"><b>Member Number</b></label><br>
                        <input class="form-control" type="text" style="width:80%" type="text" placeholder="Enter member Number" name="member_no" id="member_no" required>
                    </div>
                    <div class="mb-3 mt-3 mb-3 ">
                        <label class="form-label" for="motor_cycle_reg"><b>Motor Cycle Reg Number</b></label><br>
                        <input class="form-control" type="text" style="width:80%" type="text" placeholder="Enter Motor Cycle Registration Number" name="motor_cycle_reg" id="motor_cycle_reg" required>
                    </div>
    
                    <div class="mb-3 mt-3 mb-3">
                        <label class="form-label" for="rider_name"><b>Rider's Name</b></label><br>
                        <input class="form-control" type="text" style="width:80%" type="text" placeholder="Enter Rider's Name" name="rider_name" id="rider_name" required>
                    </div>
    
                    <div class="mb-3 mt-3 mb-3">
                        <label class="form-label" for="id_no"><b>ID NO.</b></label><br>
                        <input class="form-control" type="text" style="width:80%" type="text" placeholder="Enter ID No" name="id_no" id="id_no" required>
                    </div>
    
                    <div class="mb-3 mt-3 mb-3">
                        <label class="form-label" for="rider_tel"><b>Riders Tel</b></label><br>
                        <input class="form-control" type="text" style="width:80%" type="text" placeholder="Enter Rider's Tel" name="rider_tel" id="rider_tel">
                    </div>
    
                    <div class="mb-3 mt-3 mb-3">
                        <label class="form-label" for="owner_tel"><b>Owners Tel</b></label><br>
                        <input class="form-control" type="text" style="width:80%" type="text" placeholder="Enter Owner Tel" name="owner_tel" id="owner_tel" required>
                    </div>
            
            
            
            
                    <label class="form-label" for="group_name"><b>Select Group Name</b></label>
                    <select class="form-select form-select-sm" id="group_name" name="group_name"style="width:63%">
                        <option value="Kabuku Riders Association Group">Kabuku Riders Assoc.</option>
                        <option value="Njira Njeru">Njira Njeru</option>
                        <option value="Packland Bodaboda">Packland Bodaboda</option>
                        <option value="Kaboda Trans Self Help Group">Kaboda Trans SHG</option>
                        <option value="Kaboda Three">Kaboda Three</option>
                        <option value="Ngecha Motorbike Self Help Group">Ngecha Motorbike SHG</option>
                        <option value="Tigoni Bodaboda">Tigoni Bodaboda</option>
                        <option value="Limuru SubCounty">Limuru SubCounty</option>
                        <option value="Ngarariga Bodaboda Sacco">Ngarariga Bodaboda Sacco</option>
                        <option value="Kabuku Downtown">Kabuku Downtown</option>
                        <option value="Ngecha Stage 1">Ngecha Stage 1</option>
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
                        <option value="Kwambira Gitogothi" selected>Kwambira Gitogothi</option>
            
                    </select><br>
                    <br>
                    
                    <div >
                        <label class="form-label" for="ward"><b>Select Ward</b></label><br><br>
                
                        <input class="form-check-input" type="radio" name="ward" value="Limuru Central Ward" checked>
                        <label class="form-label">Limuru Central Ward</label>
                    
                        <input class="form-check-input" type="radio" name="ward" value="Limuru East Ward">
                        <label class="form-label">Limuru East Ward</label>
                    
                        <input class="form-check-input" type="radio" name="ward" value="Ngecha Tigoni Ward" >
                        <label class="form-label">Ngecha Tigoni Ward</label>
                    
                        <input class="form-check-input" type="radio" name="ward" value="Bibirioni Ward">
                        <label class="form-label">Bibirioni Ward</label>
                    
                        <input class="form-check-input" type="radio" name="ward" value="Ndeiya Ward">
                        <label class="form-label">Ndeiya Ward</label><br><br><br>
                    </div>
    
            
                    <label class="form-label" for="area_of_operation"><b>Select Area Of Operation</b></label>
                    <select class="form-select form-select-sm" name="area_of_operation" id="area_of_operation"style="width:59%">
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
                        <option value="Ngarariga">Ngarariga</option>
                        <option value="Karanjee">Karanjee</option>
                        <option value="Kirathimo">Kirathimo</option>
                        <option value="Vision Boda">Vision Boda</option>
                        <option value="Kamirithu kwao">Kamirithu kwao</option>
                        <option value="Kwambira"selected>Kwambira</option>
                        <option value="Ngecha Site" >Ngecha Site</option>
                        <option value="Nderu Market" >Nderu Market</option>
                        <option value="Limuru Kihingo" >Limuru Kihingo</option>
                       
                        
            
                    </select><br><br>
                    <div class="mb-3 mt-3 mb-3">
                      <label class="form-label" for="group_chairman_tel"><b>Group Chairman Tel</b></label><br>
                      <input  value="0719674664" class="form-control" type="text" style="width:80%" type="text" placeholder="Enter Number" name="group_chairman_tel" id="group_chairman_tel"><br><br>
                    </div>

                    <div class="mb-3 mt-3 mb-3">
                      <label class="form-label" for="group_secretary_tel"><b>Group Secreary Tell</b></label><br>
                      <input  value="0714589331"class="form-control" type="text" style="width:80%" type="text" placeholder="Enter Number" name="group_secretary_tel" id="group_secretary_tel" >
                    </div>

                    <br><br>
                    
                    <button type="submit" class="btn btn-primary">Register Member</button>
                    <br><br>
                    <br><br>
                    <hr>
                </form>
            </div>
            
            

        </div>


        
        


        

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>
