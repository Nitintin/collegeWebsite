<?php
$name=array("GSC","LUMIERE","NSS","ABHIMANCH","Mathematics","ENACTUS","ENCORE","NEW");
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/76d0ecded6.js"></script>
    </head>
        <style type="text/css">

    .nitin{
    padding: 20px 0;
    text-align: center;
    }
    .nitin > div > div{
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
    transition: 0.2s;
    }
    h2{
    color: #fff;
    font-family: comic;
    }
    p{
    color: #fff;
    }
    .nitin > div:hover > div{
    margin-top: -10px;
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px);
    background: rgba(500, 100, 2000, 0.2);
    transition: 0.5s;
}
.pqr{
width: 250px;
height:200px;
}
.xyz{
    opacity: 0.5;
}
.xyz:hover{
    opacity: 1;
}

body{
    background:black;
    padding:50px;
}
    .container{
        background-image: url("image/ps24.jpg");
    }
</style>    
    <body>
<div class="container theme-showcase " role="main">
<div class="row nitin">
        <div class="col-md-4">
            <div>
                <img src="image\ps3.png" alt="Socity Image" class=" img-circle img-thumbnail pqr">
                <h2><?php echo "$name[0]"; ?></h2>
                <button class="btn btn-danger" data-toggle="collapse" data-target="#info1">Info</button><br><br>
                <div id="info1" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	 			</p>
                </div>
                <a href="socity_info.php" class="btn btn-primary" title="Enlace">JOIN!»</a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="image/ps5.png" alt="Socity Image" class=" img-circle img-thumbnail pqr">
                <h2><?php echo "$name[1]"; ?></h2>
                <button class="btn btn-danger" data-toggle="collapse" data-target="#info2">Info</button><br><br>
                <div id="info2" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	 			</p>
                </div>
                <a href="socity_info.php" class="btn btn-primary" title="Enlace">JOIN!»</a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="image/ps4.png" alt="Socity Image" class=" img-circle img-thumbnail pqr">
                <h2><?php echo "$name[2]"; ?></h2>
                <button class="btn btn-danger" data-toggle="collapse" data-target="#info3">Info</button><br><br>
                <div id="info3" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	 			</p>
                </div>
                <a href="socity_info.php" class="btn btn-primary" title="Enlace">JOIN!»</a>
            </div>
        </div>
    </div>
    <div class="row nitin">
        <div class="col-md-4">
            <div>
                <img src="image/ps5.png" alt="Socity Image" class=" img-circle img-thumbnail pqr">
                <h2><?php echo "$name[3]"; ?></h2>
                <button class="btn btn-danger" data-toggle="collapse" data-target="#info4">Info</button><br><br>
                <div id="info4" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	 			</p>
                </div><a href="socity_info.php" class="btn btn-primary" title="Enlace">JOIN!»</a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="image/ps4.png" alt="Socity Image" class=" img-circle img-thumbnail pqr">
                <h2><?php echo "$name[4]"; ?></h2>
                <button class="btn btn-danger" data-toggle="collapse" data-target="#info5">Info</button><br><br>
                <div id="info5" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	 			</p>
                </div>
                <a href="socity_info.php" class="btn btn-primary" title="Enlace">JOIN!»</a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="image/ps3.png" alt="Socity Image" class=" img-circle img-thumbnail pqr">
                <h2><?php echo "$name[5]"; ?></h2>
                <button class="btn btn-danger" data-toggle="collapse" data-target="#info6">Info</button><br><br>
                <div id="info6" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	 			</p>
                </div>

                <a href="socity_info.php" class="btn btn-primary" title="Enlace">JOIN!»</a>
            </div>
        </div>
    </div>
    <div class="row nitin">
        <div class="col-md-4">
            <div>
                <img src="image/ps4.png" alt="Socity Image" class=" img-circle img-thumbnail pqr">
                <h2><?php echo "$name[6]"; ?></h2>
                <button class="btn btn-danger" data-toggle="collapse" data-target="#info7">Info</button><br><br>
                <div id="info7" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	 			</p>
                </div>
                <a href="socity_info.php" class="btn btn-primary" title="Enlace">JOIN!»</a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="image/ps5.png" alt="Socity Image" class=" img-circle img-thumbnail pqr">
                <h2><?php echo "$name[7]"; ?></h2>
                <button class="btn btn-danger" data-toggle="collapse" data-target="#info8">Info</button><br><br>
                <div id="info8" class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	 			</p>
                </div>
                <a href="socity_info.php" class="btn btn-primary" title="Enlace">JOIN!»</a>
            </div>
        </div>
        <div class="col-md-4">
            <div >
                <i class="fa fa-plus fa-5x xyz" aria-hidden="true"></i>
                <h2><?php echo "string"; ?></h2>

                <a href="socity_info.php" class="btn btn-primary" title="Enlace">JOIN!»</a>
            </div>
        </div>
    </div>
</div> <!-- /container -->
<br>
<?php include 'footer.php';?>

