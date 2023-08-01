if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if (empty($_POST["cand_name"]))
			{
				$submt_err="this field is required";
			}
			else
			{
				$candid_name=$_POST["cand_name"];
			}

			if (empty($_POST["cand_school"]))
			{
				$submt_err;
			}
			else
			{
				$candid_school=$_POST["cand_school"];
			}

			if (empty($_POST["cand_image"]))
			{
				$submt_err;
			}
			else
			{
				$candid_photo=$_POST["cand_image"];
			}

			if (empty($_POST["cand_pos"]))
			{
				$submt_err;
			}
			else
			{
				$candid_pos=$_POST["cand_pos"];
			}

			if (empty($_POST["gender"]))
			{
				$submt_err;
			}
			else
			{
				$candid_gender=$_POST["gender"];
			}

			if (empty($_POST["cand_year"]))
			{
				$submt_err;
			}
			else
			{
				$candid_year=$_POST["cand_year"];
			}
			$querry="INSERT INTO candidates(candidate_name, school, photo, position, gender, year_of_study) VALUES(?,?,?,?,?,?)";
			if ($stmt=mysqli_prepare($conn, $querry))
			{
				mysqli_stmt_bind_param($stmt, "ssssss", $param_cname, $param_cschool, $param_cphoto, $param_cposition, $param_cgender, $param_cyear);
				$param_cname=$candid_name;
				$param_cschool=$candid_school;
				$param_cphoto=$candid_photo;
				$param_cposition=$candid_pos;
				$param_cgender=$candid_gender;
				$param_cyear=$candid_year;
				if (mysqli_stmt_execute($stmt))
				{
					echo "data inserted successfully";
				}
				else
				{
					echo "data not inserted";
				}
			}

		}






if ($_SERVER["REQUEST_METHOD"]=="post")
		{
			$s_date=$_POST['election_date'];
			$s_time=$_POST['election_time'];
			$s_duration=$_POST['election_duration'];
			$qry="UPDATE election_details SET date=$s_date, start_time=$s_time, duration=$s_duration";
			$qryc=mysqli_query($conn,$qry);
			if ($qryc)
			{
				echo "edited successfully";
			}
			else
			{
				echo "not successful";
			}	

		}
		
		$query = $conn->query("SELECT * FROM election_details") or die(mysqli_errno());
		while($fetch = $query->fetch_array())
		{
		?>
		<button id="details_btn">Edit the details</button>
		<form id="election_data" method="" action="">
			<div style="margin: 25px;">
			<label>Date</label><br>
			<input type="date" name="election_date" value="<?php echo $fetch['date']; ?>"><br>
			</div>
			<div style="margin: 25px;">
			<label>Starting time</label><br>
			<input type="time" name="election_time" value="<?php echo $fetch['start_time']; ?>"><br>
			</div>
			<div style="margin: 25px;">
			<label>Duration</label><br>
			<input type="number" name="election_duration" value="<?php echo $fetch['duration']; ?>"><br>
			</div>
			<button type="submit">Save</button>
		</form>
		<table id="table_data">
			<thead>
				<tr>
					<th>Date</th>
					<th>Starting time</th>
					<th>Duration</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $fetch['date']; ?></td>
					<td><?php echo $fetch['start_time']; ?></td>
					<td><?php echo $fetch['duration']." hours"; ?></td>
				</tr>
			</tbody>
		</table>	