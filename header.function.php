<?php
include 'connection.inc.php';
function getLogin($conn){
	if (isset($_POST['login-btn'])) {
		
		$uid=$_POST['userid'];
		$password=$_POST['password'];

		$sqlUser="SELECT * FROM commentuser WHERE userid='$uid' AND password='$password'";
		$resultUser=$conn->query($sqlUser);
		
		if (!$rowUser=$resultUser->fetch_assoc()) {
			echo "Invalid detAILS";
				header("Location:upload-form.php?LOGIN-ERROR");
			}
		else{
			$_SESSION['ID']=$rowUser['id'];
			echo "YOU ARE NOW LOGGED IN";?>
			<script type="text/javascript">
				window.Location='upload-form.php?loggedin';
			</script>
			<?php
		}
	}
}


function getSignup($conn){
	if (isset($_POST['signup-btn'])) {

		$name=$_POST['name'];
		$userid=$_POST['userid'];
		$password=$_POST['password'];
//-------unique id
		$mysql="SELECT * FROM commentuser WHERE userid='$userid'";
		$result=$conn->query($mysql);
		$row=$result->fetch_assoc();
		if (!isset($row)) {
			$sql="INSERT into commentuser(name,userid,password) values('$name','$userid','$password')";
		$result=$conn->query($sql);
		}
//-----
		else{
			echo "User Id is not unique!!";
		}
	}
}

function getLogout($conn)
{
	if (isset($_POST['logout-btn'])) {
		session_destroy();?>
		<script type="text/javascript">
			window.Location='upload-form.php?logged-out';
		</script><?php
	}
}