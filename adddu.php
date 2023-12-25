<?php include('addserver.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Exam Seat Arrangment</title>
	<link rel="stylesheet" type="text/css" href="styles/global.css"/>
	<meta mame="viewport" content="width=device-width,initial-scale:1.0,user-scalabe=0"/>
</head>
<body>

	<div id="header">
		<div class="logo"><a href="#"><span>Exam</span> Seat</a></div>
	</div>
	<div id="container">

		<div class="sidebar">
			<div >
				<img src="logo13.jpg" width="60" height="55">
				<font color="White"><p>Admin Online</p></font>
			</div>
			<ul id="nav">
				<li><a class="Dashbord" href="index.php">Dashbord</a></li>
				<li><a class="Room"href="room.php">Room</a></li>
				<li><a class="Department"href="Department.php">Department</a></li>
				<li><a class="Batch"href="batch.php">Batch</a></li>
				<li><a class="student"href="student.php">Student</a></li>
				<li><a class="Duration"href=duration.php>Duration</a>
					<ul>
						<li><a class="Duration1"href=adddu.php>Add Duration</a></li>
						<li><a class="Duration2"href=viewdu.php>View Duration</a></li>
					</ul>
				</li>
				<li><a class="Adds"href="seatplan.php">Seatplan</a></li>
				<li><a class="views"href="operation.php">Operation</a></li>
			</ul>
		</div>
		<div class="content">
			<font color="#f39c12"><h1>Add Duration</h1></font>
			<div id="box">
				<div class="box-top"></div>
				<div class="box-panel">
					<form action="adddu.php" method="post">
						<?php include('errors.php'); ?>
						<table   style="padding-left:50px">
							<tr ><td><h4>Exam Duration</h4></td><td style="padding-left:20px"><input type="type" name="td" autofocus="1"></td></tr>
							
							<tr >
								<td><h4>Status</h4>
								<td style="padding-left:20px">
									<input type="radio" name="status" value="Active"><label>Active</label>
									<input type="radio" name="status" value="Inactive"><label>Inactive</label>
								</td>
							</tr>
							<tr style="padding-top:20px"><td></td><td style="padding-top:20px"><input type="Submit"  name="adddu"value="Add Batch" align="right"></td></tr>
						</table>
						
					</form>
					</div>
				<div id="box">
				<div class="box-top"></div>
				<div class="box-panel">
					<?php 
$con = mysqli_connect('localhost', 'root', '', 'realdata');
$query="select * from addduration";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<h1> Student Details</h1>
		<table border="10px" bgcolor="#3498db" BORDERCOLOR="#fff">
			<tr border="1">
				<th>Time Duration</th>
				
				<th>Status</th>
				
			</tr>
			<?php
			for($i=1;$i<=$num;$i++)
			{
				$row=mysqli_fetch_array($result);
				?>
				<tr border="1">
					<td><?php echo $row['time_duration'];?></td>
					<td><?php echo $row['status'];?></td>
				</tr>
				<?php
			}
			?>
		</table>
				</div>

			</div>
			
		</div>
	</div>
</body>
</html>
