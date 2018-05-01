
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    </head>
    <style type="text/css">
    	body{
    		background-image: url('image/ps6.png');
    	}
    	.not-loggedin p{
    		color: #fff;
    		font-size: 30px;
    		font-family: arial;
    		text-align: center;
    		-webkit-text-stroke: 1px black;
    	}
    </style>
    <body>
        <br><br><br>
        <div class="container" theme-showcase" role="main">   
        <?php
include 'navbar.php';
?> 	
        	<?php 
        		echo"<div class='row not-loggedin'>
                <div class='col-md-5'>
                    <p><b>Login</b></p><br>
                    <form class='login-form' method='POST' action='".getLogin($conn)."'>
                    <input type='text' name='userid' placeholder='enter your user id' class='form-control'>
                    <input type='password' name='password' placeholder='enter password'class='form-control'><br>
                    <button type='submit' name='login-btn'>LOG IN</button>
                    </form>
                </div><!--column-->

                <div class='col-md-2'>
                    <br><br><br><p><b>Or</b></p><br>
                </div><!--column-->

                <div class='col-md-5'>
                    <p><b>Sign Up</b></p><br>
                    <form method='POST' action='".getSignup($conn)."'>
                    <input type='text' name='name' class='form-control' placeholder='enter your name' required>
                    <input type='text' name='userid' class='form-control' placeholder='enter userid' required>
                    <input type='password' class='form-control' name='password' placeholder='enter your password' required><br>
                    <button type='submit' name='signup-btn'>SIGN UP</button><br>
                    </form>
                </div><!--column-->
            </div><!--row-->";
        	?>
        </div> 
<?php include 'footer.php';?>