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
				<li><a class="student"href="student.php">Student</a>
					<li><a class="student1"href="adds.php">Add-Student</a></li>
					<li><a class="student2"href="views.php">View-Student</a></li>
				</li>
				<li><a class="Duration"href=duration.php>Duration</a></li>
				<li><a class="Adds"href="seatplan.php">Seatplan</a></li>
				<li><a class="views"href="operation.php">Operation.html</a></li>
			</ul>
		</div>
		<div class="content">
			<font color="#f39c12"><h1>Add Student</h1></font>
			<div id="box">
				<div class="box-top"></div>
				<div class="box-panel">
					<form action="adds.php" method="post">
						<?php include('errors.php'); ?>
						<table   style="padding-left:50px">
							<tr ><td><h4>Student Name</h4></td><td style="padding-left:20px"><input type="text" name="sname"autofocus="1"></td></tr>
							<tr ><td><h4>Roll No.</h4></td><td style="padding-left:20px"><input type="text" name="rollno"autofocus="1"></td></tr>
							<tr ><td><h4>Registation No.</h4></td><td style="padding-left:20px"><input type="text"  name="regno" autofocus="1"></td></tr>
							
							<tr ><td><h4>Batch No.</h4></td><td style="padding-left:20px" >
								<select name="bn">
  									<option value="2016-19" name="2016-19">2016-19</option>
									  <option value="2017-20" name="2017-20">2017-20</option>
									  <option value="2018-21" name="2018-21">2018-21</option>
									  <option value="2019-22" name="2019-22">2019-22</option>
								</select>
							</td></tr>
							<tr ><td><h4>Department No.</h4></td><td style="padding-left:20px" >
								<select name="dn">
  									<option value="BCA" name="BCA">BCA</option>
									  <option value="BBA" name="BBA">BBA</option>
									  <option value="BCP" name="BCP">BCP</option>
									  <option value="BBE" name="BBE">BBE</option>
								</select>
							</td></tr>

							<tr >
								<td><h4>Status</h4>
								<td style="padding-left:20px">
									<input type="radio" name="status" value="Active"><label>Active</label>
									<input type="radio" name="status" value="Inactive"><label>Inactive</label>
								</td>
							</tr>
							<tr style="padding-top:20px"><td></td><td style="padding-top:20px"><input type="Submit" name="addstudent" value="Add Batch" align="right"></td></tr>
						</table>
						
					</form>
					
					
				</div>
				<div class="box-top"></div>
				<div class="box-panel">
				<?php 
$con = mysqli_connect('localhost', 'root', '', 'realdata');
$query="select * from addstudent";

$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<h1> Student Details</h1>
		<table border="1" bgcolor="#3498db" BORDERCOLOR="#fff">
			<tr border="1">
				<th>Name</th>
				<th>Roll No.</th>
				<th>Regstration No.</th>
				<th>Batch No.</th>
			     <th>Department No.</th>
			     <th>Status</th>
			     <th> Delete</th>
			</tr>
			<?php
			for($i=1;$i<=$num;$i++)
			{
				$row=mysqli_fetch_array($result);
				?>
				<tr border="1">
					<td><?php echo $row['sname'];?></td>
					<td><?php echo $row['roll_no'];?></td>
					<td><?php echo $row['reg_no'];?></td>
					<td><?php echo $row['batch_no'];?></td>
					<td><?php echo $row['department_name'];?></td>
					<td><?php echo $row['status'];?></td>
					<td>
						<a href="adds.php delete=<?php echo $id;?> onclick="return confirm('Are you sure?');"> Delete</a>
					</td>
				<?php

			}
			?>
		</table>
				</div>
			</div>
			<?php
			if(isset($_GET['delete'])){
				$delete_id=$_GET['delete'];
				$del="DELETE FROM users WHERE id='$delete_id'";
				$r=mysqli_query($con,$del);
				if($r==1)
				{
					echo "recored delete";
				}
			} 
			?>
			
		</div>
	</div>
</body>
</html>
