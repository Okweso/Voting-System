<!DOCTYPE html>
<html>
<head>
	<title>display data</title>
</head>
<body>

	<table width="50%" border="1" cellpadding="5" cellspacing="5">
		<thead>
			<tr>
				<th>Profile</th>
				<th>Name</th>
			</tr>
		</thead>
		<?php

		include "db_connection.php";
		$querry="SELECT * FROM candidates";
		$querry_run=mysqli_query($conn, $querry);
		while($row=mysqli_fetch_array($querry_run))
		{
			?>
			<tr>
				<td><?php echo'<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></td>
				<td><?php echo $row['candidate_name']; ?></td>
			</tr>
			<?php
		}

		?>
	</table>

</body>
</html>