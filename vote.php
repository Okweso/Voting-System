<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">

	<input type="file" name="cand_image" accept="image/png, image/jpeg"><br>
	

	<label>Name</label><br>
	<input type="text" name="cand_name"><br>

	<button type="submit" name="submit" value="Upload Image/Data">Submit</button>
</form>

</body>
</html>
<?php
session_start();
include "db_connection.php";
echo "welcome ".$_SESSION["user"];
if (isset($_POST["submit"])){
	$file=addslashes(file_get_contents($_FILES["cand_image"]["tmp_name"]));
	$name=$_POST["cand_name"];
	$sqry="INSERT INTO uploadimage(profile, name)VALUES('$file', '$name')";
	$run_querry=mysqli_query($conn, $sqry);
	if($run_querry)
	{
		echo "inserted successfully";
	}
	else
	{
		echo "not inserted successfully";
	}
}

?>