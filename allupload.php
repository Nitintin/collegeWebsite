<?php
session_start();
include 'Connection.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>ALL UPLOADS</title>
</head>
<style type="text/css">
    header{
        background: black;
        color: white;
        text-align: center;
        width: 100%;
        height: 150px;
        padding: 10px;
        margin-top: 0px;
        font-family: arial;
        margin-left: 0px;
    }

    .image{
        margin-top: 20px;
    }
    .show-image{
        padding: 5px;
        display: inline;
    }


</style>
<body>

<header><h3>ALL UPLOADS</h3></header>

<?php
$count=0;
$sql="SELECT * from upload";
$result=$conn->query($sql);
$users=mysqli_num_rows($result);


while ($row=mysqli_fetch_assoc($result)) {
    echo "<div class='image'>";

        $userid=$row['userid'];
        $documents=$row['documents'];

        for ($i=1; $i<=$documents ; $i++) { 
            $filename="uploads/user".$userid."_".$i."*";
            $fileinfo=glob($filename);
            $fileExt= explode(".", $fileinfo[0]);
            $fileActExt= end($fileExt);

            if ($fileActExt=='pdf') {
                echo "<iframe src='uploads/user".$userid."_".$i.".".$fileActExt."' 
                style='width:350px; height:350px;' frameborder='0'></iframe>";
            }
            else{
                echo "<div class='show-image'>
                <img src='uploads/user".$userid."_".$i.".".$fileActExt."' height='350' width='350'>
                </div>";

            }
        }
}
?>

</div>

<br><br>
<a href="upload-form.php" class="btn btn-primary">Upload more files!</a>
<br><br>

<footer>
    <?php
    include'footer.php';
    ?>
</footer>

</body>
</html>