<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link REL=StyleSheet HREF=last_project.css>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="my_project.js"></script>
</head>
<body>


<div class="analysis">
	<div id="hh"><center><b>Election statistics</b></center></div>


	<?php
	session_start();
	include "db_connection.php";
					$qry_voted=$conn->query("SELECT COUNT(student_name) as total_num FROM student WHERE status=1") or die(mysqli_errno());
					$qry_reg=$conn->query("SELECT COUNT(student_name) as voters FROM student") or die(mysqli_errno());
					$percent="";
					try{
						$data=$qry_reg->fetch_array();
						$voters=$data['voters'];
					$row=$qry_voted->fetch_array();
					$sum=$row['total_num'];
					$percent=($sum/$voters)*100;
					
				}
					catch(DivisionByZeroError $e){
						$percent=0;
					}


					?>
<div id="det"><center><?php echo "Registered voters "; ?></center></div>
<div style="color: blue; font-size: 55px; position: relative; top: 72px;"><center><?php echo $voters;?></center></div><br>
<div id="det"><center><?php echo "Voter turnout  "; ?></center></div>
<div style="color: blue; font-size: 55px; position: relative; top: 72px;"><center><?php echo $sum;?></center></div><br>
<div id="det"><center><?php echo "Percentage turnout  "; ?></center></div>
<div style="color: blue; font-size: 55px; position: relative; top: 72px;"><center><?php echo round($percent, 2)."%";?></center></div><br>

</div>


<center><h1 style="font-size: 48px; position: relative; left: 100px;">Results of the 2023 university general elections</h1></center>


		
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
					<div id="vt"><center> <?php echo "Votes Garnered:  ".$fetch['votes'];?></center></div>
					<?php
					$qrysum=$conn->query("SELECT SUM(votes) as total FROM candidates WHERE position='president'") or die(mysqli_errno());
					$percentage="";
					try{
					$row=$qrysum->fetch_array();
					$sum=$row['total'];
					$percentage=($fetch['votes']/$sum)*100;
				}
					catch(DivisionByZeroError $e){
						$percentage=0;
					}
					?>
					<div style="color: green;"><center><?php echo round($percentage, 2)."%"; ?></center></div>

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
					<span><?php echo'<img src="data:image/jpg;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center> <?php echo $fetch['candidate_name'];?></center>
					<div id="vt"><center> <?php echo "Votes Garnered:  ".$fetch['votes'];?></center></div>
					<?php
					$qrysum=$conn->query("SELECT SUM(votes) as total FROM candidates WHERE position='deputy president'") or die(mysqli_errno());
					$percentage="";
					try{
					$row=$qrysum->fetch_array();
					$sum=$row['total'];
					$percentage=($fetch['votes']/$sum)*100;
				}
					catch(DivisionByZeroError $e){
						$percentage=0;
					}
					?>
					<div style="color: green;"><center><?php echo round($percentage, 2)."%"; ?></center></div>


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
					<center> <?php echo $fetch['candidate_name'];?></center>
					<div id="vt"><center> <?php echo "Votes Garnered:  ".$fetch['votes'];?></center></div>
					<?php
					$qrysum=$conn->query("SELECT SUM(votes) as total FROM candidates WHERE position='finance minister'") or die(mysqli_errno());
					$percentage="";
					try{
					$row=$qrysum->fetch_array();
					$sum=$row['total'];
					$percentage=($fetch['votes']/$sum)*100;
				}
					catch(DivisionByZeroError $e){
						$percentage=0;
					}
					?>
					<div style="color: green;"><center><?php echo round($percentage, 2)."%"; ?></center></div>

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
					<center> <?php echo $fetch['candidate_name'];?></center>
					<div id="vt"><center> <?php echo "Votes Garnered:  ".$fetch['votes'];?></center></div>
					<?php
					$qrysum=$conn->query("SELECT SUM(votes) as total FROM candidates WHERE position='education minister'") or die(mysqli_errno());
					$percentage="";
					try{
					$row=$qrysum->fetch_array();
					$sum=$row['total'];
					$percentage=($fetch['votes']/$sum)*100;
				}
					catch(DivisionByZeroError $e){
						$percentage=0;
					}
					?>
					<div style="color: green;"><center><?php echo round($percentage, 2)."%"; ?></center></div>
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
					<center> <?php echo $fetch['candidate_name'];?></center>
					<div id="vt"><center> <?php echo "Votes Garnered:  ".$fetch['votes'];?></center></div>
					<?php
					$qrysum=$conn->query("SELECT SUM(votes) as total FROM candidates WHERE position='transport minister'") or die(mysqli_errno());
					$percentage="";
					try{
					$row=$qrysum->fetch_array();
					$sum=$row['total'];
					$percentage=($fetch['votes']/$sum)*100;
				}
					catch(DivisionByZeroError $e){
						$percentage=0;
					}
					?>
					<div style="color: green;"><center><?php echo round($percentage, 2)."%"; ?></center></div>

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
					<center> <?php echo $fetch['candidate_name'];?></center>
					<div id="vt"><center> <?php echo "Votes Garnered:  ".$fetch['votes'];?></center></div>
					<?php
					$qrysum=$conn->query("SELECT SUM(votes) as total FROM candidates WHERE position='sports minister'") or die(mysqli_errno());
					$percentage="";
					try{
					$row=$qrysum->fetch_array();
					$sum=$row['total'];
					$percentage=($fetch['votes']/$sum)*100;
				}
					catch(DivisionByZeroError $e){
						$percentage=0;
					}
					?>
					<div style="color: green;"><center><?php echo round($percentage, 2)."%"; ?></center></div>

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
					<center> <?php echo $fetch['candidate_name'];?></center>
					<div id="vt"><center> <?php echo "Votes Garnered:  ".$fetch['votes'];?></center></div>
					<?php
					$qrysum=$conn->query("SELECT SUM(votes) as total FROM candidates WHERE position='internal affairs'") or die(mysqli_errno());
					$percentage="";
					try{
					$row=$qrysum->fetch_array();
					$sum=$row['total'];
					$percentage=($fetch['votes']/$sum)*100;
				}
					catch(DivisionByZeroError $e){
						$percentage=0;
					}
					?>
					<div style="color: green;"><center><?php echo round($percentage, 2)."%"; ?></center></div>

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
					<span><?php echo'<img src="data:image;base64,'.base64_encode($fetch['photo']).'" alt="My profile" style="width:80px; height:80px;">';?></span></div>
					<center> <?php echo $fetch['candidate_name'];?></center>
					<div id="vt"><center> <?php echo "Votes Garnered:  ".$fetch['votes'];?></center></div>
					<?php
					$qrysum=$conn->query("SELECT SUM(votes) as total FROM candidates WHERE position='secretary'") or die(mysqli_errno());
					$percentage="";
					try{
					$row=$qrysum->fetch_array();
					$sum=$row['total'];
					$percentage=($fetch['votes']/$sum)*100;
				}
					catch(DivisionByZeroError $e){
						$percentage=0;
					}
					?>
					<div style="color: green;"><center><?php echo round($percentage, 2)."%"; ?></center></div>

			</div>
			
			<?php
		}

		?>
		
	</fieldset>
<?php
include "footer.php";
?>


</body>
</html>