<?php
session_start();
date_default_timezone_set('asia/kolkata');
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
    </head>
    <style type="text/css">
		body{
		background: #fff;
		background-image: url(image/ps29.png);
	}

	.navbar{
		margin-top: 15px;
		padding: 9px;
	}
	.navbar-search{
		margin-top: 3px;
		float: left;
	}
	.dropdown{
		float: right;
		padding: 5px;
	}
	.date p{
		color: black;
	}
div.polaroid {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div.container {
  padding: 10px;
}
div.container {
    padding: 10px;
}
	.jumbotron{
		text-align: center;
	}
	.panel .panel-heading{
		background: black;
		color: white;
		font-family: arial;
		text-align: center;
	}
	.heading h2{
		padding: 5px;
		color: white;
		font-family: comic;
		text-align: center;
		margin-top: 15px;
	}
	.well{
		background: black;
		color: grey;
		text-align: center;
		font-family: arial;
		width: 100%;
	}
	.well .col-md-4:hover{
		color: #fff;
	}
	.footer-end{
		background: #38382e;
		width: 100%;
	}
	.footer-end p{
		color: gray;
		height: 21px;
		font-family: arial;
		text-align: center;
	}
	.footer-end p:hover{
		color: #fff;
	}

.icon{
	list-style: none;
	display: inline;
	padding: 0;
}
.icon li{
	display: inline;
	margin:0 5px;
}
.icon .facebook,.icon .twitter,.icon .linkedin, .icon .google-plus{
	background: gray;
}
.icon .fa{
	margin: auto;
	color: white;
	padding: 14px;
	transition: 0.9s;
}
.icon li a {
	display:inline-block;
	position:relative;
	margin:0 auto 0 auto;
	border-radius:50%;
	text-align:center;
	width: 50px;
	height: 50px;
	font-size:20px;
}

.icon .facebook:hover{
	background: #3b5998;
}
.icon .twitter:hover{
	background: #33ccff;
}
.icon .linkedin:hover{
	background: #007bb7;
}
.icon .google-plus:hover{
	background: #BD3518;
}
.team-carousel img{ 
	margin-left: 50%;
}
.icon .fa:hover{
	transform: rotate(360deg);
	transition: 0.2s;
}

</style>
    <body>
        <div class="container" theme-showcase" role="main">  

	<body>
	<?php include'navbar.php';?>

		<div class="container" theme-showcase" role="main">
			

			<div class="heading">
				<h2><b>Google Students Club</b></h2>
			</div>
			
			<div class="page-header"></div>

		<div class="row">
			<div class="col-md-4">
				<div class="polaroid">
				  <img src="image/team.png" alt="Norway" style="width:100%">
				  <div class="date">
				    <p>Hardanger, Norway</p>
				  </div>
				</div>
			</div><!--column-->

			<div class="col-md-8">
				<div class="jumbotron">
					<h3><b>Our Aim</b></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div><!--column-->
		</div><!--row-->

	<div class="team-carousel">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
   		 	<!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		    </ol>
	    	<!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="item active">
		        <img src="image/ps6.png" alt="Chania" width="660" height="345">
		      </div>

		      <div class="item">
		        <img src="image/ps5.png" alt="Chania" width="660" height="345">
		      </div>
		    
		      <div class="item">
		        <img src="image/ps6.png" alt="Flower" width="660" height="345">
		      </div>

		      <div class="item">
		        <img src="image/ps4.png" alt="Flower" width="660" height="345">
		      </div>
		    </div>
	    	<!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		</div>
	</div>

	<br><br>


		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-heading">Our Achievments!</div>
				  <div class="panel-body">
				    <ul>
				    	<li>1.aaaaaaaaaaaaa</li>
				    	<li>2.sssssssss</li>
				    	<li>3.ddddddddddd</li>
				    	<li>4.ffffffffffffff</li>
				    </ul>
				  </div>
				</div>
			</div><!--column-->

			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">Our Previous Work</div>
					<div class="panel-body">
						Worked in college fest momentum team to ensure proper results of all the events happing in event. price distribution , judge allocation all is managed by us !
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis
					</div>
				</div>
			</div><!--column-->
		</div><!-- row -->

<?php
			if (isset($_SESSION['ID'])) {
				echo "<br><form class='join' method='POST' action='".join($conn)."'>
			<input type='hidden' name='user' value='".$_SESSION['ID']."'>	
			<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
			<input type='hidden' name='socity' value='GAME DEVELOPMENT'>
			<button type='submit' name='joinSubmit'>JOIN</button>
			</form>";

			}

?>
		</div> <!-- main container-->
		<br><br>

		<div class="footer">
			<div class="well">
				<div class="row">

					<div class="col-md-4"><b>About Us</b><br>
					<p>We at NCU ensure to provide quality education to hand picked students and make them excel in there futture . We aim at practical and theoritical learning</p>
					</div>

					<div class="col-md-4"><b>Contact Us</b>
					<p>Phone no.- +919999915487<br>Landline-0129-2245414<br>Email Id-Nitinofficial27@gmail.com<br>15scu140</p></div>

					<div class="col-md-4"><b>Important Links<br></b>
					<ul class="icon">
						<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></a></li>
						<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></a></li>
						<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></a></li>
					</ul>
					</div>

				</div><!--row-->
			</div><!--well-->

		<div class="footer-end">
			<div class="row">
				<p>© 2017 The NorthCap University. All Rights Reserved.  | Disclaimer | Archive | Recruitment | Sitemap | Locate Us |  Contact  </p>
			</div>
		</div>
		</div><!--footer-->
    
  </body>
</html>