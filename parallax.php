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
    </head>
    <style type="text/css">
    html,body{
        height: 100%;
    }
        .parallax1,.parallax2,.parallax3,.parallax4,.parallax5{
            height: 100%;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        .parallax1{
            background-image: url("image/ps31.jpg");
        }
        .parallax1 p,.parallax3 p,.parallax4 p,.parallax5 p{
            background: black;
            color: #fff;
            width: 350px;
            height: 70px;
            padding: 3%;
            margin-top: 45%;
            font-family: Comic;
            border-radius: 5px;
            margin-left: 80px;
            text-align: center;
            text-shadow: -1px 0px black,1px 0px black, 0px 1px black,0px -1px black;
            box-shadow: -1px 0px black,1px 0px black, 0px 1px black,0px -1px black;
        }
        .parallax2{
            background-image: url("image/ps19.jpg");
        }
        .parallax3{
            background-image: url("image/ps37.png");
        }
        .parallax4{
            background-image: url("image/ps34.jpg");            
        }
        .parallax5{
            background-image: url("image/ps1.png");
        }
        .icons ul li{
            margin-top: 100px;
            display: inline-block;
        }
        .circle{
            color: black;
            transition: 0.7s;
            margin-left: 30px;
        }
        .circle:hover{
            transform: rotateY(180deg);
            transition: 1s;
        }
        .box{
            background: black;
            font-family: arial;
            text-align: center;
            padding: 20px;
            color: #fff;
            font-size: 18px;
            opacity: 1;
            text-shadow: 2px 2px 2px grey;
            box-shadow: 0px 3px 3px black,0px -3px 3px black;
        }
        .text p{
            color: black;
            text-align: center;
            font-family: comic;
            font-size: 24px;
        }
        a{
            color: #fff;
        }
    </style>
<body>
<?php
include 'navbar.php';
?>

<div class="parallax1">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-6">
            <p><b>WELCOME TO, input Zero</b></p>
        </div>
    </div>
</div>



<!-- parallax 2-->
<div class="box" style="background: #fff;">
    <div class="text">
        <p><b>What do we have?</b></p>
    </div>
</div>
<div class="parallax2">
    <div class="icons">
        <ul>
            <div class="row">
                <div class="col-lg-3">
                    <li><div class="circle"><img src="image/upload.png" style="width: 300px; height: 300px;"></div></li>
                    <br><br>
                    <p style="text-align: center;color: #fff;margin-left: 18px;text-shadow: -1px 0px black,1px 0px black, 0px 1px black,0px -1px black; font-family: comic;"><b>UPLOADS</b>
                    </p>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-3">
                    <li><div class="circle"><img src="image/socity.png" style="width: 300px; height: 300px;"></div></li>
                    <br><br>
                    <p style="text-align: center;color: #fff;margin-left: 18px;text-shadow: -1px 0px black,1px 0px black, 0px 1px black,0px -1px black;"><b>Department</b>
                    </p>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-3">
                    <li><div class="circle"><img src="image/event.png" style="width: 300px; height: 300px;"></li>
                    <br><br>
                    <p style="text-align: center;color: #fff; margin-left: 18px; text-shadow: -1px 0px black,1px 0px black, 0px 1px black,0px -1px black;"><b>EVENTS</b>
                    </p>
                </div>
            </div>
        </ul>
    </div>
</div>
<!--parallax2 end-->

<!--parallax 3 -->
<div class="box">
    <p><b>Upload Section</b><br>
        Made a project ? or a presentation ? Have some unique ideas ? Upload all of them right here !
    </p>
</div>
<div class="parallax3">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-6">
            <p><a href="upload-form.php" style="font-size: 20px; ">All Uploads by employees</a></p>
        </div>
    </div>  
</div>
<!--parallax 3 end-->


<!--parallax 4-->
<div class="box">
    <p><b>Deartment Section</b><br>
        View all the department of your company . Read there goals and achievments , get to know there team members ,meet them , join them !
    </p>
</div>
<div class="parallax4">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-6">
            <p><a href="socity_page.php" style="font-size: 20px; ">All Department in Company</a></p>
        </div>
    </div>
</div>
<!--parallax 4 end-->

<!--parallax 5 -->
<div class="box">
    <p><b>Event Section</b><br>
        View all the events happening in your company right at your click. Read about them , Comment about them , like/ dislike them, Rate them !
    </p>
</div>
<div class="parallax5">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-6">
            <p><a href="allevents.php" style="font-size: 20px; ">All Events in company</a></p>
        </div>
    </div>
</div>
<!--parallax 5 end -->

<?php
include'footer.php';
?>
