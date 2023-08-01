<!DOCTYPE html>
<html>
<head>
	<title>voting page</title>
	<link REL=StyleSheet HREF=last_project.css>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script type="text/javascript" src="my_project.js"></script>

	<style type="text/css">
		
		input#check{
	width: 50px;
	height: 40px;
	color: blue;
	}
	button#submiti{
		position: relative;
		left: 380px;
	}


	</style>
</head>
<body onload="Vote_time_track()">
	<?php
	session_start();
	include "db_connection.php";
	$adm=$_SESSION["user"];
	$sq=$conn->query("SELECT status as state FROM student WHERE admission_number='$adm'");
	$st=$sq->fetch_array();
	$state=$st['state'];
	if ($state==0)
	{


	
	
	


	$querry=$conn->query("SELECT * FROM vote_time") or die(mysqli_errno());
	$td=$querry->fetch_array();
	$start_date= $td["start_date"];
	$end_date= $td["end_date"];
	$datenow=date("y-m-d H:i:s");
	
	$diff=strtotime($start_date)-(strtotime($datenow)+7200);
	$days= $diff/86400;
	$hrs= (fmod($diff, 86400))/3600;
	$mins= fmod(fmod($diff, 86400),3600)/60;
	$secs= fmod(fmod(fmod($diff, 86400),3600), 60);
	$sec_after=(strtotime($datenow)+7200)-strtotime($end_date);



	


	?>

	<div class="display_time">

			<h1 id="heading11">Elections starts on <?php echo $start_date;?></h1>
			<h2 id="heading2">Remaining <?php echo round($days,0)." days ".round($hrs,0)." hours ".round($mins,0)." minutes ".$secs." seconds";?></h2>
			
		</div>
	<script type="text/javascript">var secs="<?=$secs ?>"; var sec_after="<?=$sec_after ?>";</script>
	<script type="text/javascript">var sec_after="<?=$sec_after ?>";</script>

	
	<form id='sub'  onsubmit='Confirmation()' method='post'>

	


	<fieldset class="panel_body">
	<legend class="panel">President</legend>
		
		<?php
		
		
		$querry=$conn->query("SELECT * FROM candidates WHERE position='president'") or die(mysqli_errno());
		while($fetch = $querry->fetch_array())
		{
			?>
			<div id="presd">
				
				<div id="profile">
					<span><?php echo'<img src="data:image;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center> <?php echo $fetch['candidate_name'];?></center>
					<center><input id="check" type="checkbox" onchange="cbChange(this)" name="pres_id"  class="pres" value="<?php echo $fetch['candidate_id']; ?>">Vote</center>

			</div>
			<?php
		}

		?>

	</fieldset>


	<fieldset class="panel_body">
	<legend class="panel">Deputy President</legend>
		<?php
		include "db_connection.php";

		$querry=$conn->query("SELECT * FROM candidates WHERE position='deputy president'") or die(mysqli_errno());
		while($fetch = $querry->fetch_array())
		{
			?>
			<div id="presd">
				
				<div id="profile">
					<span><?php echo'<img src="data:image;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center><?php echo $fetch['candidate_name'];?></center>
					<center><input id="check" type="checkbox" onchange="cbChangedp(this)" name="dpres" class="dpres" value="<?php echo $fetch['candidate_id']; ?>">Vote</center>

			</div>
			<?php
		}

		?>
	</fieldset>




	<fieldset class="panel_body">
	<legend class="panel">Finance Minister</legend>
		<?php
		include "db_connection.php";

		$querry=$conn->query("SELECT * FROM candidates WHERE position='finance minister'") or die(mysqli_errno());
		while($fetch = $querry->fetch_array())
		{
			?>
			<div id="presd">
				
				<div id="profile">
					<span><?php echo'<img src="data:image;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center><?php echo $fetch['candidate_name'];?></center>
					<center><input id="check" type="checkbox" onchange="cbChangefm(this)" name="fmin" class="fin_min" value="<?php echo $fetch['candidate_id']; ?>">Vote</center>

			</div>
			<?php
		}

		?>
	</fieldset>




<fieldset class="panel_body">
	<legend class="panel">Education Minister</legend>
		<?php
		include "db_connection.php";

		$querry=$conn->query("SELECT * FROM candidates WHERE position='education minister'") or die(mysqli_errno());
		while($fetch = $querry->fetch_array())
		{
			?>
			<div id="presd">
				
				<div id="profile">
					<span><?php echo'<img src="data:image;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center><?php echo $fetch['candidate_name'];?></center>
					<center><input id="check" type="checkbox" onchange="cbChangeem(this)" name="emin" class="edu_min" value="<?php echo $fetch['candidate_id']; ?>">Vote</center>

			</div>
			<?php
		}

		?>
	</fieldset>




<fieldset class="panel_body">
	<legend class="panel">Transport Minister</legend>
		<?php
		include "db_connection.php";

		$querry=$conn->query("SELECT * FROM candidates WHERE position='transport minister'") or die(mysqli_errno());
		while($fetch = $querry->fetch_array())
		{
			?>
			<div id="presd">
				
				<div id="profile">
					<span><?php echo'<img src="data:image;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center><?php echo $fetch['candidate_name'];?></center>
					<center><input id="check" type="checkbox" onchange="cbChangetm(this)" name="tmin" class="trans_min" value="<?php echo $fetch['candidate_id']; ?>">Vote</center>

			</div>
			<?php
		}

		?>
	</fieldset>




<fieldset class="panel_body">
	<legend class="panel">Minister Sports</legend>
		<?php
		include "db_connection.php";

		$querry=$conn->query("SELECT * FROM candidates WHERE position='sports minister'") or die(mysqli_errno());
		while($fetch = $querry->fetch_array())
		{
			?>
			<div id="presd">
				
				<div id="profile">
					<span><?php echo'<img src="data:image;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center><?php echo $fetch['candidate_name'];?></center>
					<center><input id="check" type="checkbox" onchange="cbChangesm(this)" name="smin" class="sprt_min" value="<?php echo $fetch['candidate_id']; ?>">Vote</center>

			</div>
			<?php
		}

		?>
	</fieldset>



<fieldset class="panel_body">
	<legend class="panel">Internal Affairs</legend>
		<?php
		include "db_connection.php";

		$querry=$conn->query("SELECT * FROM candidates WHERE position='internal affairs'") or die(mysqli_errno());
		while($fetch = $querry->fetch_array())
		{
			?>
			<div id="presd">
				
				<div id="profile">
					<span><?php echo'<img src="data:image;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center><?php echo $fetch['candidate_name'];?></center>
					<center><input id="check" type="checkbox" onchange="cbChangeintn(this)" name="imin" class="intn_min" value="<?php echo $fetch['candidate_id']; ?>">Vote</center>

			</div>
			<?php
		}

		?>
	</fieldset>




<fieldset class="panel_body">
	<legend class="panel">Guild Secretary</legend>
		<?php
		include "db_connection.php";

		$querry=$conn->query("SELECT * FROM candidates WHERE position='secretary'") or die(mysqli_errno());
		while($fetch = $querry->fetch_array())
		{
			?>
			<div id="presd">
				
				<div id="profile">
					<span><?php echo'<img src="data:image/jpg;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center><?php echo $fetch['candidate_name'];?></center>
					<center><input id="check" type="checkbox" onchange="cbChangesec(this)" name="sec" class="sec" value="<?php echo $fetch['candidate_id']; ?>">Vote</center>

			</div>
			<?php
		}

		

		?>

		 
      </fieldset>
		<button type='submit' id='submiti'>Submit</button>

     
	
</form>

	

	







	<<script type="text/javascript">
		
		$(document).ready(function({
			$(".pres").on("change", function(){
				if($(".pres:checked").length==1)
				{
					$(".pres").attr("disabled", "disabled");
					$(".pres:checked").removeAttr("disabled");
				}
				else
				{
					$(".pres").removeAttr("disabled");
				}
			});
		}));
	</script>
	
		
	

	<?php

include "footer.php";
	/*if(isset($_POST["submit"]))
		{
			?>
			<script type="text/javascript">

			$(document).ready(function()
			{
				$(".pres").on("change", function()
				{
					if($(".pres:checked").length ==1)
				{
					$(".pres").attr("disabled", "disabled");
					$(".pres:checked").removeAttr("disabled");
				}
				else
				{
					$(".pres").removeAttr("disabled");
				}
				});
			});

		<?php
		}*/
	}
	else
	{
		header("Location:voted_page.php");
	}



		?>
	

</body>
</html>

