<?php
session_start();
include 'connection.inc.php';

if (isset($_POST['upload-btn'])) {
	$file=$_FILES['file'];
	echo "<br>".$fileName=$_FILES['file']['name'];
	echo "<br>".$fileSize=$_FILES['file']['size'];
	echo "<br>".$fileTmpName=$_FILES['file']['tmp_name'];
	echo "<br>".$fileError=$_FILES['file']['error'];
	echo "<br>".$fileType=$_FILES['file']['type'];

	$fileExt= explode('.', $fileName);
	$fileActExt = strtolower(end($fileExt));

	$allowFormat = array('jpeg','jpg','png','pdf');

	//-----error handlers
	if (in_array($fileActExt, $allowFormat)) {
		if ($fileError===0) {
			if ($fileSize<50000000) {

					$id=$_SESSION['ID'];
					$mysql="SELECT * from upload where userid='$id'";
					$myresult=$conn->query($mysql);
					$myrow=$myresult->fetch_assoc();

					if (!isset($myrow)) {
					$sql="INSERT into upload(userid,documents) values('$id','1')";
					$result=$conn->query($sql);
					$fileNewName = "user"."$id"."_1".".$fileActExt";
					$fileDestination= 'uploads/'.$fileNewName;
					move_uploaded_file($fileTmpName, $fileDestination);
					header("Location:upload-form.php?UPLOAD_SUCCESS_firstFile");
					}
						
					else
					{
					$sql2="UPDATE upload set documents=documents+1 where userid='$id'";
					$result2=$conn->query($sql2);

					$sql3="SELECT * from upload where userid='$id'";
					$result3=$conn->query($sql3);
					$row3=$result3->fetch_assoc();
					$documents=$row3['documents'];

					$fileNewName = "user"."$id"."_$documents".".$fileActExt";
					$fileDestination= 'uploads/'.$fileNewName;
					move_uploaded_file($fileTmpName, $fileDestination);
					//header("Location:upload-form.php?UPLOAD_SUCCESS_again");
					}
			}
			else{
				echo "File size too big!!";
			}
		}
		else{
			echo "There was an error uploading your file!";
		}
	}
	else{
		echo "Sorry , This format cant be uploaded!";
	}
	////-------
}

?>