<?php

//--------like section-------
function likePost($conn){
	if (isset($_POST['like-btn'])) {
		
		$id=$_SESSION['ID'];
		$sql="SELECT * FROM commentuser WHERE id='$id'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		if ($row['liked']==1) {
		echo "<p class='text'>You already liked this post!</p>";
		}
		else{

		$sql="UPDATE commentuser set liked='1' WHERE id='$id'";
		$sql2="UPDATE commentuser set disliked='NULL' WHERE id='$id'";
		$result=$conn->query($sql);
		$result2=$conn->query($sql2);

		echo "<p class='text'>Now You liked this post</p>";
		}

	}
}

function getLikes($conn){
	$sql="SELECT SUM(liked) FROM commentuser ";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	echo "<div class='text'>";
	echo " <br>Total likes:".$row['SUM(liked)'] ;
	echo "</div>";
}


function dislikePost($conn){

	if (isset($_POST['dislike-btn'])) {
		
		$id=$_SESSION['ID'];
		$sql="SELECT * FROM commentuser WHERE id='$id'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();

		if ($row['disliked']==1) {
		echo "<p class='text'>You already dis-liked this post!</p>";
		}
		else{
		$sql="UPDATE commentuser set liked='NULL' WHERE id='$id'";
		$sql2="UPDATE commentuser set disliked='1' WHERE id='$id'";
		$result=$conn->query($sql);
		$result2=$conn->query($sql2);
		echo "<p class='text'>You disliked this post</p>";
		}
	}
}

function getdisLikes($conn){
	$sql="SELECT SUM(disliked) FROM commentuser ";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	echo "<div class='text'>";
	echo "Total dislikes:".$row['SUM(disliked)'];
	echo "</div>";
}
//---------like section-------

function setComments($conn)
{
	if (isset($_POST['commentSubmit'])) 
	{
	$user=$_POST['user'];
	$date=$_POST['date'];
	$message=$_POST['message'];

	$sql="INSERT INTO COMMENTS(date,user,message) values ('$date','$user','$message')";
	$result=$conn->query($sql);
	}
}

function getComments($conn)
{
	
	$sql="SELECT * FROM comments";
	$result=$conn->query($sql);

while ($row=$result->fetch_assoc()) 
{	$id=$row['USER'];
 	$sql2="SELECT * FROM commentuser WHERE id='$id'";
 	$result2=$conn->query($sql2);
 	$row2=$result2->fetch_assoc();

	echo "<div class='comment-box'>";
		echo $row2['name']."<br>";
		echo $row['DATE']."<br>";
		echo nl2br($row['MESSAGE']) ;

		if (isset($_SESSION['ID'])) {
			if ($_SESSION['ID']==$row['USER']) {
				echo "<form class='Edit-form' method='POST' action='UPDATECOMMENT.php'>
				<input type='hidden' name='uid' value='".$row['uid']."'>	
				<input type='hidden' name='user' value='".$row['USER']."'>	
				<input type='hidden' name='date' value='".$row['DATE']."'>
				<input type='hidden' name='message' value='".$row['MESSAGE']."'>
				<button type='submit' class='btn btn-success btn-sm'>Edit</button>
				</form>";
				echo "<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
				<input type='hidden' name='uid' value='".$row['uid']."'>	
				<button type='submit' name='delete-btn' class='btn btn-danger btn-sm'>Delete</button>
				</form>";

			}
		}
	echo "</div>";

}
exit();
}

function editComments($conn)
{
	if (isset($_POST['Edit-comment'])) {
		$message=$_POST['edit-msg'];
		$uid=$_POST['uid'];
		$DATE=$_POST['date'];
		$USER=$_POST['user'];
		$sql= "UPDATE comments SET MESSAGE='$message' , DATE='$DATE', USER='$USER' WHERE uid='$uid'";
		$result=$conn->query($sql);?>
		<script type="text/javascript">
			window.location='parallax.PHP';
		</script>
		<?php
	}
}

function deleteComments($conn){
	if (isset($_POST['delete-btn'])) {
		$uid=$_POST['uid'];
		$sql="DELETE FROM comments WHERE uid='$uid'";
		$result=$conn->query($sql);?>
		<script type="text/javascript">
			window.location='parallax.PHP';
		</script>
		<?php
	}

}


function getLogin($conn){
	if (isset($_POST['login-btn'])) {
		
		$uid=$_POST['userid'];
		$password=$_POST['password'];

		$sqlUser="SELECT * FROM commentuser WHERE userid='$uid' AND password='$password'";
		$resultUser=$conn->query($sqlUser);
		
		if (!$rowUser=$resultUser->fetch_assoc()) {
			echo "Invalid detAILS";?>
			<script type="text/javascript">
				window.location='parallax.PHP?LOGIN-ERROR';
			</script>
			<?php
			}
		else{
			$_SESSION['ID']=$rowUser['id'];
			echo "YOU ARE NOW LOGGED IN";?>
			<script type="text/javascript">
				window.location='parallax.PHP?LOGGED-IN';
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
			window.location='parallax.PHP?LOGGED-OUt';
		</script>
		<?php
	}
}