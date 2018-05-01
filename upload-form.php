<?php
include 'navbar.php';
include 'connection.inc.php';
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    </head>
    <style type="text/css">
        .heading{
            background: black;
            border-radius: 5px;
            width: 100%;
            height: 100px;
            margin-top: 0px;
        }
        .heading p{
            text-align: center;
            font-family: arial;
            color: #fff;
            margin-top: 20px;
            border-color: white;
        }
        .not-loggedin p{
            text-align: center;
            font-family: Comic;
            color: black;
            font-size: 25px;
        }
        .login-msg{
            text-align: center;
            margin: 20px;
            color: black;
            font-size: 24px;
        }
        button{
           margin-left: 20px;
       }
        body{
            background-image:url("image/ps10.jpg"); 
            
        }
        a{
            margin-left: 40%;
        }
        .logout-msg{
            margin-left: 86%;
        }
        .logout-msg p{
           color: black;
           font-family: comic;
        }
        .upload-form{
            margin-left: 40%;
        }
    </style>
    <body>
        <div class="container" theme-showcase" role="main"> 
        <br><br> 
<div class='heading'>
    <h2><b><p>Upload Your Files!</p></b></h2>
</div>

<div class="container theme-showcase" role="main">
    <?php
        if (isset($_SESSION['ID'])){
            //logout button
            echo "<div class='logout-msg'>
            <p>You are Logged In</p>
            <form class='logout-form' method='POST' action='".getLogout($conn)."'>
            <button type='submit' name='logout-btn'>LOG OUT!</button>
            </form>
            </div>";

            echo"<div class='upload-form'>
                        <form method='POST' action='upload.php' enctype='multipart/form-data'>
                        <input type='file' name='file'><br><br>
                        <button type='submit' name='upload-btn'>UPLOAD!</button>
                        </form>

                        <p><b>File details:</b><br>
                            *Size must be less than 500kb<br>
                            *Only pdf,jpg,jpeg,png files are allowed
                        </p>
                        </div>";
                    }
        else{
            echo "<p class='login-msg'>You need to login before uploading any document.</p><br>";
        }
    ?>
        <br><br><p class='login-msg'>~~View all students uploads~~<br></p>
            <a href="allupload.php" class="btn btn-danger btn-lg"><b>View Uploads</b></a>
            <br><br><br>

</div>
</div>
        <?php
       include 'footer.php';
       ?>
  </body>
</html>
