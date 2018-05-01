<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit your comment here!</title>
	<style type="text/css">
textarea{
	width: 550px;
	height: 40px;
	resize: none;
	background-color: white;
	}
.update-msg button{
	color: white;
	background: red;
	cursor: pointer;
	border: 0px;
	width: 60px;
	height: 30px;
	padding: 2px;
}
.update-msg button:hover{
	background: green;
}

	</style>
</head>
<body>
<?php
date_default_timezone_set('asia/kolkata');

include 'CommentFunctions.php';
include 'connection.inc.php';

$user=$_POST['user'];
$date=$_POST['date'];
$uid=$_POST['uid'];
$message=$_POST['message'];

echo"<form method='POST' class='update-msg' action='".editComments($conn)."'>
	<input type='hidden' name='uid' value='".$uid."'>	
	<input type='hidden' name='user' value='".$user."'>	
	<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	<textarea name='edit-msg'>".$message."</textarea><br>
	<button type='submit' name='Edit-comment'>Edit</button>
	</form>";



?>

</body>
</html>