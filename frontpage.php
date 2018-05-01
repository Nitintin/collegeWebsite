<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Theme Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
 	<link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/ie-emulation-modes-warning.js"></script>
<style>
body,html{
    height: 100%;
}
.paralla {
    /* The image used */
    background-image: url("image/ps6.png");
    /* Set a specific height */
    height: 100%; 
    opacity: 1;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
a{
text-align:center;
}
.parallax1 {
    /* The image used */
    background-image: url("image/ps22.jpg");
  

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
a{
text-align:center;
}
</style>
    </head>
    <body>
 <?php
 include 'navbar.php';
 ?>
<div class="container" theme-showcase" role="main">
<div class="paralla"></div>
<div class="box" style="background: black,color:white">
    <p>Welcome to NCU Students Corner ! We have Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</div><!--container-->
<?php
include 'footer.php';
?>

  </body>
</html>