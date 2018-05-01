<?php
include 'navbar.php';
date_default_timezone_set('asia/kolkata');
echo "<br><br>";
?>
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
	background-image: url(image/ps30.jpg);
}
       	header{
    		background: black;
    		padding: 5px;
    	}
    	ul{
    		list-style: none;
    		color: silver;
    	}
    	.getComments{
    		background: red;
    	}
    	.message{
    		resize: none;
    	}
    	.event-name{
    		text-align: center;
    		color: #fff;
    	}
    	.comment-box{
	background: black;
	width: 1150px;
	height:150px;
	padding: 20px;
	margin-bottom: 5px;
	position: relative;
	color: silver;
}
.comment-box:hover{
	background: black;
	color: white;
	transition: 0.7s
}
.delete-form{
	position: absolute;
	top: 0px;
	right:60px;
}
.delete-form button{
	width: 80px;
	height:20px;
	opacity: 0.7;
	background: white;
	color: red;
	border:0px;
	cursor: pointer;
}
.delete-form button:hover{
	opacity: 1;
	background: red;
	color: white;
}
.text {
	color: #fff;
}
.msg{
	color: #000;
}
.Edit-form{
	position: absolute;
	top: 0px;
	right: 0px;
}
.Edit-form button{
	width: 80px;
	height:20px;
	opacity: 0.7;
	background: white;
	color: black;
	border:0px;
	cursor: pointer;
}
.Edit-form button:hover{
	background: green;
	color: white;
	opacity: 1;
}
</style>
<body>

<!--        	<header>
		<ul>
		<div class="row">
				<div class="col-md-6">
					<li class="login">
						<?php
							if (!isset($_SESSION['ID'])) {
								echo "Please login to write comments";
								echo "<form class='login-form' method='POST' action='".getLogin($conn)."'>
								<input type='text' name='userid' placeholder='enter your user id' class='form-control'>
								<input type='password' name='password' placeholder='enter password' class='form-control'>
								<button type='submit' name='login-btn'><p class='msg'>LOG IN<p></button>
								</form>
								<br><br>";
							}
						?>
					</li>
				</div>

				<div class="col-md-6">
					<li class="signup">
						<?php
							if(!isset($_SESSION['ID'])){
								echo "<form method='POST' action='".getSignup($conn)."'>
								<input type='text' name='name' placeholder='enter your name' required class='form-control'>
								<input type='text' name='userid' placeholder='enter your userid' required class='form-control'>
								<input type='password' name='password' placeholder='enter your password' required class='form-control'>
								<button type='submit' name='signup-btn'><p class='msg'>SIGN UP<p></button><br>
								</form>";
						    }
						?>		
					</li>
				</div>
				<li class="logout">
					<?php
						if(isset($_SESSION['ID'])){	
							echo "You are logged in";
							echo "<form class='logout-form' method='POST' action='".getLogout($conn)."'>
							<button type='submit' name='logout-btn'>LOG OUT!</button>
							</form>";
						}
					?>
				</li>
		</div><!--row-->
		</ul>
	</header> -->

<div class="container" theme-showcase" role="main">  
	<div class="wrapper">
		<div class="event-name">		
			<br><br><br><h3><b>Game Development Workshop</b></h3>
			<div class="page-header"></div>
		</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<button class="btn btn-sm">Tags</button>
					<button class="btn btn-sm">Tags</button>
					<button class="btn btn-sm">Tags</button>
				</div>
				<br>
				<div class="panel-body" style="background: #fff;border-radius: 5px">
					<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br><br>

					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<h6><b>Author:</b></h6>
					<button class="btn btn-default">Nitin</button>
					<p>Other articles:
					<a href="#">Article 1</a><br>
					<a href="#">Article 2</a><br>
					<a href="#">Article 3</a><br>
					</p>
				</div>
			</div>
		</div>
		<?php
		if (isset($_SESSION['ID'])) {
			echo"<div class='row'>
					<div class='col-md-6'>
						<form class='like-form' method='POST' action='".likePost($conn)."'>
						<button type='submit' name='like-btn' class='btn btn-primary'><span class='glyphicon glyphicon-thumbs-up' aria-hidden='true'></span> LIKE! </button>
						</form>
					</div>
					<div class='col-md-6'>
						<form class='dislike-form' method='POST' action='".dislikePost($conn)."'>
						<button type='submit' name='dislike-btn' class='btn btn-danger'><span class='glyphicon glyphicon-thumbs-down' aria-hidden='true'></span> DIS-LIKE</button>
						</form>
					</div>
				</div><br>";
		}
		echo"<div class='row'>
				<div class='col-md-4'>
					".getLikes($conn)."	
				</div>
				<div class='col-md-4'>
					".getdisLikes($conn)."
				</div>
			</div><br>";
		if (isset($_SESSION['ID'])) {
			echo "<br><form class='setComments' method='POST' action='".setComments($conn)."'>
			<input type='hidden' name='user' value='".$_SESSION['ID']."'>	
			<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
			<textarea name='message' class='form-control message'></textarea><br>
			<button type='submit' name='commentSubmit'>Comment</button>
			</form>";
		}
		else{
			echo "<br><p class='text'>Login To add Like & comment!!!</p> <br><br>"; 
		}

		echo "<div class='getComments'>
		".getComments($conn)."
		</div>";
		?>
	</div>
</div><!--container-->
<?php
include 'footer.php';
?>


